<?php
$username=$_POST['username'];
$p=$_POST['Amt']; 
$conn=new mysqli('localhost','root','hello','register');
$sql = "UPDATE createac SET salary=salary+$p WHERE Name='$username' ";
if ($conn->query($sql) === TRUE) {
    	echo file_get_contents("panel.html");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>