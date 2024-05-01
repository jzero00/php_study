<?php
    include $_SERVER["DOCUMENT_ROOT"]."/connect.php";
    $usid = $_POST["usid"];
    $sql = "SELECT COUNT(*) as cnt FROM safejsp.user
            WHERE usid = '".$usid."'";
    $result = $conn->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $count = $row['cnt'];

    $json = "";

    if($count != 0) {
        $json = json_encode(array("status"=> "success","message"=> "200"));
    } else {
        $json = json_encode(array("status"=> "fail","message"=> "300"));
    }
?>