<?php require '../header.php' ; ?>
<?php

if(is_uploaded_file($_FILES['file']['tmp_name'])){
//$_FILES預設的變數,'file'是input.php內的按鈕name，指定給tmp_name暫時檔名,
//利用is_upload_file檢查是否輸入畫面的上傳檔案，如果是if會判斷true

    if (!file_exists('upload')){    //如果判斷沒有upload這個資料夾，顯示為true則執行        

        mkdir('upload');            //建立資料夾 upload

    }


    $file = 'upload/' .basename($_FILES['file']['name']);
    //'upload/'為路徑，使用basename函式抓取最末端的檔案名， basename(路徑)

    if (move_uploaded_file($_FILES['file']['tmp_name'],$file)){
        //move_uploaded_file(暫存檔的檔名，儲存用的檔名)，將上傳後產生的暫存檔移動到儲存上傳檔的位置，
        //暫存檔再程式執行結束後就會被刪除，因此利用移動的方式保持存在

        echo $file, '上傳成功!' ;
        echo '<p><img src=" ' .$file. ' " ></p>';

    } else {

        echo '上傳失敗...';
    } 
}   

else {
    echo '請選擇檔案';
}



?>
<?php require '../footer.php' ; ?>