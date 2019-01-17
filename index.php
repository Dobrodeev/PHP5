<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body>
<script src="assets/jquery-3.2.1.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>
<?php
require 'DirectoryItems.php';
$di = new DirectoryItems('graphics');
$di->checkAllImages()or die('Not all files are images.');
$di->naturalCaseInsensitiveOrder();
//get portion of array
$filearray = $di->getFileArray();
echo "<div style=\"text-align:center;\">";
foreach ($filearray as $value){
	echo "<img src=\"graphics/$value\" /><br />file name: $value<br />\n";
}
echo "</div><br />";
?>
