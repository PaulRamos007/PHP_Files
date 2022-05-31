<?php

//Verify that the string contains only numbers and English, and the string length is between 4 and 16 characters.

$str = 'a1234';
if (preg_match("^[a-zA-Z0-9]{4,16}$", $str)) {
    echo  "verification successful";
} else {
    echo  "verification Failed ";
}

//Case sensitive regex to verify if a string is a valid domain name. This is very useful when validating web forms.

$url = "http://komunitasweb.com/";
if (preg_match('/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:.[A-Z0-9][A-Z0-9_-]*)+):?(d+)?\/?/i', $url)) {
    echo "Your url is ok.";
} else {
    echo "Wrong url.";
}

// Validate a URL

function validate_url($url)
{
    return preg_match('|^http(s)?:\/\/[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(\/.*)?$|i', $url);
}

// Remove repeated words. I often found repeated words in a text, such as this this. This handy function will remove such duplicate words.

function remove_duplicate_word($text)
{
    return preg_replace("/s(w+s)1/i", "$1", $text);
}

// Validate alpha numeric, dashes, underscores and spaces

function validate_alpha($text)
{
    return preg_match("/^[A-Za-z0-9_- ]+$/", $text);
}

// Validate e-mail. This function will validate a given e-mail address string to see if it has the correct form.

function validate_email($email_address)
{
    if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+
([a-zA-Z0-9\._-]+)+$/", $email_address)) {
        return false;
    }
    return true;
}

//This regular expression will tests if the input consists of 6 or more letters, digits, underscores, and hyphens.
//The input must contain at least one uppercase letter, one lowercase letter and one digit.

// 'A(?=[-_a-zA-Z0-9]*?[A-Z])(?=[-_a-zA-Z0-9]*?[a-z])(?=[-_a-zA-Z0-9]*?[0-9])[-_a-zA-Z0-9]{6,}z'


//Match a specific number

// ^[1-9]\d*$　 //match positive integer 
// ^-[1-9]\d*$ 　//match negative integer 
// ^-?[1-9]\d*$　//match integer 
// ^[1-9]\d*|0$　//matches non-negative integers (positive integer + 0) 
// ^-[1-9]\d*|0$ //matches non-positive integers (negative integer + 0) 
// ^[1-9]\d*\.\d*|0\.\d*[1-9]\d*$//match positive floating point number 
// ^-([1-9]\d*\.\d*|0\.\d*[1-9]\d*)$ //negative floating point number 
// ^-?([1-9]\d*\.\d*|0\.\d*[1-9]\d*|0?\.0+|0)$ //floating point number 
// ^[1-9]\d*\.\d*|0\.\d*[1-9]\d*|0?\.0+|0$　// matches non-negative floating point numbers (positive floating point number + 0) 
// ^(-([1-9]\d*\.\d*|0\.\d*[1-9]\d*))|0?\.0+|0$　　// matches non-positive floating point numbers (negative floating point number + 0)

//Match a specific string

// ^[A-Za-z]+$　　//matches a string of 26 English letters 
// ^[A-Z]+$ //matches a string consisting of 26 English letters in uppercase 
// ^[az]+$　　//Match the string consisting of lowercase letters of 26 English letters 
// ^[A-Za-z0-9]+$　//Match the string consisting of numbers and 26 English letters 
// ^\w+$ //Match by number, a string of 26 English letters or underscores
