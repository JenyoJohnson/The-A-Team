<?php
    session_start();
    // Get values Passe from form in index.php 
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // To prevent mysql injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    // Connect to the server and select database
    mysql_connect("localhost", "root", "");
    mysql_select_db("accountdb");

    // Query the database for user
    $result = mysql_query("SELECT * FROM `login` where username = '$username' and password = '$password'")
                or die("Failed to Query database".mysql_error());
    $numRows =  mysql_num_rows($result);
    
    if($numRows > 0){
        while($row = mysql_fetch_array($result))
        {
            $row['username'] = $username;
            $row['password'] = $password;
        }
        if ($row['username'] = $username)
        {
            if ($row['password'] = $password) 
            {
                $_SESSION['user']= $username;
				// header("location:index.php");
                echo "Login Successful!!".$row['username'];
            } 
            else 
            {
                Print '<script>alert("Incorrect Password!");</script>';
				Print '<script>window.location.assign("index.php");</script>';
            }
            
        }
    }
    else {
        Print '<script>alert("Incorrect Username or Password!");</script>';
		Print '<script>window.location.assign("index.php");</script>';
    }

?>