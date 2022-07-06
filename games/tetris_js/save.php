<?php
    session_start();
    header("Content-Type: application/json");

    if(!isset($_SESSION['user_id'])){
        echo "<script>alert('You Have to Login');</script>";
        echo "<script>location.replace('/index.php')</script>";
      }    
    $connect = mysqli_connect('127.0.0.1', 'test', 'test123', 'webhell') or die("connect failed");
    $score = $_POST['score'];
    $line = $_POST['line'];
    
    $id = $_SESSION['user_id'];
    $query = "insert into tetris values('$id',now(),$line,$score)";

    $result = mysqli_query($connect, $query);
?>