<?php session_start();

if(isset($_SESSION["usuario"]))
{
    require "view/mainpage.view.php";
}
else
{
    headerl("Location: login.php");
}

?>