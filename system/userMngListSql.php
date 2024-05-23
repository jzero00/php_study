<?php
    include $_SERVER["DOCUMENT_ROOT"]."/connect.php";
    $offset = 0;
    if(isset($_POST["page"]) && $_POST["page"] != 1) $offset = 10*($_POST["page"]-1);
    $where = '';
    $searchType = '';
    $keyword = '';

    if(isset($_POST['searchType'])) $searchType = $_POST['searchType'];
    if(isset($_POST['keyword'])) $keyword = $_POST['keyword'];
    if(isset($_POST['offset'])) $offset = $_POST['offset'];
                
    if($searchType === 'nm') $where = $where."AND (userNm LIKE CONCAT('%','".$keyword."','%'))";
    if($searchType === 'id') $where = $where."AND (usid LIKE CONCAT('%','".$keyword."','%'))";
    if($searchType === 'pn') $where = $where."AND (userTelno LIKE CONCAT('%','".$keyword."','%'))";
    if($searchType === 'ed') $where = $where."AND (userEndde LIKE CONCAT('%','".$keyword."','%'))";

    $sql = "SELECT u.seq, c2.categoryNm as category1, c1.categoryNm as category2, 
            ua.authNm, u.userNm, u.usid,
            u.userTelno, u.userEndde, u.userConfmAt 
            FROM safejsp.user u
            LEFT JOIN safejsp.category c1
            ON u.userCtgry = c1.categoryId
            LEFT JOIN safejsp.category c2
            ON c1.categoryPid = c2.categoryId
            LEFT JOIN safejsp.userAuth ua 
            ON ua.authoryNo = u.authoryNo WHERE 1=1 ".$where.
            "ORDER BY u.seq DESC
            LIMIT 10 OFFSET ".$offset;
                
    $result = mysqli_query($conn,$sql);
                //$result = $conn->query($sql);
                //$row = $result->fetch_array(MYSQLI_ASSOC); ?? 왜 result 하나가빠짐?

    $cnt_sql = "SELECT COUNT(*) as cnt
                FROM safejsp.user u, safejsp.userAuth ua
                WHERE 1=1
                AND u.authoryNo = ua.authoryNo ".$where;

    $cnt_res = $conn->query($cnt_sql);
    $cnt = $cnt_res->fetch_array(MYSQLI_ASSOC);
    $cnt = $cnt['cnt'];
    //echo $cnt."건이 검색되었습니다.";
                
    $list = "";
    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        $list = $list.'<tr>';
        $list = $list.'<td><input type="checkbox"></td>';
        $list = $list.'<td>'.$row["seq"].'</td>';
        $list = $list.'<td>'.$row["category1"].'</td>';
        $list = $list.'<td>'.$row["category2"].'</td>';
        $list = $list.'<td>'.$row["authNm"].'</td>';
        $list = $list.'<td>'.$row["userNm"].'</td>';
        $list = $list.'<td>'.$row["usid"].'</td>';
        $list = $list.'<td>'.$row["userTelno"].'</td>';
        $list = $list.'<td>'.$row["userEndde"].'</td>';
        $list = $list.'<td>';
        if($row['userConfmAt'] === "C") $list = $list.'<span id="usrAprv" class="list_no" onclick='."'aprvChnge("."'0'".'",this)'.'>승인취소</span>';
        if($row['userConfmAt'] === "0") $list = $list.'<span id="usrAprv" class="list_ing" onclick='."'aprvChnge("."'Y'".'",this)'.'>대기중</span>';
        if($row['userConfmAt'] === "Y") $list = $list.'<span id="usrAprv" class="list_ok" onclick='."'aprvChnge("."'E'".'",this)'.'>승인완료</span>';
        if($row['userConfmAt'] === "E") $list = $list.'<span id="usrAprv" class="list_over" onclick='."'aprvChnge("."'C'".'",this)'.'>승인만료</span>';
        $list = $list.'</td>';
        $list = $list.'</tr>';
    }
    $conn->close();
?>