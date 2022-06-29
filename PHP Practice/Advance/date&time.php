<?php

echo date("y-m-d-l") . "<br>";

echo date("y.m.d.l") . "<br>";

echo date("y/m/d/l") . "<br>";
echo date("y") . "<br>";
echo date("m") . "<br>";
echo date("d") . "<br>";
echo date("l") . "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    &copy; 2012 - <?php echo date("Y") . "<br>"; ?>
</body>

</html>

<?php
echo  date("h:i:sa");

// echo date_default_timezone_get()."<br>";

echo date_default_timezone_set("America/New_York") . "<br>";

echo  date("H:i:sa") . "<br>";

$d = mktime(18, 21, 55, 6, 13, 2022);

echo date("y/m/dl h:i:sa", $d);

$d = strtotime("06:25:55pm 13 june 2022");
echo "<br>";
echo date("y/m/dl h:i:sa", $d);
echo "<br>";

$d = strtotime("tomorrow");
echo date("Y-m-dl h:i:sa", $d) . "<br>";

$d = strtotime("next saturday");

echo date("h:i:sa d-m-yl", $d);
echo "<br>";


$startdate = strtotime("Saturday");

$enddate = strtotime("+6 weeks", $startdate);
echo date("h:i:sa d-m-yl", $enddate);
echo "<br>";
echo date("h:i:sa d-m-yl", $startdate);

while ($startdate < $enddate) {
    echo date("M - dl", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
}

$d1 = strtotime("july 4");
$d2 = ceil(($d1 - time()) / 60 / 60 / 24);

echo $d2;
