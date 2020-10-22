<?php


function isFirstLetterUpperCase($str){
    $regexp = '/^[A-Z]/';
    if(preg_match_all($regexp,$str)){
        echo ("String's first character is uppercase");
    }
    else{
        echo ("String's first character is not uppercase");
    }
}
isFirstLetterUpperCase('Codegym');
echo "<br>";
isFirstLetterUpperCase('codegym');