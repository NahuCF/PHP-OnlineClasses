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

    $first_name = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING);
    $first_name = ucwords($first_name);

    $lastName = filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);
    $lastName = ucwords($lastName);

    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    /* Declare variable that will contain all the errors */
    $error = "";

    /* Check if the inputs are empty */
    if(empty($usuario) or empty($first_name) or empty($lastName) or empty($email) or empty($password) or empty($password2))
    {
        $error .= "Please fill all the fields. </br>";
    }
    else
    {
        /* Try to connect the database */
        try 
        {
            $conection = new PDO("mysql:host=localhost;usuarios", "root", "");
        }
        catch(PDOException $e)
        {
            echo $e->GetMessage();
        }

        /* Check if the username already exist */
        $statement = $conection->prepare("SELECT * FROM usuarios WHERE username = :usuario LIMIT 1");
        $statement->execute(array(":usuario" => $usuario));
        $result = $statement->fetch();

        if($result != false)
        {
            $error .= "This username is already in use. </br>";
        }
        
        /* Hash the password */
        $password = hash("sha512", $password);
        $password2 = hash("sha512", $password2);

        /* Check if the password coincide */
        if($password != $password2)
        {
            $error .= "The passwords must match. </br>";
        }
    }  

    /* Send the user data to the database if there is no errors */
    if($error == "")
    {
        $statement = $conection->prepare("INSERT INTO usuarios (id, username, firstname, lastname, email, password) VALUES(NULL, :usuario, :firstname, :lastName, :email, :password)");
        $statement->execute(array(":usuario" => $usuario, ":firstname" => $first_name, ":lastName" => $lastName, ":email" => $email, ":password" => $password));

        header("Location: login.php");
    }    
}

require "view/register.view.php";

?>