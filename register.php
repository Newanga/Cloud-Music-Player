<?php
    include("Includes/Config.php");
    include("Includes/Classes/Account.php");
    include("Includes/Classes/Constants.php");

    $account = new Account($con);

    include("Includes/Handlers/Register-Handler.php");
    include("Includes/Handlers/Login-Handler.php");

    function getInputValue($name) {
        if(isset($_POST[$name])) {
            echo $_POST[$name];
            // remembering values
        }
    }
?>

<html>
<head>
    <title>Welcome to Spotify</title>

    <link rel="stylesheet" type="text/css" href="Assets/Css/Register.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="Assets/JS/Register.js"></script>
</head>
<body>

    <?php

        if(isset($_POST['signupButton'])) {
            echo '<script>
                    $(document).ready(function() {
                        $("#loginForm").hide();
                        $("#registerForm").show();
                    });
                </script>';
        }
        else {
            echo '<script>
                    $(document).ready(function() {
                        $("#loginForm").show();
                        $("#registerForm").hide();
                    });
                </script>';
                //showing errors at the same time
        }

    ?>

    <div id="background">

        <div id="loginContainer">

            <div id="inputContainer">
                <form id="loginForm" action="Register.php" method="POST">
                    <h2>Login to your account</h2>
                    <p>
                        <?php echo $account->getError(Constants::$loginFailed); ?>
                        <label for="loginUsername">Username</label>
                        <input id="loginUsername" name="loginUsername" type="text" placeholder="eg:RDL" required>
                    </p>
                    <p>
                        <label for="loginPassword">Password</label>
                        <input id="loginPassword" name="loginPassword" type="password" placeholder="your password" required>
                    </p>
                    
                    <button name="loginButton" type="submit">Log In</button>

                    <div class="hasAccountText">
                        <span id="hideLogin">Don't have an account yet? Signup today!</span>
                    </div>
                    
                </form> 


                <form id="registerForm" action="Register.php" method="POST">
                    <h2>Create your free account</h2>
                    <p>
                        <?php echo $account->getError(Constants::$usernameCharacters); ?>
                        <?php echo $account->getError(Constants::$usernameTaken); ?>
                        <label for="username">Username</label>
                        <input id="username" name="username" type="text" placeholder="eg:RDL" value="<?php getInputValue('username') ?>" required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$firstnameCharacters); ?>
                        <label for="firstName">First Name</label>
                        <input id="firstName" name="firstName" type="text" placeholder="eg:Redux" value="<?php getInputValue('firstName') ?>" required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$lastnameCharacters); ?>
                        <label for="lastName">Last Name</label>
                        <input id="lastName" name="lastName" type="text" placeholder="eg:DreamsLab" value="<?php getInputValue('lastName') ?>" required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$emailsDontMatch); ?>
                        <?php echo $account->getError(Constants::$emailInvalid); ?>
                        <?php echo $account->getError(Constants::$emailTaken); ?>
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" placeholder="eg:RDL@gmail.com" value="<?php getInputValue('email') ?>" required>
                    </p>

                    <p>
                        <label for="email0">Confirm Email</label>
                        <input id="email0" name="email0" type="email" placeholder="eg:RDL@gmail.com" value="<?php getInputValue('email0') ?>" required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$passwordsDontMatch); ?>
                        <?php echo $account->getError(Constants::$passwordCapitalNumbers); ?>
                        <?php echo $account->getError(Constants::$passwordCharacters); ?>
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" placeholder="your password" required>
                    </p>

                    <p>
                        <label for="password0">Confirm Password</label>
                        <input id="password0" name="password0" type="password" placeholder="your password" required>
                    </p>
                    
                    <button name="singupButton" type="submit">Sign Up</button>

                    <div class="hasAccountText">
                        <span id="hideRegister">Have an account already? Log in here.</span>
                    </div>
                    
                </form>
            
            </div>

            <div id="loginText">
                <h1>Great music for you all</h1>
                <h2>Whenever you want, Wherever you go!</h2>
                <ul>
                    <li>Find the tone you need instantly</li>
                    <li>Easy to use for any of you</li>
                    <li>Your all in one cyber music player</li>
                </ul>
            </div>

        </div>
    </div>
</body>
</html>