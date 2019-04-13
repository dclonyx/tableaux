<?php
ob_start();
$title = 'Présentation';
?>
</div>
<?php
$content = ob_get_clean();
require 'template.php';
?>