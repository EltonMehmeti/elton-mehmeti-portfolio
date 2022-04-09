<?php

require 'config.php';



if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}

    if(empty($name) || empty($email) || empty($message)) {
        echo "<script>alert('Fill all the fields please!')</script>";
        header('Refresh:0.1; ../index.php');
    }

    else {


$sql = "INSERT INTO contact_form (name,email,message) VALUES (:name,:email,:message)";


$sqlQuery =$conn->prepare($sql);
$sqlQuery->bindParam(':name',$name);
$sqlQuery->bindParam(':email',$email);
$sqlQuery->bindParam(':message',$message);
$sqlQuery->execute();

echo "<script>alert('Successfully sent!')</script>";
header('Refresh:0.1;../index.php');

    }




?>