<?php 
session_start();

if (!function_exists('checkLoggedinOrNot')) {
function checkLoggedinOrNot($conn){
    if(isset($_SESSION['user_id'])){
$userId=$_SESSION['user_id'];
        $sql="select * from users_data where id='$userId' limit 1";
        $result=$conn->query($sql);

        if($result->num_rows>0){
            $user_data=$result->fetch_assoc();
            return $user_data;
        };
        
    }

    header("Location: login.php");
    die;
    }
}

if(!function_exists('queryResult')){
    function queryResult($query,$connection){

       
        $data = array();
        $result=$connection->query($query);

       
          if($result->num_rows>0){
            while($row =$result->fetch_assoc())
            {
                $data[] = $row;
            }
    
            return $data;
          }
        
         

    };
}

?>