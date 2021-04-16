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
        //name validated inproperly
        $everything_ok=false;
        $_SESSION['e_name']="The name must be minimum 3 and maximum 20 characters length";
        header('location:index.php');
    }

    if (!(strlen($phone))=9){
        //phone validation error
        $everything_ok=false;
        $_SESSION['e_phone']="Phone number should have nine digits";
        header('location:index.php')
    }

    $everything_ok == true;
    echo "<h4>You've added a new user to database</h4>";
    //sql command that adds user to database ... INSERT INTO DATABASE
} 
?>