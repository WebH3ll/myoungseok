<form action="writeboard.php" method="post">
    <table border="1" width="800px">
        <tr>
            <th>이름</th>
            <td> <input type="text" name="name"></td>
        </tr>
        <tr>
            <th>제목</th>
            <td> <input type="text" style="width:100%;" name="subject"></td>
        </tr>
        <tr>
            <th>내용</th>
            <td> <textarea style="width:100%; height:300px;" name="memo"></textarea> </td>
        </tr>
        <tr>
            <td colspan="2">
                <div style="text-align:center">
                    <input type="submit" value="저장하기">
                </div>
            </td>

        </tr>
    </table>
</form>