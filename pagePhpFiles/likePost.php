<?php

    
include '../phpFiles/connection.php'

    
    ?>
    
    <?php
    if(isset($_POST['contentId'] ) && isset($_POST['userId'])){
                      $contentId= $_POST['contentId'];
                      $userId= $_POST['userId'];
                      
                        
                            $sql="insert into content_interactions(user_id,content_id)values($userId,$contentId);";
                            if($conn->query($sql)){
                                
                                echo"sucess";
   
    
                            }
                        
                       else{
                        echo"failed";
                       }
    
                       
                       
}
?>