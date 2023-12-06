<?php
     session_start();
    include 'connection.php';
    
    if(isset($_REQUEST['login']))
    {
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];


        $lgn="select * from doctor where email='$email' AND password='$password'";
        $res=$con->query($lgn);
        $result = mysqli_fetch_row($res);
        $chk=$res->num_rows;
        if($chk==1)
        {
            $_SESSION['email']=$email;
            
            
            ?>
            <script type="text/javascript">
                alert('Login Success');
                window.location="d_dashboard.php";
            </script>
            <?php
        }
        
        else
        {
            ?>
            <script type="text/javascript">
                alert('Please Enter valid Username and password');
                window.location="d_Login.php";
            </script>
            <?php
        }
    
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>USER LOGIN</title>
    <link rel="stylesheet" type="text/css" href="Css/adminLogin.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title icon -->
    <link rel="icon" href="images/avatar.svg" type="image/x-icon">
</head>

<body>
    <img class="wave" src="images/wave.png">
    <div class="container">
        <div class="img">
            <img src="images/bg.svg">
        </div>
        <div class="login-content">
            <form action="" method="POST">
                <br>
                <h1 class="title" >WELCOME Doctor</h1>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="text" name="email" class="input" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password" class="input" required>
                    </div>
                </div>
                <!-- <a href="#">Forgot Password?</a> -->
                <input type="submit" name="login" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="JS/ADlogin.js"></script>
</body>

</html>