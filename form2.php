<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 7px;
}
h1.heading
{
color:blue;
font-family:"BankGothic Md BT";
padding-top:10px;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<table border=0 width=100%><tr>
<td><h1 class=heading >ORAVEL STAYS PRIVATE LIMITED</h1>
<td><h2>BOOKING FORM</h2></tr></table>
<form action="form1.php" method="GET">


<div class="container">

    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your Name">

    <label for="address">Address</label>
    <input type="text" id="address" name="address">
	
	<label for="moblieno">Mobile Number</label>
    <input type="text" id="moblieno" name="moblieno">
	
	<label for="date">Check In Date</label>
    <input type="text" id="date" name="date" placeholder="(DD/MM/YY)">
	
	<label for="cdate">Check Out Date</label>
    <input type="text" id="cdate" name="cdate" placeholder="(DD/MM/YY)">
	
	<label for="hname">Hotel Name</label>
    <input type="text" id="hname" name="hname">
	
	<label for="city">City</label>
    <input type="text" id="city" name="city">
	
	<label for="State">State</label>
    <input type="text" id="State" name="State">
	
	<label for="detail">Description</label>
    <textarea id="detail" name="detail" placeholder="Write something.." style="height:200px"></textarea>
	<button class="button"><a href="welcome.php">Back</button>
	<input type="submit" value="Submit">
	
  <button class="button"><a href="vehicle.php">Vehicle</button>  
  <button class="button"><a href="payment.php">Payment</button>  
  </form>