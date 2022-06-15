<?php

$myfile = fopen("text.txt", "a") or die("unable to open file");

$name1 = "Kamrul Hasan";

// fwrite($myfile, $name1);

// echo fread($myfile, filesize("text.txt"));

$name2 = "Hasan Masud";
fwrite($myfile, $name2);

fclose($myfile);
