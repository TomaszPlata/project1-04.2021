<?php

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if(isset($_POST['name'])){
    //first set the flag
    $everything_ok = true;

    //then validate
    if (!(strlen($name)>3)&&(strlen($name)<20)){
        //name validated properly
        $everything_ok=false;
        $_SESSION['e_name'];
        header('location:index.php');
    }
    $everything_ok == true;
    echo "You've added new user to database";
    //sql command that adds user to database ... INSERT INTO DATABASE
} 


?>