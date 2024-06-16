<?php

    
include '../phpFiles/connection.php'

    
    ?>
    
    <?php
    if(isset($_POST['id'])){
                      $id= $_POST['id'];
                      
                        
                            $sql="DELETE FROM `contents` WHERE `contents`.`id` = $id";
                            if($conn->query($sql)){
                                
                                echo"sucess";
   
    
                            }
                        
                       else{
                        echo"failed";
                       }
    
                       
                       
}
?>