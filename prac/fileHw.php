<?php
    // hello.txt 만들어서 내용 저장후 불러내기
    $myfile = fopen("hello.txt","w") or die("Unable to open file!");
    $txt = "이이 안녕하세요\n";
    fwrite($myfile,$txt);
    fclose($myfile);

    $myfile = fopen("hello.txt","r") or die("Unable to open file!");
    while (!feof($myfile)) {
        echo fgets($myfile) ."<br>";
    }
    fclose($myfile);
?>