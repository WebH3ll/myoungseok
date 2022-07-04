<?php
    require_once "connect.php";


    $name = $_POST['name'];
    $content = $_POST['content'];
    $date = date("Y-m-d H:i:s");
    $query = "insert into memo(name,content,regdate) values('$name','$content','$date')";

    echo $query;

    mysqli_query($connect,$query);

?>

<script>
    alert("데이터가 추가되었습니다.");
    location.href = "register.php";
</script>
