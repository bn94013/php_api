<?php require '../header.php'; ?>
<h1>留言板功能Demo</h1>
<p>請輸入留言內容:</p>
<form action="board_output.php" method="post">
<input type="text" name="message">
<input type="submit" value="送出">
</form>
<a href="board_output.php">查看</a>
<?php require '../footer.php'; ?>