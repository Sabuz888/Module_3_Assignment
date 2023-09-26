<?php
// Task 2: Array Manipulation

/*
->Create an array called $numbers
->containing the numbers 1 to 10. 
->Write a PHP function which takes the "$numbers" array as an argument 
->to remove the even numbers from the array and print the resulting array.
*/ 

$numbers = range(1, 10);

function removeEven($numb) {
    $oddNumbers = [];
        foreach ($numb as $n) {
        if ($n % 2 != 0){
            $oddNumbers[] = $n;
        }
    }
    print_r($oddNumbers);
}

removeEven($numbers);
