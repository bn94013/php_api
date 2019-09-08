<?php require '../header.php'; ?>

<?php 
ini_set('display_errors','off');                        //關閉直接點開此頁的錯誤訊息

$file='board.txt';                                      //讀取檔案
if(file_exists($file)){                                 //如果檔案存在,則是回傳true
    $board = json_decode(file_get_contents($file));     //file_get_contents讀取檔案內容，字串回傳到變數$board
}
$board[] = $_REQUEST['message'];                        // 利用REQUEST取得message的輸入內容，在新增到陣列元素
file_put_contents($file, json_encode($board));          //file_put_contents將傳入的字串寫到指定的檔案，已經轉成json格式留言
foreach ($board as $message){                           //使用foreach取得 board陣列的內容值
    echo '<p>'.$message.'</p><hr>';
    
}
    echo '<a href="board_input.php">返回</a>';

?>
<?php require '../footer.php'; ?>