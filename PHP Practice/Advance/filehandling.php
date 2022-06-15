<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $myfile = fopen("dictionary.txt", "r") or die("Unable to open file");
        // echo fread($myfile, filesize("dictionary.txt"));
        // echo fgets($myfile);
        // fclose($myfile);

        // while (!feof($myfile)) {
        //     echo fgets($myfile);
        //     echo "<br>";
        // }
        // fclose($myfile);

        
        while (!feof($myfile)) {
            echo fgetc($myfile);
            // echo "<br>";
        }
        fclose($myfile);

    ?>
</body>
</html>