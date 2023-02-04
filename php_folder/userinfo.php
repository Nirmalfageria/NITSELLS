<?php

$con = mysqli_connect('localhost','root');

if($con){
echo "connection successful";
} else{ echo "No connection";
}
mysqli_select_db($con, 'spdb');
$product =$_POST['product'];
$student =$_POST['student'];
$mobile =$_POST['mobile'];
$price =$_POST['price'];
$email =$_POST['email'];
$comments =$_POST['comments'];
$query = "insert into products(product,student,mobile,price,email,comments) values('$product','$student','$mobile','$price','$email.','$comments')";

echo "$query"; 

mysqli_query($con, $query);
header('location;index.php');
?>  