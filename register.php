<?php
require_once "config.php";
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
// Check if username is empty
if(empty(trim($_POST["username"]))){
$username_err = "Username cannot be blank";
echo "<script type='text/javascript'>alert('$username_err');</script>";
}
else
{
$sql = "SELECT id FROM user WHERE username = ?";
$stmt = mysqli_prepare($conn, $sql);
if($stmt)
{
mysqli_stmt_bind_param($stmt, "s", $param_username);
// Set the value of param username
$param_username = trim($_POST['username']);
// Try to execute this statement
if(mysqli_stmt_execute($stmt)){
mysqli_stmt_store_result($stmt);
if(mysqli_stmt_num_rows($stmt) == 1)
{
$username_err = "This username is already taken";
echo "<script type='text/javascript'>alert('$username_err');</script>"; 
}
else
{
$username = trim($_POST['username']);
}
}
else{
echo "Something went wrong";
}
}
}
mysqli_stmt_close($stmt);
// Check for password
if(empty(trim($_POST['password']))){
$password_err = "Password cannot be blank";
echo "<script type='text/javascript'>alert('$password_err');</script>";
}
elseif(strlen(trim($_POST['password'])) < 5){
$password_err = "Password cannot be less than 5 characters";
echo "<script type='text/javascript'>alert('$password_err');</script>";
}
else
{
$password = trim($_POST['password']);
}
// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
$password_err = "Passwords should match";
echo "<script type='text/javascript'>alert('$password_err');</script>";
}
// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
$sql = "INSERT INTO user (username, password) VALUES (?, ?)";
$stmt = mysqli_prepare($conn, $sql);
if ($stmt)
{
mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
// Set these parameters
$param_username = $username;
$param_password = password_hash($password, PASSWORD_DEFAULT);
// Try to execute the query
if (mysqli_stmt_execute($stmt))
{
header("location: login.php");
}
else{
echo "Something went wrong... cannot redirect!";
}
}
mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}
?>
<html>
<head>
<!-- Meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--Bootstrap CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>PHP Signup!</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<!--Navigation Bar-->
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="index.php">ORAVEL STAYS PRIVATE LIMITED</a>
</li>
<li class="nav-item">
<a class="nav-link" href="login.php">Login</a>
</li>
<li class="nav-item active">
<a class="nav-link" href="register.php">Signup</a>
</li>
</ul>
</div>
</nav>
<div class="container mt-4">
<h3>Please Register Here:</h3>
<hr>
<!--Signup Form-->
<form action="" method="post">
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">Username</label>
<input type="text" class="form-control" name="username" id="inputEmail4" placeholder="Email">
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Password</label>
<input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Password">
</div>
</div>
<div class="form-group">
<label for="inputPassword4">Confirm Password</label>
<input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="Confirm Password">
</div>
<div class="form-group">
<label for="inputAddress2">Address</label>
<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputCity">City</label>
<input type="text" class="form-control" id="inputCity">
</div>
<div class="form-group col-md-4">
<label for="inputState">State</label>
<input type="text" class="form-control" id="inputState">
</div>
<div class="form-group col-md-2">
<label for="inputZip">Zip</label>
<input type="text" class="form-control" id="inputZip">
</div>
</div><br>
<!--Reset & Submit Buttons-->
<center><button type="reset" class="btn btn-primary">RESET</button>
<button type="submit" class="btn btn-primary">SUBMIT</button></center>
</form>
</div>
</body>
</html>