<?php
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$conn=mysqli_connect('localhost','root','','register');
if($conn->connect_error)
    die("connection failed".$conn->connecterror);
$sql1="insert into regis values('$username','$password','$email')";
if($conn->query($sql1))
{
    echo "registration successful";
	echo file_get_contents("Login.html");
}
else
{
    echo "registration unsuccessful";
}
?>                                                                                                                                                                                              
