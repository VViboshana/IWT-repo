<?php
//The connection object
$con=new mysqli("localhost","root","","EZpark"); // Check connection

if($con->connect_error)
{
    die("Connection failed: " . $con->connect_error);
}
else{
    echo "successful@";
}

$unam=$_POST["name"];
$usvno=$_POST["vno"];
$uphon=$_POST["phone"];
$ueadd=$_POST["eadd"];
$umeg=$_POST["meg"];


$sql="INSERT INTO contactus (name,vnumber,phoneNo,email,message) VALUES ('$unam','$usvno','$uphon','$ueadd','$umeg')";
if($con->query($sql))
{
    echo "Insert successfuly";
    echo header("location:http://localhost/php-form/ContactUs/contactUs.php");
}
else
{
    echo "Erroe".$con->error;
}$con->close();
