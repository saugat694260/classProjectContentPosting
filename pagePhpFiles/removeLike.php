<?php
//DELETE FROM `content_interactions` WHERE content_id=1;
?>
<?php

    
include '../phpFiles/connection.php'

    
    ?>
    
    <?php
    if(isset($_POST['contentId'] ) && isset($_POST['userId'])){
                      $contentId= $_POST['contentId'];
                      $userId= $_POST['userId'];
                      
                        
                            $sql="DELETE FROM `content_interactions` WHERE content_id=$contentId AND user_id=$userId;";
                            if($conn->query($sql)){
                                
                                echo"sucess";
   
    
                            }
                        
                       else{
                        echo"failed";
                       }
    
                       
                       
}
?>