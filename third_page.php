<!DOCTYPE html>
<html>
    <head>
        <title>Customer information</title>
        <meta charset="utf8">

    </head>
    <body>
        <style>
body {
  background-image: url('https://webstockreview.net/images600_/hotel-clipart-hotel-counter-4.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 102% 102%;
}
</style>
        <?php
        if(isset($message)){
            echo '<h1>'.$message. '</h1>';
        }
        ?>
       
        <form action="login.php" method="POST">
            Number of People: <input type="text" name="people"> <br><br>
            Name and Surname: <input type="text" name="username"> <br><br>
            E-mail: <input type="text" name="e-mail"> <br><br>
            Phone Number: <input type="text" name="phone number"> <br><br>
            
            
        <p style="text-align: left;"><a href="/hotel_reservation/second_page.php" style=" color: black; font-size: 100%; ;">Back</a></p>
        <p style="text-align: left;"><a href="/hotel_reservation/final.php" style=" color: black; font-size: 100%; ;">Submit</a></p>
        </form>

    </body>
</html>

