<!Doctype html>
<html>
    <?php

        // to prevent error display
        error_reporting(0);
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        // to prevent injection
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);

        $conn = mysql_connect("localhost", "root", "");
        mysql_select_db("accountdb");
        
        if(!$_POST['submit']){
            echo "All fieds are required";
            print '<script>scroll("All fields are required");</script>';
        }
        else {
            $sql = "INSERT into login (username, password) VALUES ('$username', '$password')";

            if (mysql_query($sql,$conn)) {
                print '<script>alert("Data connection Successful!!!");</script>';
                print '<script>windows.location.assign("index.php");</script>';
            } else {
                print '<script>alert("Something went wrong, Try again!!!");</script>';
                print '<script>windows.location.assign("index.php");</script>';
            } 
        }

    ?>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="loginbox">
            <img src="welcome.gif" alt="" class="profile">
            <h1>Register Here</h1> 
            <center><a href="index.php"><i class="fa fa-arrow-left"></i>  Click Here to go back</a></center><br>
            <form action="registration.php" method="POST">
                <p>Username</p>
                <input type="text" name="Username" placeholder="Enter Username"  required="required">
                <p>Password</p>
                <input type="password" name="Password" placeholder="Enter Password" required="required">
                <input type="submit" name="submit" value="Register Now">
            </form>
        </div>
    </body>
</html>




