<?php session_start();

if(isset($_SESSION["usuario"]))
{
    header("Location: mainpage.php");
}
else
{
    header("Location: login.php");
}

require "view/index.view.php";

?>