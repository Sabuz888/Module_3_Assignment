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
