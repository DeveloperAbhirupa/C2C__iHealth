<?php
$servername = "localhost";
$username = "root";
$password = "";
$uname=$_POST['uname'];
$pass=$_POST['psw'];
$counter=0;
$return=array();
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($conn,"lol");
$sql="SELECT * FROM `users` WHERE username='$uname' and password='$pass'";
$result=mysqli_query($conn, $sql) or die(my_sqli_error($conn));
$check = mysqli_fetch_array($result);
if(isset($check)){
echo 'success';
}else{
echo 'failure';
}
?>
