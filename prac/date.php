<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br>";

echo "The time is " . date("h:i:sa"). "<br>";
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa"). "<br>";

echo "mktime <br> Syntax mktime(hour, minute, second, month, day, year)"."<br>";

$d1=mktime(22, 41, 54, 4, 30, 2024);
echo "Created date is " . date("Y-m-d h:i:sa", $d1)."<br>";

$d2=strtotime("10:30pm April 30 2024");
echo "Created date is " . date("Y-m-d h:i:sa", $d2)."<br>";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>
<!DOCTYPE html>
<html>
<body>
만나이 계산기
<input id="year" name="year">
<button type="button" id="submit">제출</button>
<div id="res"></div>
© 2010-<?php echo date("Y");?>
</body>
<script>
<?php
$cur_year = date("Y");
?>
    document.querySelector("button#submit").addEventListener("click",function(){
        let year = document.querySelector("input#year").value;
        let cur_year = <?php echo $cur_year;?>;
        let age = 0;
        age = cur_year - year;
        document.querySelector("div#res").innerHTML = "당신의 만 나이는 " + age + "살입니다.";
    });
</script>
</html>