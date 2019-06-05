<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 1em auto 0 auto;
            border: 2px solid black;
        }

        td, th {
            border: 1pt solid black;
            padding: 0 0.5em;
        }

        th {
            color: white;
            background-color: green;
        }
    </style>
</head>
<body>

<?php
$world = new World();
echo $world->present();
?>

</body>
</html>

