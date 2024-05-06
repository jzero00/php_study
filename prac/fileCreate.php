<?php
    $myfile = fopen("testfile.txt", "w");

    // 파일 작성
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);

    // 파일 내용에 더 내용 추가
    $myfile2 = fopen("newfile2.txt", "a") or die("Unable to open file!");
    $txt2 = "Donald Duck\n";
    fwrite($myfile2, $txt2);
    $txt2 = "Goofy Goof\n";
    fwrite($myfile2, $txt2);
    fclose($myfile2);
?>