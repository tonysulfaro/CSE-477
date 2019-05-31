<?php
require __DIR__ . '/lib/guessing.inc.php';
$view = new Guessing\GuessingView($guessing);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guessing Game</title>
    <link href="styles.css" type="text/css" rel="stylesheet"/>
</head>

<body>

<?php echo $view->present(); ?>

</body>