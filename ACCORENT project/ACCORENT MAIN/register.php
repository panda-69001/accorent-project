<?php
    include 'config.php';
    session_start();
    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $select = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $query1 = mysqli_query($conn,$select);
        if(mysqli_num_rows($query1)>0)
        {
            $row = mysqli_fetch_array($query1);
            $_SESSION['unique_id'] = $row['id'];
            header("location: main_page.php");
                
        }
        else{
            echo "<script>echo('User Not Found');</script>";
        }



        
        
    }
    if(isset($_POST['reg']))
    {
        $name = $_POST['sign_name'];
        $email = $_POST['sign_email'];
        $mobile = $_POST['sign_mobile_number'];
        $password = md5($_POST['sign_password']);

        $select = "SELECT * FROM user WHERE email = '$email'";
        $query1 = mysqli_query($conn,$select);
        if(mysqli_num_rows($query1)>0)
        {

        }
        else{
            $insert = "INSERT INTO `user`(`name`, `mobile`, `email`, `password`) VALUES ('$name','$mobile','$email','$password')";
            $query2 = mysqli_query($conn,$insert);
            if($query2)
            {

               
                header("location: register.php");
            }
        }
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="#" method="post">
                <h1>Create Account</h1>
                
                
                <input type="text" placeholder="Name" name="sign_name" required>
                <input type="email" placeholder="Email" name="sign_email" required>
                <input type="mobile_number" placeholder="Mobile Number" name="sign_mobile_number" required>
                <input type="password" placeholder="Password" name="sign_password" required >
                <button name="reg">REGISTER</button>
            </form>
        </div> 
        <div class="form-container sign-in">
            <form action="#" method="post">
                <h1>Sign In</h1>
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <button name="login">LOGIN</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back !</h1>
                    <p>Welcome to Acco Rent - Your Ultimate Student Accommodation Solution!
                              Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">LOGIN</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Welcome, Friend!</h1>
                    <p>Welcome to Acco Rent - Your Ultimate Student Accommodation Solution!
                              Enter your personal details to use all of site features</p>
                    <button class="hidden" id="register">REGISTER</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>