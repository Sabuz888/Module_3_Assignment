<?php
//Task 4: Multidimensional Array

/*
->Create a multidimensional array called $studentGrades
->to store the grades of three students.
->Each student has grades for three subjects: Math, English, and Science.
->Write a PHP function which takes "$studentGrades" as an argument
->to calculate and print the average grade for each student.
*/
$studentGrades = [
    'Student_1'=>['Math'=>67,'English'=>56,'Science'=>87],
    'Student_2'=>['Math'=>50,'English'=>76,'Science'=>78],
    'Student_3'=>['Math'=>61,'English'=>50,'Science'=>45]
];
function grades($studentGrade) {
    
    foreach ($studentGrade as $student => $grades) {
        
        $averageGrade = array_sum($grades) / count($grades);
        
        echo "Student: $student, Average Grade: $averageGrade \n";
    }
}

grades($studentGrades);








// only for testing purpose

// function grades($studentGrade) {
//     foreach ($studentGrade as $student => $grades) {
//         $averageGrade = array_sum($grades) / count($grades);
        
//         $letterGrade = '';
        
//         if ($averageGrade >= 80 && $averageGrade <= 100) {
//             $letterGrade = 'A+';
//         } elseif ($averageGrade >= 70 && $averageGrade < 80) {
//             $letterGrade = 'A';
//         } elseif ($averageGrade >= 60 && $averageGrade < 70) {
//             $letterGrade = 'A-';
//         } elseif ($averageGrade >= 50 && $averageGrade < 60) {
//             $letterGrade = 'B';
//         } elseif ($averageGrade >= 40 && $averageGrade < 50) {
//             $letterGrade = 'C';
//         } else {
//             $letterGrade = 'F';
//         }
        
//         echo "Student: $student, Average Grade: $averageGrade, Letter Grade: $letterGrade\n";
//     }
// }

// grades($studentGrades);



        
