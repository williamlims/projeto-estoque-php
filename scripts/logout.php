<?php
session_start();

session_unset();
session_destroy();

echo "<head><meta http-equiv=\"refresh\" content=2;url=\"../index.php\"></head>";

?>