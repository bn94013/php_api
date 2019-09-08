<?php require '../header.php' ; ?>

<h1>選擇要上傳的檔案</h1>
<form action="upload_output.php" method="post" enctype="multipart/form-data">
<p> <input type="file" name="file"> </p>
<p> <input type="submit" value="上傳檔案"> </p>
</form>

<?php require '../footer.php' ?>