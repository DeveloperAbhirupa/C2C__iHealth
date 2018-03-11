<?php
$servername = "localhost";
$username = "root";
$password = "atom123";
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
mysqli_select_db($conn,"lol2");
$sql=select * from 'users' where username='$uname' and password='$pass';  
$sql="INSERT INTO accounts(username,password)
VALUES ('$uname','$pass')";
if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
