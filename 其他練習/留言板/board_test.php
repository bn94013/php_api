<?php require '../header.php'; ?>

<h1>留言板下方顯示Demo</h1>
<p>請輸入訊息:</p>
<form action="board_test.php" method='post'>
<input type="text" name="message">
<input type="submit" value='送出'>
</form>

<?php
ini_set('display_errors','off'); 
$file = 'test.txt';
if (file_exists($file)){
    $test = json_decode(file_get_contents($file));
}
$test[] = $_REQUEST['message'];
file_put_contents($file, json_encode($test));

foreach ($test as $message) {
    echo '<p>' . $message . '</p><hr>';
}


?>








<?php require '../footer.php'; ?>