<?php
$orges = "ds2.txt";

$amar = fopen($orges, "r");

$gjin = filesize($orges);

$stina = fread($amar, $gjin);

echo $stina;
?>