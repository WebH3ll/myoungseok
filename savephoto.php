<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('You Have to Login');</script>";
    echo "<script>location.replace('/index.php')</script>";
}else{
    $connect = mysqli_connect('127.0.0.1', 'test', 'test123', 'webhell') or die("connect failed");



    # Upload Images
    $target_dir = "uploads/";
    $target_path = $target_dir . $_FILES['file']['name'];

    move_uploaded_file($_FILES['file']["tmp_name"], $target_path);


    # insert image
    $user_id = $_SESSION['user_id'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $img = $target_path;


    $query = "insert into photo(user_id,subject,description,img) values('$user_id','$subject','$description','$img')";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>alert(\"file is uploaded\")</script>";
        echo "<script>location.replace(\"photoboard.php\")</script>";
    }
}