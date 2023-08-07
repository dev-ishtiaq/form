<?php
session_start(); // Start the session

if(isset($_POST['login'])){ 
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM userdata WHERE email='$email'";
    $res = mysqli_query($con, $query);
    
    if (!$res) {
        die('MySQL Error: ' . mysqli_error($con));
    }
   
    $numRows = mysqli_num_rows($res);
    
    if($numRows) {
        $row = mysqli_fetch_assoc($res);
        $hashed_password = $row['password'];
        

        if(password_verify($password, $hashed_password)){
            $_SESSION['email'] = $email;
            header("Location: /form/acount.php"); // Redirect to index page
            exit;
        } else { 
            echo 'Password verification failed.';
            header("Location: /form/login.php?loginerror=3"); // Redirect with login error
            exit;
        }
    } else {
        echo 'User not found.';
        header("Location: /form/login.php?loginerror=2"); // Redirect with login error
        exit;
    }
}
?>


