<?php

include 'config.php';
    session_start();
    error_reporting(E_ERROR | E_PARSE);
    $unique_id =  $_SESSION['unique_id'];
    // if(empty($unique_id))
    // {
    //     header("location: register.php");
    // }
    
    
  
  $select = "SELECT * FROM user WHERE id = '$unique_id'";
  $fetch = mysqli_query($conn,$select);
  $row = mysqli_fetch_array($fetch);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accorent | Student Accommodation</title>
    <link rel="stylesheet" type="text/css" href="main_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body> 

    <section>
        <header>

            <div class="bar">
                
                <a href="main_page.html" id="home"><img src="logoygp.png" width="400" height="350"></a>
                
                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#service">Services</a></li>
                        <a href="about.php"><li><button class="about-btn"> About Us</button></li></a>
                        <?php
                if(empty($unique_id))
                {
                    echo'<a href="register.php"><li><button class="login-btn"> Register/Login</button></li></a>';
                }
                else
                {
                    echo'<li><button class="login-btn">Welcome '.ucfirst(strtolower($row['name'])).'</button></li>';
                    echo'<a href="logout.php"><li><button class="login-btn">Logout</button></li></a>';
                }
                ?>
                
                    </ul>
                </nav>
            </div>
    
            <div class="body-text">
                <h1>ACCO RENT</h1>
               <h6>Your Home Away From Home</h6> 
            </div>
            <br/>
            

        </section>

        </header>
    </section>
    
    <section class="gallery">

            <h2 class="g-header" id="gallery">Gallery</h2>
            
            <div class="row">
                <div class="g-col">                    
                    <img src="ml-img/bedroom.jpg">
                    <h3>Apartments</h3>
                    <p>Enjoy fully furnished apartments with high quality facilities and services.</p>
                </div>
    
                <div class="g-col">
                    <img src="ml-img/cafeteria.jpg">
                    <h3>Cafeteria</h3>
                    <p>We offer multi-cultural catering services with the highest quality service.</p>
                </div>
    
                <div class="g-col">
                    <img src="ml-img/gym.jpg">
                    <h3 >Gym</h3>
                    <p>Be fit and stay healthy in our campus gym!</p>
                </div>
            </div>
    </section>

    <div class="resident1">
        <img src="image_1.jpg" alt="image">
        <img src="image_2.jpg" alt="image">
        <img src="image_3.jpg" alt="image">
        <img src="image_7.jpg" alt="image">
        <img src="image_9.jpg" alt="image">
        <img src="image_10.jpg" alt="image">

       
    </div>
    <div class="resident2">
       
        <img src="image_5.jpg" alt="image">
        <img src="image_6.jpg" alt="image">
        <img src="image_4.jpg" alt="image">
        <img src="image_8.jpg" alt="image">
    </div>
</body>
</html>