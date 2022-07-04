<?php
    require_once "../connect.php";
?>

<?php
    $query = "select * from board";
    $result = mysqli_query($connect,$query);
    

?>
<form action="write.php">
    <table border="1">
        <tr>
            <th>idx</th>
            <th>name</th>
            <th>subject</th>
            <th>regdate</th>
        </tr>

    <?php
        while($row = mysqli_fetch_assoc($result)){
    ?>
        <tr>
            <td><?php echo $row['idx']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['subject']?></td>
            <td><?php echo $row['regdate']?></td>
        </tr>
        
    <?php
        }
    ?>
        <tr>
            <td colspan="6">
                <div style="text-align:right">
                    <input type="submit" value="작성하기">
                </div>
            </td>

        </tr>
    </table>
</form>