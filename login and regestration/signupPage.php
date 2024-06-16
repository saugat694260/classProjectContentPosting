<?php 
include './phpFiles/validation.php';
include './phpFiles/utils.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>signup</title>
            <!--fonts-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
            <link rel="shortcut icon" href="#">
            <!--style-->
            <link rel="stylesheet" href="../shared.css">
            <link rel="stylesheet" href="./css/shared.css">
    </head>
    <body>
        <div class="page-main-container">
                <div class="box-main-container">
                    <div class="box-sub-container">
                        <div class="box">
                            <p class="title-text">SIGN UP</p>
                            <p>Sign up to see photos and videos from your friends.</p>
                            <div class="form-Container">
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
                                    <span style="color:brown">
                                    <?php
                                        include './phpPagesFiles/signup.php';
                                    ?>
                                    </span>
                                    <div>
                                        <input type="text" placeholder="username" name="username">
                                    </div>
                                    <span style="color:#C1423F">
                                    <?php 
                                        if(isset($_POST["signUp"])){
                                            if(!validatePassword($_POST['username'])){
                                                echo "enter valid username";
                                            }
                                        }
                                        ?>
                                    </span>
                                    <div>
                                        <input type="email" placeholder="email" name="email">
                                    </div>
                                    <span style="color:#c35957">
                                        <?php 
                                             if(isset($_POST["signUp"])){
                                                if(!validatePassword($_POST['email'])){
                                                    echo "enter valid email";
                                                }
                                            }
                                        ?>
                                     </span>
                                    <div>
                                        <input type="password"  name="password" placeholder="password" class="input-password" id="input-password-js">
                                        <button class="show-or-hide-password" id="show-or-hide-password-js">show</button>
                                    </div>
                                    <span style="color:#c87d7c">

                                        <?php 
                                         if(isset($_POST["signUp"])){
                                            if(!validatePassword($_POST['password'])){
                                                echo "enter valid password";
                                            }
                                        }
                                        ?>
                                    </span>
                                    <div >
                                       <input type="submit" value="sign Up" name="signUp"> 
                                    </div>
                                </form>
                                
                            </div>
                            <p>already have an account?<a href="/loginPage.php">login</a></p>
                        </div>
                    </div>
                </div>
            <div class="page-footer-container"  id="page-footer-container-js">
              
        </div>
      
<script src="../script.js" type="module"></script>
    </body>
</html>

<!--$_COOKIE'create table users_data(
    id int primary key AUTO_INCREMENT,
    username varchar(250) not null,
    email varchar(250) not null,
    password varchar(250) not null,
    registeredDate timestamp
);'-->