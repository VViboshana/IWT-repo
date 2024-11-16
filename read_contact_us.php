<?php
require './cofig_contactus.php';

$sql="SELECT * FROM contactus";

$con->query($sql);
$result=$con->query($sql);

if($result->num_rows>0)
{
    echo "
     <!DOCTYPE html>
     <html lang='en'>
     <head>
     <meta charset='UTF-8'>
     <meta name='viewport' content='width=device-width, initial-scale=1.0'>
     <title>Contact Us Table</title>
     <link rel='stylesheet' href='read.css'>
     </head>
     <body>
     <table>
     <tr>
     <th>Name</th><th>Vehicle No</th><th>Phone No</th><th>Email</th><th>Message</th>
     </tr>";
   while($row=$result->fetch_assoc())
   {
        echo "
        <tr>
        <td>".$row ["name"]."</td>
        <td>".$row ["vnumber"]. "</td>
        <td>".$row["phoneNo"]."</td>
        <td>".$row ["email"]."</td>
        <td>".$row["message"]."</td>
        </tr>";
   }
   echo"
   </table>
   </body>
   </html>";
}
else
{

    echo "No result";
}
$con->close();

?>
<html>
    <title></title>
    <body>
        <h4>If you want delete enter vehicle number.</h4>
        <form method="post" action="edelet_contact.php">
            <label for="vno">Vehicle No :</label>
            <input type="text" id="vno" name="vno"><br>
            <input type="submit" value="Delete">
        </form>
    </body>
</html>

