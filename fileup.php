<HTML>
<HEAD><TITLE>Store binary data into SQL Database</TITLE></HEAD>
<BODY>
<form method="post" action="uploadimage.php" enctype="multipart/form-data">
    File Description:<br>
    <input type="text" name="id"  size="40">
    <INPUT TYPE="hidden" name="MAX_FILE_SIZE" value="1000000">
    <br>File to upload/store in database:<br>
    <input type="file" name="form_data"  size="40">
    <p><input type="submit" name="submit" value="submit">
    </form>

</BODY>
</HTML>