<?php
if (!function_exists('encrypt')) {
function encrypt($value){
    $newValue=$value."!";
    return $newValue;
}
}
if (!function_exists('decrypt')) {
function decrypt($value){
    $newValue=substr($value, 0, -1);
    return $newValue;
}
}
?>