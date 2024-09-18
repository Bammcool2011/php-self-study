<?php 
// function hello($studentname = 'Student'){
//     $message = "Dear $studentname, <br> Welcome to our school!";
//     echo $message;
// }

// hello("Anascence");


define ('Welcome', 'Some value');

$studentname = "Anascence";
function hello(){
    global $studentname;
    global $instructor;

    $instructor = "Mr. John";
    echo "Dear {$studentname}, <br>";
    echo "Welcome";
}

hello();
echo "Course Instructor: $instructor";

?>