<?php

class Subject extends Controller
{
    public static function GetSubject()
    {
        $sql = "select tbl_subject.SubjectId, tbl_subject.SubjectName from tbl_subject inner join tbl_classsubject where tbl_classsubject.ClassId=".$_REQUEST['ClassId']." and tbl_classsubject.SubjectId=tbl_subject.SubjectId and tbl_subject.IsActive=1;";
        return json_decode(json_encode(self::query($sql)));
    }

    public static function CreateView($ViewName)
    {
        $ClassId = $_REQUEST['ClassId'];
        $result = self::query("Select ClassName from tbl_class where ClassId=$ClassId");
        $ClassName = $result[0]['ClassName'];
        $data = self::GetSubject();
        require_once('./Views/header.php');
        require_once("./Views/$ViewName.php");
        require_once('./Views/footer.php');
    }
}

?>