<?php
class Person {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID){
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return $this->studentID;
    }

    public function getName() {
        return "Student " . $this->name;
    }
}

class Teacher extends Person {
    private $teacherID;

    public function __construct($name, $teacherID){
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    public function getTeacherID() {
        return $this->teacherID;
    }

    public function getName() {
        return "Teacher " . $this->name;
    }

}
$person1 = new Student("Shela", "230302044");
echo $person1->getName()  . " memiliki ID " . $person1->getStudentID() . "<br>"; 
$person2 = new Teacher("Rina", "230302045");
echo $person2->getName()  . " memiliki ID " . $person2->getTeacherID() . "<br>"; 
?>

