<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:#f4f7f7;
}

li {
    float: left;
}

li a {
    display: block;
    color: #5990ea;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>

<ul><li><a href="index.html" class="active">Home</a></li>
						<li><a href="about.html" class="scroll">About</a></li>    
						<li><a href="Blogin.html" class="scroll">Manager Login</a></li>  
						<li><a href="Login.html" class="scroll">Customer Login</a></li>    
						<li><a href="register.html" class="scroll">Register</a></li>    	
					</ul>

</body>
</html>
<?php
$conn=mysqli_connect('localhost','root','hello','register');
 echo "<h1><b>Hello Bank Manager</b></h1>";
// Checking mysql connection
 
// Writing a mysql query 
 ?>
 <?php
 

	$sql = "select * from createac";
 
	$qury = mysqli_query($conn,$sql);
 
	while($row = mysqli_fetch_array($qury))
		echo "<br>Account_No: $row[0]</br><br>Name: $row[1]</br><br>Occupation: $row[2]</br><br>Email:$row[3]</br><br>Mobile_No: $row[4]</br><br />";
 echo "--------------------------------------------------------------------------------------------------------------------------------------------------";
			 
$conn->close();
?>

