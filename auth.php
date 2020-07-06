<?php
@ob_start();
session_start();
?>

<?php
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
