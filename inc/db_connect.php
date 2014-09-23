<?php
include_once 'config.php'; // As functions.php is not included

############## Make the mysqli connection ###########
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE) or die('Could not connect !<br>Please contact the site\'s administrator.');

 