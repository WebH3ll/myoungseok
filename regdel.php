<?php
    require_once "connect.php";
    $idx = $_GET['idx'];
    $query = "delete from memo where idx=$idx";

    mysqli_query($connect,$query);
    
?>

<script>
    alert("데이터가 삭제되었습니다.");
    location.href = "register.php";
</script>