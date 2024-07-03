<?php
include '../../phpFiles/connection.php';
include '../../phpFiles/utils.php';
$user_data=checkLoggedinOrNot($conn);
if($user_data['position']=="user")
    header("Location:./index.php")
?>

<?php
                  $id= $_GET["id"];
                  
                    
                        $sql="DELETE FROM `users_data` WHERE `id` = $id";
                        if($conn->query($sql)){

header('location:../users.php');

                        }
                    
                   else{
                    echo"failed";
                   }

                   
                   ?>