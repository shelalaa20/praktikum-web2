<?php
class Person {
    private $name;
    
    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
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
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
    public function getName() {
        return "Student " . parent::getName();
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
        return "Teacher " . parent::getName();
    }

}
$person1 = new Student("Shela", "230302044");
echo $person1->getName()  . " memiliki ID " . $person1->getStudentID() . "<br>"; 
$person2 = new Teacher("Rina", "230302045");
echo $person2->getName()  . " memiliki ID " . $person2->getTeacherID() . "<br>"; 
$person3 = new Student("Bila", "230302000");
echo $person3->getName()  . " memiliki ID " . $person3->getStudentID() . "<br>";
//
echo "<hr>";
echo "Data setelah diubah<br>";
$person1->setName("Shela Jaya Andini");
$person3->setStudentID("230102034");
//
echo $person1->getName()  . " memiliki ID " . $person1->getStudentID() . "<br>"; 
echo $person3->getName()  . " memiliki ID " . $person3->getStudentID() . "<br>"; 
?>