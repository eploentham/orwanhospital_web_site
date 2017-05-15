<?php
session_start();
//initilize the page
require_once("inc/config.php");


$header = file_get_contents('header.php',TRUE);
//$footer = file_get_contents('footer.php',TRUE);
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo $header; ?>
    </body>
</html>
