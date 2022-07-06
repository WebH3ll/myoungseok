<?php
    session_start();
    $connect = mysqli_connect('127.0.0.1', 'test', 'test123', 'webhell') or die("connect failed");
    $email=$_POST['email'];
    $password = $_POST['password'];
    $query = "select * from user where email='$email' and password='$password'";    //역순 출력
    echo $query;
    $result = mysqli_query($connect, $query);

    $row = mysqli_fetch_assoc($result);
    echo $row;
    if(is_null($row)){
        echo "<script>alert('Invalid email or password');</script>";
        echo "<script>location.replace('/index.php');</script>";
    }else{
        echo "<script>alert('login success!');</script>";
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['idx'] = $row['idx'];
        echo "<script>location.replace('/index.php');</script>";
    }

?>