<?php
    $mysqli = include $_SERVER["DOCUMENT_ROOT"]."/connect.php";
    if($mysqli){
        echo "connect: success<br>";
    } else {
        echo "connect: fail<br>";
    }
?>