<?php

    class Index extends Controller
    {
        public static function FetchData()
        {
            $Student  = self::update("select StudentId from tbl_student;");
            $Teacher = self::update("select TeacherId from tbl_teachers;");
            $Classes = self::update("select ClassId from tbl_class;");
            $Subject = self::update("select SubjectId from tbl_Subject;");
            return (object)array("Student" => $Student, "Teacher" => $Teacher, "Classes" => $Classes,"Subject" => $Subject);
        }

        public static function CreateView($ViewName)
        {
            $data = self::FetchData();
            require_once('./Views/header.php');
            require_once("./Views/$ViewName.php");
            require_once('./Views/footer.php');
        }
    }

?>