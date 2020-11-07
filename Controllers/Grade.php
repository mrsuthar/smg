<?php

class Grade extends Controller
{
    public static function LoadStudent()
    {
        return self::query("select distinct tbl_grade.StudentId, tbl_user.Name, tbl_class.ClassName from tbl_grade inner join tbl_student inner join tbl_user inner join tbl_class where tbl_user.IsActive=1 and tbl_student.StudentId=tbl_grade.StudentId and tbl_user.UserId=tbl_student.UserId and tbl_student.ClassId=tbl_class.ClassId;");
    }

    public static function CreateView($ViewName)
    {
        $data = json_decode(json_encode(self::LoadStudent()));
        require_once('./Views/header.php');
        require_once("./Views/$ViewName.php");
        require_once('./Views/footer.php');
    }

    public static function AddGrade()
    {
        $sql = "select tbl_student.StudentId, tbl_user.Name, tbl_class.ClassName from tbl_student inner join tbl_class INNER JOIN tbl_user where tbl_user.IsActive=1 and tbl_user.UserId=tbl_student.UserId and tbl_student.ClassId = tbl_class.ClassId and tbl_student.StudentId not in (SELECT StudentId from tbl_grade);";
        $data = json_decode(json_encode(self::query($sql)));
        require_once('./Views/header.php');
        require_once("./Views/AddGrade.php");
        require_once('./Views/footer.php');
    }

    public static function GradeUpload()
    {
        $StudentId = $_REQUEST['StudentId'];
        $sql = "select tbl_subject.SubjectId, tbl_subject.SubjectName from tbl_subject INNER join tbl_classsubject INNER join tbl_student where tbl_student.ClassId=tbl_classsubject.ClassId and tbl_subject.SubjectId=tbl_classsubject.SubjectId and tbl_student.StudentId=$StudentId;";
        $result = json_decode(json_encode(self::query($sql)));
        require_once('./Views/header.php');
        require_once("./Views/GradeUpload.php");
        require_once('./Views/footer.php');
    }

    public static function GradeUploaded()
    {
        $result = array_map(function ($Grade, $SubjectId) {
            $StudentId = $_POST['StudentId'];
            $sql = "insert into tbl_grade (StudentId,SubjectID,Grade) values($StudentId,$SubjectId,$Grade);";
            self::update($sql);
        }, $_POST['Grade'], $_POST['SubjectId']);
        session_start();
        if($result)
        {
            $_SESSION['alert'] = "Grade Uploaded";
            header("Location: /Grade");
        }
        else
        {
            $_SESSION['alert'] = "Grade Not Uploaded";
            header("Location: /Grade");
        }
    }
}

?>