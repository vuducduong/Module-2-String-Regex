<?php

function alidateAccount($str){
    $pattern = "/^\w{6,}$/";
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

