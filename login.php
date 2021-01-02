<?php session_start();

/* Check if there is a session */
if(isset($_SESSION["usuario"]))
{
    header("Location: mainpage.php");
}

/* Fill the variables with the array POST */
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $usuario = filter_var($_POST["usuario"], FILTER_SANITIZE_STRING);
    $password = $_POST["password"];
    $password = hash("sha512", $password);

    /* Try to connect the database */
    try
    {
        $conection = new PDO("mysql:host=localhost;usuarios", "root", "");
    }
    catch(PDOExeption $e)
    {
        echo $e->getMessage();
    }

    $error = "";

    $statement = $conection->prepare("SELECT * FROM usuarios WHERE username = :usuario AND password = :password");
    $statement->execute(array(":usuario" => $usuario, ":password" => $password));

    $result = $statement->fetch();

    /* If the user exist set session to usuario */
    if($result != false)
    {
        $_SESSION["usuario"] = $usuario;
        header("Location: index.php");
    }
    else
    {
        $error .= "Incorrect username or password.";
    }
}

require "view/login.view.php";

?>