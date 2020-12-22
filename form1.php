<?php

echo "Hello\n";
$name=$_GET["name"];
$address=$_GET["address"];
$moblieno=$_GET["moblieno"];
$date=$_GET["date"];
$cdate=$_GET["cdate"];
$hname=$_GET["hname"];
$city=$_GET["city"];
$state=$_GET["state"];
$detail=$_GET["detail"];


$con=mysqli_connect("localhost","root","","mydb");
if(!$con){
    echo "Failed".mysqli_connect_errno();
}

$name=mysqli_real_escape_string($con,$name);
$address=mysqli_real_escape_string($con,$address);
$moblieno=mysqli_real_escape_string($con,$moblieno);
$date=mysqli_real_escape_string($con,$date);
$cdate=mysqli_real_escape_string($con,$cdate);
$hname=mysqli_real_escape_string($con,$hname);
$city=mysqli_real_escape_string($con,$city);
$state=mysqli_real_escape_string($con,$state);
$detail=mysqli_real_escape_string($con,$detail);


$statement = "INSERT INTO book values('$name','$address','$moblieno','$date','$cdate','$hname','$city','$state','$detail')";
$query=mysqli_query($con,$statement);

if($query===false){
    echo "error";
    echo mysqli_error($con);

}
else{
    echo 'Updated';
header("Location: form2.php");
}
?>