<?php
function checkPhoneNumber($phoneNumber){
    $pattern = "/^\(\d{2}\)\-\([0]{1}\d{9}\)$/";
    if(preg_match_all($pattern,$phoneNumber)){
        echo "Khớp";
    }
    else{
        echo "Không khớp";
    }
}
checkPhoneNumber("(84)-(0942211793)");
echo"<br>";
checkPhoneNumber("(a8)-(2222222222)");