<?php 
session_start();

echo "Logging out...";

session_unset();
session_destroy();

header("Location: ./index.php");