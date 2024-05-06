<?php
    $myfile = fopen("webdictionary.txt","r") or die("Unable to open file!");
    echo fread($myfile,filesize("webdictionary.txt"));
    // 한줄만 읽어낼때 fgets
    echo fgets($myfile,filesize("webdictionary.txt"));
    // 파일의 끝까지 읽었는가 체크 feof()
    while (!feof($myfile)) {
        echo fgets($myfile) ."<br>";
    }
    // 파일에 있는 한 글자씩 읽어냄 fgetc()
    while (!feof($myfile)) {
        echo fgetc($myfile) ."<br>";
    }
    fclose($myfile);
?>