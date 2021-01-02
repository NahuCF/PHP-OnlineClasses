<?php session_start();

/* Destroy session and redirect to the index */
session_destroy();
$_SESSION = array();

header("Location: index.php");

?>