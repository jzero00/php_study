<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
if(isset($_SESSION["favcolor"])){
    echo "세션 존재";
} else {
    echo "세션 미존재";
}
?>

</body>
</html>