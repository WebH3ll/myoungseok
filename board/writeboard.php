<?php
    require_once "../connect.php";

    $name = $connect->real_escape_string($_POST['name']);
    $subject = $connect->real_escape_string($_POST['subject']);
    $memo = $connect->real_escape_string($_POST['memo']);
    $date = date("Y-m-d H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];
    echo 'name : '.$name.'<br>';
    echo 'subject : '.$subject.'<br>';
    echo 'memo : '.$memo.'<br>';
    echo 'date : '.$date.'<br>';
    echo 'ip : '.$ip.'<br>';

    $query = "insert into board(name,subject,memo,regdate,ip) values('$name','$subject','$memo','$date','$ip')";

    mysqli_query($connect,$query);


?>

<script>
    alert("게시판에 저장되었습니다.");
    location.href = "list.php";
</script> 
