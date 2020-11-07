<?php

class EditCourse extends Controller
{

    public static function UpdateCourse()
    {
        $ClassId = $_POST['ClassId'];
        $ClassName = $_POST['CName'];
        $sql= "update tbl_class set ClassName='$ClassName' where ClassId=$ClassId;";
        $result = self::update($sql);
        if($result)
        {
            session_start();
            $_SESSION['alert'] = "Class Update Successfully";
            header("Location: /Course");
        }
        else
        {
            session_start();
            $_SESSION['alert'] = "Class Updation UnSuccessful";
            header("Location: /Course");
        }
    }

    public static function CreateView($ViewName)
    {
        $ClassId = $_REQUEST['ClassId'];
        $sql = "Select ClassName from tbl_class where ClassId=$ClassId";
        $result = self::query($sql);
        $ClassName = $result[0]['ClassName'];
        require_once('./Views/header.php');
        require_once("./Views/$ViewName.php");
        require_once('./Views/footer.php');
    }
}

?>