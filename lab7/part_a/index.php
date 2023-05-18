<?php
//define any configuration here

// display error meassges cause by your php script here
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);
// The require or inclide statement takes all the text/code/markup that exitss
//in the specified file and copy it into the the file that uses include (or reqire) statement
require 'application/mvc.php'
?>