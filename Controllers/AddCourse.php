<?php

class AddCourse extends Controller
{
    public static function AdCourse()
    {
        $result = null;
        foreach($_POST['undefined'] as $array)
        {
            $sql = "insert into tbl_class(ClassName,IsActive) values ('".$array['CName']."',1);";
            $result = self::update($sql);
        }
        if($result)
        {
            session_start();
            $_SESSION['alert'] = "Course Added Successfully";
            header("Location: /Course");
        }
        else
        {
            session_start();
            $_SESSION['alert'] = "Course Not Added";
            header("Location: /Course");
        }
    }

    public static function DeleteCourse()
    {
        $sql = "update tbl_class set IsActive=0 where ClassId=".$_REQUEST['ClassId'].";";
        $result = self::update($sql);
        if($result)
        {
            session_start();
            $_SESSION['alert'] = "Course Delete Successfully";
            header("Location: /Course");
        }
        else
        {
            session_start();
            $_SESSION['alert'] = "Course Not Deleted";
            header("Location: /Course");
        }
    }

    public static function CreateView($ViewName)
    {
            require_once('./Views/header.php');
            require_once("./Views/$ViewName.php");
            require_once('./Views/footer.php');
    }
}

?>