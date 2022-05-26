<?php

//Regex method to match are pre_match(); preg_match_all();
//3 params in preg_match(pattern, string, array);
//in pattern we pass the regex in /pattern/modifiers;
//preg_match() is case sensitive but we can use a modifier
//preg_match() only searches for the term once and stops the search when the term is found

$str = "HOPE for the best, hope prepare for the worst";

$exp = preg_match_all("/Hope/i", $str, $repeat);


if ($exp) {
    echo "A match was found";
} else {
    echo "No match was found";
}

echo "<pre>";
print_r($repeat);
echo "</pre>";

//we can look for multiple items using pie operator |


$exp = preg_match_all("/for|the/i", $str, $repeat);

echo "<pre>";
print_r($repeat);
echo "</pre>";


$str = "HOPE for the best, hope prepare for the worst 1234";

$exp = preg_match_all("/w|e|o|3|2/i", $str, $repeat);

echo "<pre>";
print_r($repeat);
echo "</pre>";


//char set[] -> use to define a set or range

$str = "HOPE for the best, hope prepare for the worst 1234";

$exp = preg_match_all("/[a-e]|[1-3]/i", $str, $repeat);

echo "<pre>";
print_r($repeat);
echo "</pre>";


//negated character caret symbol (^) is similar to not operator

$str = "HOPE for the best, hope prepare for the worst 1234";

$exp = preg_match_all("/[^a-z1-3]/i", $str, $repeat);

echo "<pre>";
print_r($repeat);
echo "</pre>";

//Meta Characters
// \w
// \W
// \d -> used to select numeric values
// \s -> select all the spaces
// \ S -> select everything other than spaces
// \b

//Quantifiers -> wildcards that specify characters how many times to check the pattern

// * -> match 0 or 1
// + -> match 1 or more
// ? -> match 1 or 0
// {n} -> match exact number of times
// {n,} -> match exact number of times with a minimum value
// {n,m} -> match exact number of times with a minimum and maximum value

// Use the quantifier * to match its preceding element zero or more times.
// Use the quantifier + to match its preceding element one or more times.
// Use the quantifier ? to match its preceding element zero or more times.
// Use the quantifier {n} to match its preceding element exactly n times.
// Use the quantifier {n, } to match its preceding element at least n times.
// Use the quantifier {n, m} to match its preceding element from n to m times.

//add a caret operator outside [] to enforce a letter or number
