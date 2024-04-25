<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php   include $_SERVER["DOCUMENT_ROOT"]."/inc/head.inc"; ?>
</head>
<body>
    <?php   include $_SERVER["DOCUMENT_ROOT"]."/inc/header.inc"; ?>
    <div id="content">
        <article class="category">
            <div class="board_title">
                <h3>카테고리</h3><a class="more" href="">+</a>
        </div>
        <div id="browser" class="filetree treeview">
            <ul>
                <li class="closed expandable" id="1">
                    <div class="hitarea closed-hitarea expandable-hitarea"></div>
                    <span class="folder"><a title="현장" href="index.do?cidx=537" class="">현장</a></span>
                    <ul style="display: none;">
                        <li class="closed" id="111"><span class="folder"><a title="1구역" href="index.do?cidx=698">1구역</a></span></li>
                        <li class="closed" id="112"><span class="folder"><a title="2구역" href="index.do?cidx=699">2구역</a></span></li>
                        <li class="closed" id="113"><span class="folder"><a title="3구역" href="index.do?cidx=700">3구역</a></span></li>
                        <li class="closed" id="114"><span class="folder"><a title="4구역" href="index.do?cidx=701">4구역</a></span></li>
                        <li class="closed last" id="115"><span class="folder"><a title="5구역" href="index.do?cidx=702">5구역</a></span></li>
                    </ul>
                </li>
                <li class="closed expandable" id="110">
                    <div class="hitarea closed-hitarea expandable-hitarea"></div>
                    <span class="folder"><a title="구역" href="index.do?cidx=697" class="">구역</a></span>
                    <ul style="display: none;">
                        <li class="closed" id="111"><span class="folder"><a title="1구역" href="index.do?cidx=698">1구역</a></span></li>
                        <li class="closed" id="112"><span class="folder"><a title="2구역" href="index.do?cidx=699">2구역</a></span></li>
                        <li class="closed" id="113"><span class="folder"><a title="3구역" href="index.do?cidx=700">3구역</a></span></li>
                        <li class="closed" id="114"><span class="folder"><a title="4구역" href="index.do?cidx=701">4구역</a></span></li>
                        <li class="closed last" id="115"><span class="folder"><a title="5구역" href="index.do?cidx=702">5구역</a></span></li>
                    </ul>
                </li>
                
                <li class="closed expandable lastExpandable" id="116">
                    <div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea"></div>
                    <span class="folder"><a title="설비" href="index.do?cidx=703" class="">설비</a></span>
                    <ul style="display: none;">
                        <li class="closed" id="117"><span class="folder"><a title="A동" href="index.do?cidx=704">A동</a></span></li>
                        <li class="closed" id="118"><span class="folder"><a title="B동" href="index.do?cidx=705">B동</a></span></li>
                        <li class="closed" id="119"><span class="folder"><a title="C동" href="index.do?cidx=706">C동</a></span></li>
                        <li class="closed last" id="120"><span class="folder"><a title="D동" href="index.do?cidx=707">D동</a></span></li>
                    </ul>
                </li>
            </ul>
        </div>
    </article>
    <div class="board">
        <div class="navi">
            <h2>사용자관리</h2>
            <ul>
                <li><a href="userMngList.do">시스템관리</a></li>
                <li><a href="userMngList.do">사용자관리</a></li>
            </ul>
        </div>
        <div class="board_inner">
            <table class="sch_table">
                <colgroup>
                <col style="width:140px">
                <col style="width:auto">
                </colgroup>
                <tr>
                    <th>구분</th>
                    <td>
                        <select name="searchType" id="searchType" class="selectCSS">
                            <option value="nm">이름 </option>
                            <option value="id">아이디</option>
                            <option value="pn">휴대폰번호</option>
                            <option value="ed">만료일</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>상태</th>
                <td>
                    <input type="checkbox" id="st1" value="1" class="usrStatus"> <label for="st1">대기중</label>
                    <input type="checkbox" id="st2" value="1" class="usrStatus"> <label for="st2">승인취소</label>
                    <input type="checkbox" id="st3" value="1" class="usrStatus"> <label for="st3">승인완료</label>
                    <input type="checkbox" id="st4" value="1" class="usrStatus"> <label for="st4">승인만료</label>
                </td>
            </tr>
            <tr>
                <th>검색어</th>
                <td>
                    <input name="keyword" id="keyword" type="text" class="inputSearch2" value="">
                    <button class="btn_sch" onclick="search()">검색</button>
                    <button class="btn_reset">초기화</button>
                </td>
            </tr>
        </table>
        <ul class="dw_bar">
            <li><a onclick="deleteUser()">선택삭제</a></li>
            <li><a href="userMngReg.do">등록</a></li>
        </ul>
        <table class="table_list">
            <colgroup>
            <col style="width:auto">
            <col style="width:auto">
            <col style="width:10%">
            <col style="width:15%">
            <col style="width:10%">
            <col style="width:10%">
            <col style="width:10%">
            <col style="width:15%">
            <col style="width:15%">
            <col style="width:10%">
        </colgroup>
        <tr>
            <th><input type="checkbox"></th>
            <th>No.</th>
            <th>카테고리1</th>
            <th>카테고리2</th>
            <th>권한</th>
            <th>이름</th>
            <th>아이디</th>
            <th>휴대폰번호</th>
            <th>만료일</th>
            <th>승인여부</th>
        </tr>
            <?php
                include $_SERVER["DOCUMENT_ROOT"]."/connect.php";
                $sql = "SELECT u.seq, c2.categoryNm as category1, c1.categoryNm as category2, 
                        ua.authNm, u.userNm, u.usid,
                        u.userTelno, u.userEndde, u.userConfmAt 
                        FROM safejsp.user u
                        LEFT JOIN safejsp.category c1
                        ON u.userCtgry = c1.categoryId
                        LEFT JOIN safejsp.category c2
                        ON c1.categoryPid = c2.categoryId
                        LEFT JOIN safejsp.userAuth ua 
                        ON ua.authoryNo = u.authoryNo";
                $result = $conn->query($sql);
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $list = "";
                while ($row = mysqli_fetch_array($result)) {
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
                echo $list;
            ?>
        </table>
        <form id="searchForm" method="post" action="userMngList.php">
            <input type='hidden' name="page" value="${pageMaker.cri.page }" />
            <input type='hidden' name="keyword" value="${pageMaker.cri.keyword }" />
            <input type='hidden' name="searchType" value="${pageMaker.cri.searchType }" />
            <input type='hidden' name="cnSe" value="${pageMaker.cri.cnSe }" />
        </form>
        <!-- 					<ul class="dw_bar"> -->
            <!-- 						<li><a href="sub071.php">목록</a></li> -->
            <!-- 					</ul> -->
            <ul class="page_bar">
                <!--<%@ include file="../../include/pagination.jsp" %>-->
            </ul>
        </div>
    </div>
</div>
</body>
</html>