<?php require_once ('./includes/initialize.php'); ?>

<!--<img src="https://www.codeship.io/projects/436d5af0-d24d-0131-0c81-42babe56eca9/status">-->
<?php

$gencdr = new generateCDR;
$fullUser = $gencdr->userIDtoPrefix(25);
$gencdr->generateSourceNumber($fullUser);
