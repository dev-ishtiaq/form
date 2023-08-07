<!DOCTYPE html>
<?php require_once("config.php");?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-12 col-lg-4 col-md-12">
                <div class="login_form">
                    <form action="login_process.php" method="POST">
                        <div class="form-group">
                            <img src="https://technosmarter.com/assets/images/logo.png" alt="Techno Smarter"
                                class="logo img-fluid"> <br>
                            <?php 
                                if(isset($_GET['loginerror'])) {
                                    $loginerror=$_GET['loginerror'];
                                }
                                if(!empty($loginerror)){  echo '<p class="errmsg">Invalid login credentials, Please Try Again..</p>'; } ?>

                            <label class="label_txt">Username or Email </label>
                            <input type="text" name="username"
                                value="<?php if(!empty($loginerror)){ echo  $loginerror; } ?>" class="form-control"
                                required="">
                        </div>
                        <div class="form-group">
                            <label class="label_txt">Password </label>
                            <input type="password" name="password" class="form-control" required="">
                        </div>
                        <button type="submit" name="login"
                            class="btn btn-primary btn-group-lg form_btn">Login</button>
                    </form>
                    <p style="font-size: 12px;text-align: center;margin-top: 10px;"><a href="forgot-password.php"
                            style="color: #00376b;">Forgot Password?</a> </p>
                    <br>
                    <p>Don't have an account? <a href="signup.php">Sign up</a> </p>
                </div>
                <div class="col-sm-4">
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
</script>

</html>