<?php
$str = 'a@gmail.com';
$str_second = '@gmail.com';
function isEmailRegularExpressionPattern($str){
    $pattern = "/^\w+\w*@\w+(\.\w+)$/";
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
