<?php
$servername ="localhost";
$username ="root";
$password="";
$dbname ="rs";
$st1 = $_POST['full_name'];
$st2 = $_POST['username'];
$st3 = $_POST['email'];
$st4 = $_POST['phoneNumber'];
$st5 = $_POST['password'];
$st6 = $_POST['dob'];
$st7 = $_POST['gender'];
$conn = new mysqli($servername, $username ,$password, $dbname);
if (!$conn)
{
    die("connection Failed:" .mysqli_connect_error());
}
else
{
echo "Connected Successfully";
}
$sql ="INSERT INTO registration VALUES ('$st1','$st2','$st3','$st4','$st5','$st6','$st7')";
if(mysqli_query($conn,$sql))
{
    echo"New record entered successfully";
}
else
{
    echo "Error:" .$sql. "<br>", mysqli_error($conn);
}
?>
