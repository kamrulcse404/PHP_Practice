

<form action="fileUpload.php" method="post" enctype="multipart/form-data">

    <lavel>Select Image: </lavel>
    <input type="file" name="filename" id="filename"><br>
    <input type="submit" value="Upload" name="submit">

</form>

<?php
   if (isset($_POST['submit'])) {
    $fileName = $_FILES['filename']['name'];
    $tmpLocation = $_FILES['filename']['tmp_name'];
    $uploadLocation = "Images/";

    if (!empty($fileName)) {
        move_uploaded_file($tmpLocation, $uploadLocation.$fileName);
        echo "Your file uploaded successfully";
    }else{
        echo "Your file is not uploaded";
    }
   }    
?>