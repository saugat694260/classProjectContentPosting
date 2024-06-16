<?php 
session_start();
include '.././phpFiles/connection.php';
include './phpFiles/validation.php';
include './phpFiles/utils.php';


if(isset($_COOKIE['user_id'])) {
    
    $_SESSION['user_id']=$_COOKIE['user_id'];
       
    header("location:../index.php");

} 
?>
<?php
        if($_SERVER["REQUEST_METHOD"]=="POST"  && isset($_POST["login"])){
                
            $username=filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
            $password=filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);
           

         
          if(validateUsername($username) && validatePassword($password)){
             $password=encrypt($password);
             $sql="select * from users_data where username='$username' limit 1";
             if($result=$conn->query($sql)){
                
                if($result->num_rows>0){

                    if($row=$result->fetch_assoc()){

                        if($row['password']==$password){

                            if(isset($_POST['checkbox'])){

                                $cookie_userId= $row['id'];
                                $_SESSION['user_id']=$row['id'];
                                setcookie('user_id',$cookie_userId, time() + (86400 * 30), "/");
                                header("location:../index.php");
                            }
                            else{
                                $_SESSION['user_id']=$row['id'];
                                if(isset($_SESSION['user_id'])){
                                    header("location:../index.php");
                                }

                            }
                        }
                        else{
                            echo "incorrect password";
                        }

                    }
                }
                else{
                    echo 'no user found';
                }
                $conn->close();
             }
          }
                
            }
        ?>