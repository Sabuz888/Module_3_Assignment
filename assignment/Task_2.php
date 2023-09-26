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





// or,


// $numbers = array(1,2,3,4,5,6,7,8,9,10);

// function oddNumber($numbers){
//     foreach($numbers as $x){
//         if($x % 2 != 0){
//             print_r($x);
//             echo PHP_EOL;
//     }

//     }
// }
// oddNumber($numbers); 

// echo PHP_EOL;
// echo "<br/>";

//or,



// $numbers = array(1,2,3,4,5,6,7,8,9,10);

// function oddNumber($n){
//     $numb=range(1,10,2);
//     print_r($numb);
// }
// oddNumber($numbers);


// echo PHP_EOL;
// echo PHP_EOL;
// echo "<br/>";

