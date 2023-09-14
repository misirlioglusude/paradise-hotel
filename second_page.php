<?php
session_start();

$servername = "localhost";
$username = "hotelsude";
$password = "123456";
$dbname = "hotel_sude";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<head>
    <title>Make a reservation</title>
    <meta charset="utf8">
</head>
    <body>
    <body bgcolor="#96D5F9">
   <table border=3>
<tr>
    <img src="https://image-tc.galaxy.tf/wijpeg-49qbnicxwin792lkg1u0e4wi5/standard.jpg?crop=107%2C0%2C1707%2C1280" alt="room1" width="400" height="300">
    <img src="https://image-tc.galaxy.tf/wijpeg-dmd53drjbko4sewiopt0xrw93/standard.jpg?crop=107%2C0%2C1707%2C1280" alt="room1" width="400" height="300">
    <img src="https://image-tc.galaxy.tf/wijpeg-alxz7zpvq3gkgd0fmuahbvv1x/standard.jpg?crop=107%2C0%2C1707%2C1280" alt="room1" width="400" height="300">
    <img src="https://image-tc.galaxy.tf/wijpeg-a6rqaucm3ojf2fjjpv0hw0to9/standard.jpg?crop=107%2C0%2C1707%2C1280&_affclk=adn:3817:2591995:Cj0KCQiAnaeNBhCUARIsABEee8Unb1vPdhjkuXo0HgplsPFyNv_yCAgFbaQ7SXsncJOeGEp8VSKDKo4aAmYBEALw_wcB:8002y1" alt="room1" width="400" height="300">
    <img src="https://image-tc.galaxy.tf/wijpeg-bxxikelj3towuw5m4eb0nlcqy/standard.jpg?crop=107%2C0%2C1707%2C1280" alt="room1" width="400" height="300">
    <img src="https://image-tc.galaxy.tf/wijpeg-3fxhec0ciiwtk3iessq16sne6/standard.jpg?crop=107%2C0%2C1707%2C1280" alt="room1" width="400" height="300">
 <td>Single Room</td>
 <td>1 single bed</td>
 <td><font color="#000000">15£</font></td>
</tr>
<tr>
 <td>Classic Room</td>
 <td>1 double bed</td>
 <td><font color="#000000">20£</font></td>
</tr>
<tr>
 <td>Family Room</td>
 <td>2 double bed</td>
 <td><font color="#000000">25£</font></td>
</tr>
<tr>
 <td>Premium Room</td>
 <td>2 double bed + waterscape</td>
 <td><font color="#000000">30£</font></td>
</tr>
<tr>
 <td>Penthouse Suite 1</td>
 <td>1 double bed + hot tub + sauna</td>
 <td><font color="#000000">40£</font></td>
</tr>
<tr>
 <td>Penthouse Suite 2</td>
 <td>2 double bed + hot tub + sauna</td>
 <td><font color="#000000">50£</font></td>
</tr>
    <p align="left">Please select the room:</p>
    <form action="action_form.php" method="get">
      <input type="text" list="rooms" name="rooms"> 
      <datalist id="rooms">
        <option value="Single Room">
        <option value="Classic Room">
        <option value="Family Room">
        <option value="Premium Room">
        <option value="Penthouse Suite 1">
        <option value="Penthouse Suite 2">
      </datalist>
      <p style="text-align: right;"><a href="/hotel_reservation/third_page.php" style=" color: black; font-size: 100%; ;">Submit</a></p>
      <p style="text-align: left;"><a href="/hotel_reservation/first_page.php" style=" color: black; font-size: 100%; ;">Back</a></p>
    </form>      
</body>
</html>
