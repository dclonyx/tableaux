<?php
$title = 'Mentions Légales';
ob_start();
$encours = 4 ;
?>

<div class="contenair">

</div>
<?php
$content = ob_get_clean();
require './template.php';