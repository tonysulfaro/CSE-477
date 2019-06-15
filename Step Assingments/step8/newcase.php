<?php
require 'lib/site.inc.php';
$view = new Felis\NewCaseView($site);

$view->addLink('./staff.php', 'Staff');
$view->addLink('./cases.php', 'Cases');
$view->addLink('./', 'Log Out');
$view->setTitle('Felis New Case');

if(!$view->protect($site, $user)) {
header("location: " . $view->getProtectRedirect());
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Felis New Case</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="lib/felis.css">
</head>

<body>
<div class="case">

    <?php echo $view->header()?>


<?php echo $view->present()?>
    <?php echo $view->footer()?>

</div>

</body>
</html>
