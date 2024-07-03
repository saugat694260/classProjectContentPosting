<?php
include '../phpFiles/connection.php';
include '../phpFiles/utils.php';
$user_data=checkLoggedinOrNot($conn);

if($user_data['position']=="user")
    header("Location:./index.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../shared.css">
    <link rel="stylesheet" href="./adminPageCss/users.css">
</head>
<body>
    <div class="page=main-container">
   
       <div class="table-container">
        <table >
            <tr > 
               <th>id</th>
               <th>username</th>
               <th>email</th>
               <th>password</th>
               <th>registered date</th>
               <th>position</th>
               <th>remove user</th>
             </tr>
           
             <?php
    $functionSql="SELECT * FROM `users_data` where not position='admin'";
    $data=queryResult($functionSql,$conn);
    
        if($data){
            foreach($data as $value){
              ?>
              <tr >
               
              <td><?php echo $value['id'] ?></td>
              <td><?php echo $value['username'] ?></td>
              <td><?php echo $value['email'] ?></td>
              <td><?php echo $value['password'] ?></td>
              <td><?php echo $value['registeredDate'] ?></td>
              <td><?php echo $value['position'] ?></td>
              <td><a href="./adminPagePhp/deleteUser.php?id=<?php echo $value['id'];?>">delete</a></td>
              
            </tr>
            <?php
            }
        }
    ?>
           
           </table>
       </div>
       <div class="page-footer-container"  id="page-footer-container-js">
    </div>
    <script src="../script.js" type="module"></script>
</body>
</html>
