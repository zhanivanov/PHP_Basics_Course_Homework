<!DOCTYPE html>
<html>
    <head>
        <title>Modify String</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="string"/>
            <input type="radio" name="radio-group" value="palindrome" id="palindrome"/>
            <label for="palindrome">Check Palindrome</label>
            
            <input type="radio" name="radio-group" value="reverse" id="reverse"/>
            <label for="reverse">Reverse String</label>
            
            <input type="radio" name="radio-group" value="split" id="split"/>
            <label for="split">Split</label>
            
            <input type="radio" name="radio-group" value="hash" id="hash"/>
            <label for="hash">Hash String</label>
            
            <input type="radio" name="radio-group" value="shuffle" id="shuffle"/>
            <label for="shuffle">Suffle String</label>
            
            <input type="submit" />
        </form>
    </body>
</html>


<?php
if(isset($_POST['string']) && isset($_POST['radio-group'])){
    $inputString = $_POST['string'];
    $funcChoice = $_POST['radio-group'];
    switch($funcChoice){
        case "palindrome":
            if(is_palindrome($inputString)){
                echo $inputString.' is a palindrome!';
            }
            else{
                echo $inputString.' is not a palindrome!';
            }
            break;
        case "reverse":
            echo reverseString($inputString);
            break;
        case "split":
            $splittedString = splitString($inputString);
            foreach($splittedString as $char){
                echo $char.' ';
            }
            break;
        case "hash":
            echo hashString($inputString);
            break;
        case "shuffle":
            echo shuffleString($inputString);
            break;        
    }
}


function is_palindrome($string)
{
    $a = strtolower(preg_replace("/[^A-Za-z0-9]/","",$string));
    return $a==strrev($a);
}
function reverseString($string)
{
    return strrev($string);
}
function splitString($string)
{
    return str_split($string);
}
function hashString($string)
{
    return hash(md5, $string);
}
function shuffleString($string)
{
    return str_shuffle($string);
}
?>