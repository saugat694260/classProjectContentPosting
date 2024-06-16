<?php 
$db_server="localhost";
$db_user="root";
$db_password="";
$db_name="classProjectDb";
$conn="";
try{
    $conn=new mysqli($db_server,$db_user,$db_password,$db_name);
}
catch(my_sqli_exception){
echo "not connected";
};
?>