<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    $fullname = $_POST["fullname"];
    $age = $_POST["age"];
    $course = $_POST["course"];
    $gender = $_POST["gender"];
    
    
    echo $fullname . "<br>";
    echo $age . "<br>";
    echo $course . "<br>";
    echo $gender . "<br>";
    }
    else{
        echo "You're not registered";
    }
?>

