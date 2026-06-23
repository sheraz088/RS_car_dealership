<?php
$servername ="localhost";
$username ="root";
$password="";
$dbname ="rs";
$st1 = $_POST['c_name'];
$st2 = $_POST['model_year'];
$st3 = $_POST['mileage'];
$st4 = $_POST['manufacturer'];
$st5 = $_POST['body_type'];
$st6 = $_POST['color'];
$conn = new mysqli($servername, $username ,$password, $dbname);
if (!$conn)
{
    die("connection Failed:" .mysqli_connect_error());
}
else
{
echo "Connected Successfully";
}
$sql ="INSERT INTO cardetails VALUES ('$st1','$st2','$st3','$st4','$st5','$st6')";
if(mysqli_query($conn,$sql))
{
    echo"THANK YOU! 
    Your Response has been saved Successfully
    You will be Contacted shortly";
}
else
{
    echo "Error:" .$sql. "<br>", mysqli_error($conn);
}
?>
