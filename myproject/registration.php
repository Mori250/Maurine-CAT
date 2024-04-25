<!DOCTYPE html>
<html lang="en">
<head>
<!-- official website designed by G8 on 24th march 2024-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/stylee.css" title="style1" media="screen,tv,print,handheld"/>
    <title>registration form</title>
</head>
<body>


<center><section>
<form action="userdata.php" method="POST">
    <table><tr><h3  style="font-size: 20px;color: white;"><i>REGISTRATION FORM</i></h3></tr>
    <tr><td>Firstname</td>
    <td><input type="text" name="firstname" id="fname"></td>
    </tr>
    <tr><td>Laststname</td>
    <td><input type="text" name="lastname" id="lname"></td>
    </tr>
    <tr>
    <td>Username</td>
    <td><input type="text" name="username"  required=""></td></tr>
    <tr><td>email</td>
    <td><input type="text" name="email"  required=""></td></tr>

    <tr>
    <td>Telephone</td>
    <td><input type="number" name="telephone" value="phone" required="">
    </td></tr>

    <tr><td>password</td>
    <td><input type="password" name="password"  required=""></td>
    </tr>
     <tr>
    <td>creationdate</td>
    <td><input type="date" name="creationdate" required="">
    </td></tr>
     <tr>
    <td>Activation_code</td>
    <td><input type="text" name="activation_code" required="">
    </td></tr>
      <tr>
    <td>Is_Activated</td>
    <td><input type="text" name="is_activated" required="">
    </td></tr>
    <tr><td>  </td><td><input type="submit" name="send"  value="Apply" style="width: 150px;background-color: lightpink;color: white;font-size: 30px;">
    <input type="submit" name="send"  value="Cancel" style="width: 150px;background-color: lightpink;color: white;font-size: 30px;"></td></tr></table>
</form></section>

        <footer><!-- Footer section -->
            <p>&copy &reg 2024 UR CBE BIT YEAR 2 @ Group A</p><!-- Copyright and trademark notice -->
        </footer><!-- Footer section -->
    </body>
    </html>