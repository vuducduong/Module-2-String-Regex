<?php
function checkPhoneNumber($phoneNumber){
    $pattern = "/^\([0-9]{2}\)\-\([0]{1}[0-9]{9}\)$/";
    if(preg_match_all($pattern,$phoneNumber)){
        echo "Khớp";
    }
    else{
        echo "Không khớp";
    }
}
checkPhoneNumber("(a8)-(22222222)");