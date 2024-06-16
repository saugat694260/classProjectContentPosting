<?php
if (!function_exists('validateUsername')) {
    function validateUsername($value){
        $usernameRegex='/^[\w]{4,11}$/m';
        if(!preg_match_all($usernameRegex,$value)){
        return false;
        }
        else{
            return true;
        }
    }
}
if (!function_exists('validateEmail')) {
function validateEmail($value){
    $emailRegex="/^([a-z]{2,24})(\d{2,5})?@([a-z]{2,10}).([a-z]{2,12}).([a-z]{2,12})?$/mi";
    if(!preg_match_all($emailRegex,$value)){
        return false;
        }
        else{
            return true;
        }
}
}
if (!function_exists('validatePassword')) {
function validatePassword($value){
    $passwordRegex="/^[\w@-]{8,20}$/mi";
    if(!preg_match_all($passwordRegex,$value)){
        return false;
        }
        else{
            return true;
        }
}}
?>