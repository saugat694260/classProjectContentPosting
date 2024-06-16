<?php 
include '.././phpFiles/connection.php';
include './phpFiles/validation.php';
include './phpFiles/utils.php';
include '../phpFiles/utils.php';
$user_data=checkLoggedinOrNot($conn);
?>

<?php
        if($_SERVER["REQUEST_METHOD"]=="POST"  && isset($_POST["update"])){
                
            $username=filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
            $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
            $password=filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);
           

         
          if(validateUsername($username) && validateEmail($email) && validatePassword($password)){
             $password=encrypt($password);
             
             $sql="update users_data set username='$username',email='$email',password='$password' where id=".$user_data['id']."";
             if($conn->query($sql)){
                header('refresh:0');
                isset($_POST["signUp"])==null;
                $conn->close();
             }
             else{
               echo "something went wrong";
             }
          }
                
            }
        ?>