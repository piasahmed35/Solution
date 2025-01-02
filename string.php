<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string)
 {

    // Counting vowels in each string

    $vowelCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    

    // Convert string to lowercase to make vowel comparison easier

    $lowerCaseString = strtolower($string);

    
    // Loop through each character in the string to count vowels

    for ($i = 0; $i < strlen($lowerCaseString); $i++)
     {
        if (in_array($lowerCaseString[$i], $vowels)) 
        {
            $vowelCount++;
        }
    }


    // Reversing the string

    $reversedString = strrev($string);

    
    // Printing the result

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
  

}
?>