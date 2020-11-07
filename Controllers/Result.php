<?php

class Result extends Controller
{
    public static function GetResult()
    {
        $SID = $_REQUEST['StudentId'];
        $sql="select distinct tbl_grade.StudentId, tbl_user.Name, tbl_class.ClassName, tbl_subject.SubjectName, tbl_grade.Grade from tbl_grade inner join tbl_subject INNER join tbl_student inner join tbl_user inner join tbl_class where tbl_user.IsActive=1 and tbl_student.StudentId=tbl_grade.StudentId and tbl_user.UserId=tbl_student.UserId and tbl_student.ClassId=tbl_class.ClassId and tbl_grade.SubjectId=tbl_subject.SubjectId and tbl_grade.StudentId=$SID";
        return self::query($sql);
    }

    public static function CreateView($ViewName)
    {
        $data = json_decode(json_encode(self::GetResult()));
        require_once('./Views/header.php');
        require_once("./Views/$ViewName.php");
        require_once('./Views/footer.php');
    }
}

?>