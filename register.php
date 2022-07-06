<?php

    print_r($_POST);
    $connect = mysqli_connect('127.0.0.1', 'test', 'test123', 'webhell') or die("connect failed");
    $id = $_POST['id'];
    $email=$_POST['email'];
    $country = $_POST['country'];
    $password = $_POST['password'];

    $validate_query = "select * from user where email='$email'";
    $result = mysqli_query($connect,$validate_query);
    $row = mysqli_fetch_assoc($result);
    echo $row;
    if(!is_null($row)){
        echo "<script>alert('already exists email');</script>";
        echo "<script>location.replace('/register.html');</script>";
#        echo "존재하는 이메일";
    }else{
        echo "가능한 이메일";
    }

    $query = "insert into user(email,id,country,password) values('$email','$id','$country','$password')";
    $result = mysqli_query($connect,$query);
    if($result == false){
        echo mysqli_error($connect);
    }else{
        echo "<script>alert('You have successfully registered as a member');</script>";
        echo "<script>location.replace('/index.php');</script>";
    }

?>