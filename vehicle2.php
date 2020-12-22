<?php
echo "Hello\n";
$fname=$_GET["fname"];
$pno=$_GET["pno"];
$hname=$_GET["hname"];
$state=$_GET["state"];
$vtype=$_GET["vtype"];
$seat=$_GET["seat"];
$trip=$_GET["trip"];
$subject=$_GET["subject"];


$con=mysqli_connect("localhost","root","","mydb");
if(!$con){
    echo "Failed".mysqli_connect_errno();
}
$fname=mysqli_real_escape_string($con,$fname);
$pno=mysqli_real_escape_string($con,$pno);
$hname=mysqli_real_escape_string($con,$hname);
$state=mysqli_real_escape_string($con,$state);
$vtype=mysqli_real_escape_string($con,$vtype);
$seat=mysqli_real_escape_string($con,$seat);
$trip=mysqli_real_escape_string($con,$trip);
$subject=mysqli_real_escape_string($con,$subject);

$statement = "INSERT INTO vehicle values('$fname','$pno','$hname','$state','$vtype','$seat','$trip','$subject')";
$query=mysqli_query($con,$statement);
if($query===false){
    echo "error";
    echo mysqli_error($con);
}
else{
    echo 'Updated';
header("Location: vehicle.php");
}
?>