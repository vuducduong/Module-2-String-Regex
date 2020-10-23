<?php
function checkString($str)
{
    $pattern = "/^[C,A,P]{1}\d{4}[G,H,I,K,L,M]{1}$/";
    if(preg_match_all($pattern,$str)){
        echo "khớp";
    }
    else{
        echo "không khớp";
    }
}
checkString('C0318G');