<?php
$username=$_POST['username'];
$p=$_POST['password'];
if($username=="Bank" && $p==1234)
{

 	echo file_get_contents("bankmanhm.html");
 }
else
    echo "Given username is not registered,please register first";
?>
</body>
</html>