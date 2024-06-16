<?php 

include './phpFiles/connection.php';
include './phpFiles/utils.php';
$user_data=checkLoggedinOrNot($conn);

;?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--https://krx18.com/movies/eve-chan-no-hime-1984/-->
    <link rel="stylesheet" href="./shared.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/box-3.css?v=<?php echo time(); ?>">
    <!--script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    
   
        
    <div class="page-main-container">
        <div class="container">

                <div class="box-1">
                    <p><?php echo $user_data['username'] ?></p>
                    <div class="side-bar-options-container">
                        
                       <div>
                        <button class="open-post-container" id="open-post-container-js">post</button>
                       </div>
                       <div>
                        <button ><a href="./login and regestration/editProfile.php">editProfile</a></button>
                       </div>
                       <div>
                        <button><a href="./login and regestration/logout.php">logout</a></button>
                       </div>
                       <div>
                        <button style="display:none;<?php if($user_data['position']=="admin"){ echo "display:initial;";}?>" class="open-post-container" id="open-post-container-js" ><a href="./adminPages/users.php">users</a></button>
                       </div>
                       <div>
                       <button id="your-profile-js"><a href="./phpPages/profile.php">your posts</a></button>
                       </div>
                    </div>
                </div>

                <div class="box-2">
                   <div class="posting-container" id="posting-container-js">
                       
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
                        <textarea  class="textArea-for-posting" name="textForPosting" id="textArea-for-posting-js">
                            
                            </textarea>
                            <div class="posting-options-container">
                                <button class="close-post-container">cancil</button>
                                <button class="post-button" name="postContentBtn">post</button>
                            </div>
                        </form>
                   </div>
                 
                     <?php
                   include './pagephpFiles/postContents.php';
                   ?>
                
                 

                   <div class="contents-container">

                       
  
                         <?php
                        $sql="SELECT * FROM `contents`";
                        if($result=$conn->query($sql)){
                            while($row=$result->fetch_assoc()){
?>
  
<div class="contents-sub-container"  id="<?php echo $row['id']; ?>-contents-sub-container-js">
    <div class="content-user-info">
        <p>
    <?php
    $functionSql="SELECT * FROM `users_data` WHERE id=".$row['userId']."";
    $data=queryResult($functionSql,$conn);
    
        if($data){
            foreach($data as $value){
                echo $value['username'];
            }
        }
    ?>
    
    </p>
    </div>
<div class="posted-content">
    <p>

    <?php echo $row["contentText"];?>

    </p>
</div>
<div class="content-info">
    <p>posted on <?php echo $row['postingTime'];?></p>
</div>

     <div class="content-interaction-options">
    <!--like count-->
        <span data-content-id=<?php echo $row['id']; ?> id="like-count-js">

       
        </span>
     <button id="like-content-button-js" data-post-id=<?php echo $row['id']; ?>><?php 
     
    
    $functionSql="SELECT * FROM `content_interactions` where content_id={$row['id']}";
    $data=queryResult($functionSql,$conn);
    
        if($data){
            foreach($data as $value){
                if($user_data['id']==$value['user_id'] && $row['id']==$value['content_id']){
                    echo "liked";
                }
               
               
                
            }
        }

     
     ?></button>
     <button    style="display:none;<?php if($user_data['id']===$row['userId'] || $user_data['position']=="admin"){ echo "display:initial"; }?>" name="deleteContentButton" id="delete-content-button-js" data-post-id=<?php echo $row['id']; ?> >delete<?php
            ?>
           </button>
     </div>

</div>
                       <?php     }

                        }
                        ?>
                    
                   </div>
                </div>

                <div class="box-3">
                    <div class="search-options-div"> <input class="input-text-for-searching" type="text" placeholder="search here"><button class="search-button">search</button></div>
                    <div class="box-3-main-container" id="box-3-main-container-js">
                        
                    </div>
                    <div class="page-footer-container"  id="page-footer-container-js"> </div>
                </div>
        </div>
        <!--$_COOKIE
        <div class="page-footer-container"  id="page-footer-container-js">
    -->
    
    <script src="./script.js" type="module"></script>
    
        
    </script>
    <script>
        $(document).ready(()=>{

//counting likes
document.querySelectorAll('#like-count-js').forEach((e)=>{

   

        setInterval(() => {
            $.post('liveupdateFiles/likeupdate.php', { 
            content_id:e.dataset.contentId
                }, (response) => { 
                  e.textContent=response;
                });  
        }, 500);
         
  

});


           //deleting content
            document.querySelectorAll("#delete-content-button-js").forEach((e)=>{
                
e.addEventListener('click',()=>{
    $.post('pagePhpFiles/deleteContent.php', { 
                id:e.dataset.postId
                }, (response) => { 
                    if(response.trim()=="sucess"){

                    
                    $(`#${e.dataset.postId}-contents-sub-container-js`).remove();
                    }
                });    

    
    
});
            });


//liking content 

        
                

           document.querySelectorAll("#like-content-button-js").forEach((e)=>{
            //else statement was not working so it had to be done manually
              if(e.textContent==""){
                e.textContent="like"
              }
             
                e.addEventListener('click',()=>{
                   if(e.textContent=="like"){
                    $.post('pagePhpFiles/likePost.php', { 
                        contentId:e.dataset.postId,
                        userId:<?php echo $user_data['id']?>
                                }, (response) => { 
                                    console.log(response);
                                    e.textContent="liked";
                                    
                                }); 
                   }   
                   else if(e.textContent=="liked"){
                    $.post('pagePhpFiles/removeLike.php', { 
                        contentId:e.dataset.postId,
                        userId:<?php echo $user_data['id']?>
                                }, (response) => { 
                                    console.log(response);
                                    e.textContent="like";
                                    
                                }); 
                   }
                
                    
                    
                });
                            });

                    
                    
                });
                          
        
        //liking content
      

      
        /**
         * 
         * <!--$_COOKIEcreate table contents(
id int PRIMARY key AUTO_INCREMENT,
    userId int(250),
    contentText varchar(250) not null,
    postingTime timestamp
    
);-->
         */
    </script>
    
</body>
</html>
