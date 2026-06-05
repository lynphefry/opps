<!DOCTYPE html>
<html>
<head>
    <title>OOP class Assignment</title>
</head>
<body>

<h1>Student Class</h1>

<?php

class Student {
    public $name;
    public $course;

    public function introduce() {
        echo "Hello, my name is {$this->name}.<br>";
        echo "I am studying {$this->course}.<br><br>";
    }
}

// Student 1
$student1 = new Student();
$student1->name = "phefry";
$student1->course = "Web Development";

// Student 2
$student2 = new Student();
$student2->name = "Mary";
$student2->course = "UI/UX Design";

// Student 3
$student3 = new Student();
$student3->name = "David";
$student3->course = "WordPress Development";

// Call method
$student1->introduce();
$student2->introduce();
$student3->introduce();

?>

<h1>Trainer Class</h1>

<?php

class Trainer {
    public $name;
    public $specialization;

    public function introduce() {
        echo "Hello, my name is {$this->name}.<br>";
        echo "I teach {$this->specialization}.<br><br>";
    }
}

// Trainer 1
$trainer1 = new Trainer();
$trainer1->name = "Ruto";
$trainer1->specialization = "forwardroll and backwardsroll";

// Trainer 2
$trainer2 = new Trainer();
$trainer2->name = "Jane";
$trainer2->specialization = "gymnastics";

// Call method
$trainer1->introduce();
$trainer2->introduce();

?>

</body>
</html>