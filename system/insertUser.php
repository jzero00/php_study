<?php
    include $_SERVER["DOCUMENT_ROOT"]."/connect.php";

    $stmt = $conn->prepare("INSERT INTO safejsp.user (userTy, userCtgry, usid, userNm, password, seq, userEndde, userConfmAt,authoryNo, userClsf)
                            VALUES 
                            (0, 0, ?, ?, ?,
                            (SELECT COALESCE(MAX(a.seq)+1,1) AS seq FROM safejsp.user a),
                            (SELECT DATE_ADD((DATE_SUB(now(), INTERVAL dayofyear(now()) day)) , INTERVAL 1 YEAR)),
                             0, ?, ?)");

    $stmt->bind_param("sssis", $usid, $userNm, $password, $authoryNo, $userClsf);

    $usid = $_POST['usid'];
    $userNm = $_POST['userNm'];
    $password = $_POST['password'];
    $authoryNo = $_POST['authoryNo'];
    $userClsf = $_POST['userClsf'];

    $result = '';
    try{
        $stmt->execute();
        $stmt->close();
        $conn->close();
        
        $result = "등록 성공";
    } catch (Exception $e){
        $stmt->close();
        $conn->close();
        $result = "등록 실패".$e->getMessage();
    } finally {
        echo $result;
    }

    echo $result;
?>