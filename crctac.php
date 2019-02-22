<?php
$name=$_POST['user_name'];
$Occupation=$_POST['Occupation'];
$Email=$_POST['user_email'];
$phno=$_POST['mbno'];
$conn=mysqli_connect('localhost','root','hello','register');
//$Account_No=$Account_No+1;
if($conn->connect_error)
    die("connection failed".$conn->connecterror);
$sql1="insert into createac (name,Occupation,email,Mobile_No)values('$name','$Occupation','$Email','$phno')";
if($conn->query($sql1)==True)
{
		echo file_get_contents("afteracccr.html");
}
else
{
echo "Error: " . $sql1 . "<br>" . $conn->error;
}
?>                                                                                                                                                                                              
