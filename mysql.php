<?php
    
    require_once "connect.php";
    
    $query = "select * from memo";

    $result = mysqli_query($connect,$query);

    while($row = mysqli_fetch_assoc($result)){
        echo $row['id'];
        echo $row['pw'];
        echo $row['content'];
        echo "<hr>";
    }
    
    



?>