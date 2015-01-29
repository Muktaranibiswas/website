<?php
//function_autolaod($class)
//include_once('classes/Bkict.php');


function __autoload($class_name)
{
    include_once("classes/".$class_name.".php");
}


$bkiict = new Bkiict();

//echo $bkiict->fullName;

$student=new Student();
//var_dump($student);

$course = new Course();
//echo $course->title;
//echo "<br />";
//$course->title = 'Course Title';
echo $course->title;

//echo "<br />";
//$course->getCredits();
//$course->getLessons();
//var_dump($course);

$srMyarray= serialize($course);
echo "<br />";
$unsrMyarray= unserialize($course);




