<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/styles.css" title="style1" media="screen,tv,print,handheld"/>
    <title>Login Form</title>
</head>
<body>

<div class="container">
    <form action="home.html" method="POST">
        <div class="form-header">
            <h3>LOGIN FORM</h3>
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <input type="submit" name="Login" value="Login" class="btn">
            <input type="submit" name="Cancel" value="Cancel" class="btn btn-cancel">
        </div>
        <div class="form-group">
            <p>Don't you have an account? <a href="registration.php">Sign up here</a></p>
        </div>
    </form>
</div>

<footer><!-- Footer section -->
            <p>&copy &reg 2024 UR CBE BIT YEAR 2 @ Group A</p><!-- Copyright and trademark notice -->
        </footer><!-- Footer section -->
    </body>
    </html>