<?php
include './phpFiles/connection.php'

?>

<?php
                   $id=$user_data['id'];
                   if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $text=$_POST["textForPosting"];
                    $postContentBtn=$_POST["postContentBtn"];
                    if(isset($postContentBtn) && !$_POST["textForPosting"]==null){
                        $sql="insert into contents(userId,contentText)values('$id','$text')";
                        if($conn->query($sql)){
echo "success";
header("Refresh:0");

                        }
                    }
                    else{
                        echo "something went wrong";
                    }


                   }
                   ?>