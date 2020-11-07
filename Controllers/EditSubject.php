<?php

class EditSubject extends Controller
{

    public static function UpdateSubject()
    {
        $SubjectId = $_POST['SubjectId'];
        $SubjectName = $_POST['SName'];
        $ClassId = $_POST['ClassId'];
        $sql= "update tbl_subject set SubjectName='$SubjectName' where SubjectId=$SubjectId;";
        $result = self::update($sql);
        if($result)
        {
            session_start();
            $_SESSION['alert'] = "Subject Update Successfully";
            header("Location: /Subject?ClassId=$ClassId");
        }
        else
        {
            session_start();
            $_SESSION['alert'] = "Subject Updation UnSuccessful";
            header("Location: /Subject?ClassId=$ClassId");
        }
    }

    public static function CreateView($ViewName)
    {
        $SubjectId = $_REQUEST['SubjectId'];
        $ClassId = $_REQUEST['ClassId'];
        $sql = "Select SubjectName from tbl_subject where SubjectId=$SubjectId";
        $result = self::query($sql);
        $SubjectName = $result[0]['SubjectName'];
        require_once('./Views/header.php');
        require_once("./Views/$ViewName.php");
        require_once('./Views/footer.php');
    }
}

?>