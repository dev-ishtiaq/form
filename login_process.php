<?php
require_once("config.php"); 

if(isset($_POST['sublogin'])){ 
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM userdata WHERE username='$username'";
    $res = mysqli_query($con, $query);
    
    
    $numRows = mysqli_num_rows($res);
    
    if($numRows == 1) {
        $row = mysqli_fetch_assoc($res);
        $hashed_password = $row['password']; 
        
        if(password_verify($password, $hashed_password)){
            header("Location: account.php");
            exit();
        } else { 
            header("Location: login.php?loginerror=a");
            exit();
        }
    }
}
?>