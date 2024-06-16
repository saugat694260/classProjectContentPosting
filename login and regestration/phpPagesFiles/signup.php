<?php 
include '.././phpFiles/connection.php';
include './phpFiles/validation.php';
include './phpFiles/utils.php';
?>

<?php
        if($_SERVER["REQUEST_METHOD"]=="POST"  && isset($_POST["signUp"])){
                
            $username=filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
            $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
            $password=filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);
           

         
          if(validateUsername($username) && validateEmail($email) && validatePassword($password)){
             $password=encrypt($password);
             $sql="insert into users_data(username,email,password)values('$username','$email','$password')";
             if($conn->query($sql)){
                header('Location: loginPage.php');
                isset($_POST["signUp"])==null;
                $conn->close();
             }
             else{
               echo "something went wrong";
             }
          }
                
            }
        ?>