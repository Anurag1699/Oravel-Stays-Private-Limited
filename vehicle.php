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
<td><h2>VEHICLE BOOKING</h2></tr></table>
<form action="vehicle2.php" method="GET">
<div class="container">

    <label for="fname"> Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your Name">
	
	<label for="pno">Phone Number</label>
    <input type="text" id="pno" name="pno" placeholder="Phone Number">
	
    <label for="hname">Hotel Name</label>
    <input type="text" id="hname" name="hname" placeholder="Oravel's Hotel Name">

    <label for="state">City</label>
    <select id="state" name="state">
	<option value="delhi" id="delhi" name="state">Delhi</option>
      <option value="gurgaon" id="gurgaon" name="state">Gurgaon</option>
      <option value="mumbai" id="mumbai" name="state">Mumbai</option>
      <option value="noida" id="noida" name="state">Noida</option>
    </select>
	<label for="vtype">Vehicle Type</label>
    <select id="vtype" name="vtype">
	<option value="sedan" id="sedan" name="vtype">Sedan Car</option>
      <option value="suv" id="suv" name="vtype">Suv Car</option>
      <option value="luxury" id="luxury" name="vtype">Luxury Car</option>
      <option value="bus" id="bus" name="vtype">Bus</option>
    </select>
	<label for="seat">Seat</label>
    <input type="text" id="seat" name="seat" placeholder="Number of Passengers">
	<label for="trip">Trip</label>
    <select id="trip" name="trip">
	<option value="one" id="one" name="trip">One Way Trip</option>
	<option value="round" id="round" name="trip"> Round Trip</option>
	
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
	<button class="button"><a href="form2.php">Back</button>
    <input type="submit" value="Submit">
	
    <button class="button"><a href="payment2.php">Advance Payment</button>  
     
  
  
  </form>
  </div>
</body>
</html>