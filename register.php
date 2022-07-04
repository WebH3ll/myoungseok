<?php
    require_once "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <form method="POST" action="regproc.php">
        이름 : <input type="text" name="name"><br>
        메모 : 
        <textarea name="content" rows="5" cols="33"></textarea><br>
        
        <input type="submit" value="저장">
        <hr>
    </form>
     
    <table border="1">
        <tr>
            <th>idx</th>
            <th>이름</th>
            <th>메모</th>
            <th>회원가입 시간</th>
            <th>삭제</th>
        </tr>

<?php   
    $query = "select * from memo order by idx desc";
    $result = mysqli_query($connect,$query);
    while($row = mysqli_fetch_assoc($result)){?>
        <tr>
            <td><?php echo $row['idx'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['content'];?></td>
            <td><?php echo $row['regdate'];?></td>
        </tr>

<?php }    
?>
    </table>
    <button type="button" onclick="del_func();" value="삭제"></button>
</body>
</html>

