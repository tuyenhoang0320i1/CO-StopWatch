<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include("StopWatch.php");
$arrayNew = array();
for ($i = 0; $i < 1000000000000; $i++) {
    array_push($arrayNew, rand(0, 100));
}
$time = new StopWatch();
$time->startTime();
echo $time->getStartTime()."<br>";

    sort($arrayNew);
    $time->stopTime();
    echo $time->getEndTime(). "<br>";
    echo $time->getElapsedTime();


?>
</body>
</html>