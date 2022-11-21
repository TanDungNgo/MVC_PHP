<?php
include_once("E_Student.php");
class Model_Student
{
    public function __construct()
    {
    }
    public function getAllStudent()
    {
        $link = mysqli_connect("localhost", "root", "") or die("Can not connect to database");
        mysqli_select_db($link, "dulieu");
        $sql = "SELECT * FROM SINHVIEN";
        $rs = mysqli_query($link, $sql);
        $i = 0;
        while ($row = mysqli_fetch_array($rs)) {
            $id = $row["id"];
            $name = $row["name"];
            $age = $row["age"];
            $university = $row["university"];
            $student[$i++] = new Entity_Student($id, $name, $age, $university);
        }
        return $student;
    }
    public function getStudentDetail($stid)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Can not connect to database");
        mysqli_select_db($link, "dulieu");
        $sql = "SELECT * FROM SINHVIEN WHERE id = '$stid'";
        $rs = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($rs)) {
            $id = $row["id"];
            $name = $row["name"];
            $age = $row["age"];
            $university = $row["university"];
            $student = new Entity_Student($id, $name, $age, $university);
        }
        return $student;
    }
    public function addStudent($name, $age, $university)
    {
        $link = mysqli_connect('localhost', 'root', '') or die("Can not connect to database");
        mysqli_select_db($link, 'dulieu');
        $rs = mysqli_query($link, "INSERT INTO SINHVIEN (name, age, university) VALUES ('$name', $age ,'$university')");
        mysqli_close($link);
    }

    public function updateStudent($id, $name, $age, $university)
    {
        $link = mysqli_connect('localhost', 'root', '') or die("Can not connect to database");
        mysqli_select_db($link, 'dulieu');
        $rs = mysqli_query($link, "UPDATE SINHVIEN SET `name` = '" . $name . "', age = '" . $age . "', university = '" . $university . "' WHERE id = '" . $id . "'");
        mysqli_close($link);
    }

    public function deleteStudent($id)
    {
        $link = mysqli_connect('localhost', 'root', '') or die("Can not connect to database");
        mysqli_select_db($link, 'dulieu');
        $rs = mysqli_query($link, "DELETE FROM sinhvien WHERE id = '" . $id . "'");
        mysqli_close($link);
    }
    public function searchStudent($search, $type)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Can not connect to database");
        mysqli_select_db($link, "dulieu");
        if ($type == 'name')
            $sql = "SELECT * FROM SINHVIEN WHERE  name LIKE '%$search%'";
        if ($type == 'age')
            $sql = "SELECT * FROM SINHVIEN WHERE  age = '$search'";
        if ($type == 'university')
            $sql = "SELECT * FROM SINHVIEN WHERE  university = '$search'";
        $rs = mysqli_query($link, $sql);
        $i = 0;
        while ($row = mysqli_fetch_array($rs)) {
            $id = $row["id"];
            $name = $row["name"];
            $age = $row["age"];
            $university = $row["university"];
            $student[$i++] = new Entity_Student($id, $name, $age, $university);
        }
        return $student;
    }
}
