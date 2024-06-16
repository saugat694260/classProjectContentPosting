<?php
include '../phpFiles/connection.php';
include '../phpFiles/utils.php';

if(isset($_POST['content_id'])){
    $id= $_POST['content_id'];

        $totalLikesSql="SELECT COUNT(user_id) As totalLikes FROM content_interactions WHERE content_id=$id";
        $totalLikes=queryResult($totalLikesSql,$conn);
    
        if($totalLikes){
            foreach($totalLikes as $value){
                
               echo $value['totalLikes'];
               
                
            }
        }
    }
        
        ?>