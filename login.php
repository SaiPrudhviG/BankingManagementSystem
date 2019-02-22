<?php
$username=$_POST['username'];
$p=$_POST['password'];
$conn=new mysqli('localhost','root','hello','register');
$sql="select password from regis where username='$username'";
$result=$conn->query($sql);
if($result->num_rows)
{
    $res=$result->fetch_assoc();
    $pc=$res['password'];
    if($p==$pc)
	echo file_get_contents("panel.html");  
  else
        echo "enter correct password";
}
else
    echo "Given username is not registered,please register first";
?>
