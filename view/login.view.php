<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/index.view.css">

    <title>Log In</title>
</head>
<body>
    <div class="wrap">
        <div class="LogIn">
            <div class="LogIn-Content">
                <h2>Log In</h2>
                <form class="StudenForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="Camp">
                        <input class="Input" name="usuario" type="text" placeholder="Username">
                        <div class="Student-Form-Icon"><i class="fas fa-user"></i></div>
                    </div>
                    <div class="Camp">
                        <input class="Input" name="password" type="password" placeholder="Password"> 
                        <div class="Student-Form-Icon"><i class="fas fa-lock"></i></div>
                    </div>
                    <input class="SubmitButton" type="submit" value="LOG IN">
                </form>
                <a class="SignUpButton" href="register.php">
                    <span>SIGN UP</span>
                </a>
                <?php if(!empty($error)): ?>
                        <div class="ErrorAlertLogIn">
                            <p><?php echo "$error"; ?></p>
                        </div>
                    <?php endif; ?>
                <div>
                    <span>Forgot your</span>
                    <span><a class="Pasword-Button"href="">Password?</a></span>
                </div>
            </div>
        </div>
    </div>


<?php  echo '<script src="js/index.view.js"> </script>'; ?>
</body>
</html>