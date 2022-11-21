<?php

include_once("../Model/M_Student.php");

class StudentController
{
    public function invoke()
    {
        if (isset($_GET['stid'])) {
            $model_student = new Model_Student();
            $student = $model_student->getStudentDetail($_GET['stid']);
            include_once("../View/StudentDetail.html");
        } else if (isset($_GET['mod1'])) {
            include_once("../View/AddStudent.html");
        } else if (isset($_GET['mod2'])) {
            $model_student = new Model_Student();
            $studentList = $model_student->getAllStudent();
            include_once("../View/UpdateStudentList.html");
        } else if (isset($_GET['ustid'])) {
            $model_student = new Model_Student();
            $student = $model_student->getStudentDetail($_GET['ustid']);
            include_once("../View/UpdateStudent.html");
        } else if (isset($_GET['mod3'])) {
            $model_student = new Model_Student();
            $studentList = $model_student->getAllStudent();
            include_once("../View/DeleteStudent.html");
        } else if (isset($_GET['mod4'])) {
            include_once("../View/SearchStudent.html");
        } else if (isset($_POST['insert'])) {
            $name = $_REQUEST['name'];
            $age = $_REQUEST['age'];
            $university = $_REQUEST['university'];
            $student = new Model_Student();
            $student->addStudent($name, $age, $university);
            header("Location: C_Student.php");
        } else if (isset($_POST['update'])) {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $age = $_REQUEST['age'];
            $university = $_REQUEST['university'];
            $student = new Model_Student();
            $student->updateStudent($id, $name, $age, $university);
            header("Location: C_Student.php");
        } else if (isset($_GET['dstid'])) {
            $id = $_GET['dstid'];
            $student = new Model_Student();
            $student->deleteStudent($id);
            header("Location: C_Student.php");
        } else if (isset($_POST['search'])) {
            if(isset($_POST['type']))
            {
                $model_student = new Model_Student();
                $studentList = $model_student->searchStudent($_POST['search'],$_POST['type']);
                include_once("../View/SearchStudentList.html");
            }
            else{
                include_once("../View/SearchStudent.html");
            }
        } else {
            $model_student = new Model_Student();
            $studentList = $model_student->getAllStudent();
            include_once("../View/StudentList.html");
        }
    }
};
$C_Student = new StudentController();
$C_Student->invoke();
