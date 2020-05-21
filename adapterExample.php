<?php
    class Student {
        private $name;
        private $age;
        function __construct($name_in, $age_in) {
            $this->name = $name_in;
            $this->age  = $age_in;
        }
        function getName() {
            return $this->name;
        }
        function getAge() {
            return $this->age;
        }
    }

    class StudentAdapter {
        private $student;
        function __construct(Student $student_in) {
            $this->student = $student_in;
        }
        function getNameAndAgeOfStudent() {
            return 'Name: '.$this->student->getName().' and  '.$this->student->getAge().' years old.';
        }
    }

    $student = new Student("Cao Ngoc Tau", "20");
    $studentAdapter = new StudentAdapter($student);

    echo $studentAdapter->getNameAndAgeOfStudent();


?>