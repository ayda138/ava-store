<?php
include("theme-header.php");
$username=$_POST["username"];
$password=$_POST["password"];

$connect=mysqli_connect("localhost","root","","ava");
$result=mysqli_query($connect,"SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'");
mysqli_close($connect);
$row=mysqli_fetch_array($result);

if($row){
    include("admin.php");
}
?>
<?php
include("theme-footer.php");
?>