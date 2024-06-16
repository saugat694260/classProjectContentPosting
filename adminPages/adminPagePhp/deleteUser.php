<?php
include '../../phpFiles/connection.php';
include '../../phpFiles/utils.php';

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