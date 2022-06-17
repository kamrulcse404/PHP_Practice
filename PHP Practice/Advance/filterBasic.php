
<form action="filterBasic.php" method="post">
    <lavel>Email: </lavel> <br>
    <input type="text" name="email" id="email"><br><br>
    <lavel>Name: </lavel> <br>
    <input type="text" name="name" id="name"><br><br>
    <lavel>Integer: </lavel> <br>
    <input type="text" name="integer" id="integer"><br><br>
    <lavel>URL: </lavel> <br>
    <input type="text" name="url" id="url"><br><br>
    <lavel>Float: </lavel> <br>
    <input type="text" name="float" id="float"><br><br>

    <input type="submit" value="Submit" name="submit">

</form>

<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['submit'])) {
        if (!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['url']) && !empty($_POST['integer']) && !empty($_POST['float'])) {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                echo $_POST['email'] . " is email". "<br>";
            }else {
                echo $_POST['email'] . " is not email". "<br>";
            }
            
            if (filter_var($_POST['name'], FILTER_SANITIZE_STRING)) {
                echo (filter_var($_POST['name'], FILTER_SANITIZE_STRING)) . "<br>";
            }
            
            if (filter_var($_POST['integer'], FILTER_VALIDATE_INT)) {
                echo $_POST['integer'] . " is integer". "<br>";
            }else {
                echo $_POST['integer'] . " is not integer". "<br>";
            }
            
            if (filter_var($_POST['url'], FILTER_VALIDATE_URL)) {
                echo $_POST['url'] . " is url". "<br>";
            }else {
                echo $_POST['url'] . " is not url". "<br>";
            }
            
            if (filter_var($_POST['float'], FILTER_VALIDATE_FLOAT)) {
                echo $_POST['float'] . " is float". "<br>";
            }else {
                echo $_POST['float'] . " is not float". "<br>";
            }
        }
     }
}