<?php

$hostname="localhost";
$username="root";
$password="";
$db="sgr";

$connect= mysqli_connect($hostname,$username,$password,$db);
$query= "SELECT 'Day' FROM 'info'";

$result= mysqli_query($connect, $query);



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>The SGR Admin</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

    <header>

        <!-- TITLE -->
        <center><h3>The SGR <span style="font-size: 0.6em;">ADMIN</span></h3></center>

        <!-- LINKS -->
        <center>
        <div class="links">
            <li>
                <ul><a href="admin-update.html"><span style="color: orangered;">Update</span></a></ul>
                <ul><a href="admin-timetable.html">Timetable</a></ul>
                <ul><a href="admin-booking.html">Bookings</a></ul>
                <ul><a href="login.html"><span style="color: brown;">Log out</span></a></ul>
            </li>
        </div>
        </center>

    </header>


    <!-- SCHEDULES SECTION -->
    <div class="tabcontent">

        <!-- SCHEDULE CARD -->
        <div class="card">

        

                <h3 style="color:orangered;">Update Train schedules</h3>
                
                
               <form action= "adminupdate.php" method= "post">
 <p> Day </p>   
<select name = "Day">

<option selected="true" disabled="disabled">Day</option>
<option value="Monday">Monday</option>
<option value="Tuesday">Tuesday</option>
<option value="Wednesday">Wednesday</option>
<option value="Thursday">Thursday</option>
<option value="Friday">Friday</option>
<option value="Saturday">Saturday</option>
<option value="Sunday">Sunday</option>
   
   

</select>
<br></br>
  <p>Place</p>
   
<select name = "Origin">


 <option selected="true" disabled="disabled">From</option>
                  <option value="Mombasa">Mombasa</option>
                  <option value="Nairobi">Nairobi</option>
                  <option value="Mariakani">Mariakani</option>
                  <option value="Miasenyi">Miasenyi</option>
                  <option value="Voi">Voi</option>
                  <option value="Mtito Andei">Mtito Andei</option>
                  <option value="Kibwezi">Kibwezi</option>
                  <option value="Emali">Emali</option>
                  <option value="Athi River">Athi River</option>
 <br>

</select>
 

<select name = "Destination">

<option selected="true" disabled="disabled">To</option>
<option value="Mombasa">Mombasa</option>
                  <option value="Nairobi">Nairobi</option>
                  <option value="Mariakani">Mariakani</option>
                  <option value="Miasenyi">Miasenyi</option>
                  <option value="Voi">Voi</option>
                  <option value="Mtito Andei">Mtito Andei</option>
                  <option value="Kibwezi">Kibwezi</option>
                  <option value="Emali">Emali</option>
                  <option value="Athi River">Athi River</option>
 <br>
 <br>

</select>
<p>Time</p>
 <select name="Departure">
                  <option selected="true" disabled="disabled">Departure Time</option>
                  <option value="00:00">00:00</option>
                  <option value="0800">08:00</option>
                  <option value="1600">16:00</option>
                </select>
 <select name="Arrival">
                  <option selected="true" disabled="disabled">Arrival Time</option>
                  <option value="0400">04:00</option>
                  <option value="1200">12:00</option>
                  <option value="2000">20:00</option>
                </select>
<p>Seats</p>
               
                <input type="seat" placeholder="Cost per seat" name="seat" id="seat" required></input>
                <br>
                 <input type="number" placeholder="Total Seats" name="number" id="number" required></input>
                <br>
              
                <p>Discounts</p>
                
                <input type="childDiscount" placeholder="Child discount" name="childDiscount" id="childDiscount"required></input>
                <br>
                <input type="infantDiscount" placeholder="Infant discount" name="infantDiscount" id="infantDiscount" required></input>
              
         <br>
<button type="submit" name="submit">Submit</button>
<button type="clear" name="clear">CLEAR</button>

</form>
        </div>



    </div>



</body>

</html>
