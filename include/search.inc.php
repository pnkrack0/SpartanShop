<?php

include_once 'dbh.inc.php';

$searchText = $_POST['textSearch'];
echo $searchText;

header("Location: ../produse.php?searchFilter=$searchText");
exit();

?>