<?php
ob_start();
$title = 'Présentation';
?>
<?php
$content = ob_get_clean();
require 'template.php';
?>