<?php

    $conn = mysqli_connect("localhost","root","","information");

    if(!$conn){
        die("Connection Failed: " . mysqli_connect_errno());
    }
  

?>