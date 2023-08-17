<?php
$username = "Bro Code";

$username_ = strtolower($username);
$username_ = strtoupper($username);
$username_ = trim($username);          //removes white from both end of string
$username = strrev($username);          //Reverses the username
$username = strrev($username);
$username = str_shuffle($username);
// strcmp(string $str1, string $str2)
// return 0 if same , 1 if str1 > str2 ,-1 if str1<str2
$count = strlen($username);  #counts space as string 
echo $count;

$primiary = "counting";
$secondary = "ount";

strpos($primary, $secondary, $offset = 0);   #CASE Sensitive
stripos($primary, $secondary,);           #case INsensitive





echo $username_, "<br>";

$name = "Yusuf";
$padded_name = str_pad($name, 10, "/", STR_PAD_RIGHT);
$padded_name = str_pad($name, 10, "/", STR_PAD_BOTH);
$padded_name = str_pad($name, 10, "/", STR_PAD_LEFT);
echo $padded_name, "<br>";

$number = 4795_8494_8493;
$number1 = str_replace("_", "/", $number);


echo $number1;

$haystack = "Hello, World!";
$needle = "World";

$position = strpos($haystack, $needle);

echo $position; // Output: 7

$haystack = "Hello, World!";
$needle = "world";

$position = strpos($haystack, $needle);

var_dump($position); // Output: bool(false)


#READ about explode & substr 
