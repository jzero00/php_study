<?php
    include $_SERVER["DOCUMENT_ROOT"]."/connect.php";

    $data = json_decode($_POST['data']);
    $usid = $data->usid;

    $sql = "SELECT * FROM safejsp.user
            WHERE usid = '".$usid."'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);

    echo $count;
    $json = "";

    if($count == 0) {
        $json = json_encode(array("status"=> "success","message"=> "200"));
    } else {
        $json = json_encode(array("status"=> "fail","message"=> "300"));
    }
?>