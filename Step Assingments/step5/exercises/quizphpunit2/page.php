<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Quadratic Demo</title>
</head>
<body>
<?php
$quad = new Quadratic(1, 1, -1);
echo $quad->rootsHtml();
$quad = new Quadratic(-1, 0.5, 1);
echo $quad->rootsHtml();
$quad = new Quadratic(1, 0, 10);
echo $quad->rootsHtml();
?>

</body>
</html>
