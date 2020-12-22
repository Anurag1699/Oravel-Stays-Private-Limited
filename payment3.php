<?php

echo "Hello\n";
$cname=$_GET["cname"];
$ccnum=$_GET["ccnum"];
$expmonth=$_GET["expmonth"];
$expyear=$_GET["expyear"];
$cvv=$_GET["cvv"];

$con=mysqli_connect("localhost","root","","mydb");
if(!$con){
    echo "Failed".mysqli_connect_errno();
}

$cname=mysqli_real_escape_string($con,$cname);
$ccnum=mysqli_real_escape_string($con,$ccnum);
$expmonth=mysqli_real_escape_string($con,$expmonth);
$expyear=mysqli_real_escape_string($con,$expyear);
$cvv=mysqli_real_escape_string($con,$cvv);

$statement = "INSERT INTO adv_payment values('$cname','$ccnum','$expmonth','$expyear','$cvv')";
$query=mysqli_query($con,$statement);

if($query===false){
    echo "error";
    echo mysqli_error($con);

}
else{
    echo 'Updated';
header("Location: payment2.php");
}
?>