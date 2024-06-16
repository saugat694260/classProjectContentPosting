<?php 

include './phpFiles/validation.php';
include './phpFiles/utils.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>login</title>
            <!--fonts-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
            <link rel="shortcut icon" href="#">
            <!--style-->
            <link rel="stylesheet" href="../shared.css">
            <link rel="stylesheet" href="./css/shared.css">
            <link rel="stylesheet" href="./css/loginPage.css">
    </head>
    <body>
        <div class="page-main-container">
                <div class="box-main-container">
                    <div class="box-sub-container">
                        <div class="box">
                            <p class="title-text">Login</p>
                            <div class="form-Container">
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"  class="form">
                                    <span style="color:brown">
                                    <?php
                                    include './phpPagesFiles/login.php';
                                    ?>
                                    </span>

                                    <div>
                                        <input type="text" placeholder="username" name="username">
                                    </div>
                                    <span style="color:#c35957">
                                    <?php
                                     if(isset($_POST["login"])){
                                        if(!validateUsername($_POST['username'])){
                                            echo "enter valid username";
                                        }
                                    }
                                    ?>
                                    </span>
                                    <div>
                                        <input type="password" placeholder="password" id="input-password-js" class="input-password" name="password">
                                        <button id="show-or-hide-password-js" class="show-or-hide-password">show</button>
                                    </div>
                                    <span style="color:#c87d7c"> 
                                            <?php 
                                             if(isset($_POST["password"])){
                                                if(!validatePassword($_POST['password'])){
                                                    echo "enter valid password";
                                                }
                                            }
                                        ?></span>
                                    <div>
                                        <input type="checkbox" name="checkbox">
                                        <label for="rememberMe-checkbox">remenber me?</label>
                                    </div>
                                    <div >
                                       <input type="submit" value="Login" name="login"> 
                                    </div>
                                </form>
                            </div>
                                <p>dont have an account?<a href="/signupPage.html">signup</a></p>
                                <p>forgot password?<a href="/login and regestration/loginPage.php">click here</a></p>
                        </div>
                    </div>
                </div>
            <div class="page-footer-container"  id="page-footer-container-js">
              
        </div>
       
        <script src="../script.js" type="module"></script>
    </body>
</html>