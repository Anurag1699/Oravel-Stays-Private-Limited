<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
header("location: login.php");
}
?>
<html>
<head>
<!--Meta tags-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>PHP Welcome!</title>
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
<a class="nav-link" href="register.php">Signup</a>
</li>
<li class="nav-item active">
<a class="nav-link" href="logout.php">Logout</a>
</li>
</ul>
<div class="navbar-collapse collapse">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
</li>
</ul>
</div>
</div>
</nav>
<div class="container mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr>
</div>
</form>
<br><br><br>
<form action="form2.php" method="GET">
<center><button type="submit" class="btn btn-primary">BOOK NOW!!
</button></center></form><br>
<form action="feedback.php" method="GET">
<center><button type="submit" class="btn btn-primary">FEEDBACK</button></center></form>
</body>
</html>