<?php
require 'cofig_contactus.php';

$vnum=$_POST["vno"];

$sql="DELETE FROM contactus WHERE vnumber='$vnum'";
if($con->query($sql))
{
    Header('Location: read_contact_us.php');
}
else
{
    echo "Not Success";
}$con->close();