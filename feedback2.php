<?php
echo "Hello\n";
$fname=$_GET["fname"];
$hname=$_GET["hname"];
$state=$_GET["state"];
$subject=$_GET["subject"];

$con=mysqli_connect("localhost","root","","mydb");
if(!$con){
    echo "Failed".mysqli_connect_errno();
}
$fname=mysqli_real_escape_string($con,$fname);
$hname=mysqli_real_escape_string($con,$hname);
$state=mysqli_real_escape_string($con,$state);
$subject=mysqli_real_escape_string($con,$subject);

$statement = "INSERT INTO feedback values('$fname','$hname','$state','$subject')";
$query=mysqli_query($con,$statement);
if($query===false){
    echo "error";
    echo mysqli_error($con);
}
else{
    echo 'Updated';
header("Location: feedback.php");
}
?>