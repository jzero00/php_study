<?php
    echo "<pre>";
    $f = filter_list();
    print_r($f);

$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;

$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}

$option = array("options"=>array("min_range"=>0,"max_range"=>99));
if(!filter_var($int,FILTER_VALIDATE_INT,$option)){
    echo("정수가 아닙니다.");
} else {
  echo("정수입니다.");
}

echo filter_var('abc@test.com', FILTER_VALIDATE_EMAIL);
echo filter_var('192.168.1.9', FILTER_VALIDATE_IP);


?>