
<?php
abstract class Course {
    abstract public function getCourseDetails();

}
class OnlineCourse extends Course {
    public function getCourseDetails(){
        return "ini OnlineCourse";
    }
}
class OfflineCourse extends Course {
    public function getCourseDetails(){
        return "ini OfflineCourse";
    }
}
$course1= new OnlineCourse();
echo "Detail : " . $course1->getCourseDetails() . "<br>";
$course2= new OfflineCourse();
echo "Detail : " . $course2->getCourseDetails();
?>