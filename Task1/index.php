<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
    <div class="loginbox">
        <img src="profile.jfif" alt="" class="profile">
        <h1>Login Here</h1> 
        <form action="process.php" method="POST">
            <p>Username</p>
            <input type="text" name="Username" placeholder="Enter Username"  required="required">
            <p>Password</p>
            <input type="password" name="Password" placeholder="Enter Password" required="required">
            <input type="submit" name="submit" value="Login">
            <a href="registration.php"><i class="fa fa-mobile"></i> Don't have an account? Sign up</a>
        </form>
    </div>
</body>
</html>