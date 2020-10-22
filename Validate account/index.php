<?php

function alidateAccount($str){
    $pattern = "/^[_a-z0-9]{6,}$/";
    if(preg_match_all($pattern,$str)){
        echo "Invalid";
    }
    else{
        echo "illegal";
    }

}

alidateAccount("123abc_");
echo "<br>";
alidateAccount("12345");

