<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/index.view.css">

    <title>Sign Up</title>
</head>
<style>
</style>
<body>
    <div class="wrap">
        <div class="LogIn">
            <div class="LogIn-Content">
                <a class="ArrowContenedor" href="login.php"><i class="fas fa-arrow-left"></i></a>
                <h2>Sign Up</h2>
                <form class="StudenForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="Camp">
                        <input class="Input" name="usuario" type="text" placeholder="Username">
                        <div class="Student-Form-Icon"><i class="fas fa-user"></i></div>
                    </div>
                    <div class="Camp">
                        <input class="Input" name="firstname" type="text" placeholder="First Name">
                        <div class="Student-Form-Icon"><i class="fas fa-user"></i></div>
                    </div>
                    <div class="Camp">
                        <input class="Input" name="lastname" type="text" placeholder="Last Name">
                        <div class="Student-Form-Icon"><i class="fas fa-user"></i></div>
                    </div>
                    <div class="Camp">
                        <input class="Input" name="email" type="text" placeholder="Email">
                        <div class="Student-Form-Icon"><i class="fas fa-envelope"></i></div>
                    </div>
                    <div class="Camp">
                        <input class="Input" name="password" type="password" placeholder="Password"> 
                        <div class="Student-Form-Icon"><i class="fas fa-lock"></i></div>
                    </div>
                    <div class="Camp">
                        <input class="Input" name="password2" type="password" placeholder="Repeat Password"> 
                        <div class="Student-Form-Icon"><i class="fas fa-lock"></i></div>
                    </div>
                    <input class="SubmitButton" type="submit" value="SIGN UP">
                    <?php if(!empty($error)): ?>
                        <div class="ErrorAlert">
                            <p><?php echo "- $error"; ?></p>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>