<?php
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

$sql="UPDATE contactus set name='$unam', phoneNo='$uphon', email='$ueadd', message='$umeg' WHERE vnumber='$usvno' ";
if($con->query($sql))
{
    echo "Updated";
    echo header("location:http://localhost/php-form/ContactUs/read_contact_us.php");

}
else
{ 
    echo "Not updated";
}