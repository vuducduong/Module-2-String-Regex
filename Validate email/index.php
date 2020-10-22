<?php
$str = 'a@gmail.com';
$str_second = '@gmail.com';
function isEmailRegularExpressionPattern($str){
    $pattern = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";
    if(preg_match_all($pattern,$str)){
        echo "Invalid";
    }
    else{
        echo "illegal";
    }
}
isEmailRegularExpressionPattern($str);
echo "<br>";
isEmailRegularExpressionPattern($str_second);
