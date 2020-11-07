<?php

class AddSubject extends Controller
{
    public static function AdSubject()
    {
        $result = null;
        $count = 0;
        $ClassId = $_POST['ClassId'];
        foreach($_POST['undefined'] as $array)
        {
            $sql = "insert into tbl_subject(SubjectName,IsActive) values ('".$array['SName']."',1);";
            $result = self::update($sql);
            $count++;
        }
        $count = $count-1;
        if($result)
        {
            $realcount = self::update("Select SubjectId from tbl_subject;");
            $basecount = $realcount - $count;
            for($i=0; $i<=$count;$i++)
            {
                $sql= "insert into tbl_classsubject(ClassId,SubjectId) values ($ClassId,$basecount);";
                self::update($sql);
                $basecount++;
            }
            session_start();
            $_SESSION['alert'] = "Subject Added Successfully";
            header("Location: /Subject?ClassId=$ClassId");
        }
        else
        {
            session_start();
            $_SESSION['alert'] = "Subject Not Added";
            header("Location: /Subject?ClassId=$ClassId");
        }
    }

    public static function DeleteSubject()
    {
        $ClassId = $_REQUEST['ClassId'];
        $SubjectId = $_REQUEST['SubjectId'];
        $sql = "update tbl_subject set IsActive=0 where SubjectId=$SubjectId;";
        $result = self::update($sql);
       if($result)
        {
            session_start();
            $_SESSION['alert'] = "Subject Delete Successfully";
            header("Location: /Subject?ClassId=$ClassId");
        }
        else
        {
            session_start();
            $_SESSION['alert'] = "Subject Not Deleted";
            header("Location: /Subject?ClassId=$ClassId");
        }
    }

    public static function CreateView($ViewName)
    {   
        $ClassId = $_REQUEST['ClassId'];
        require_once('./Views/header.php');
        require_once("./Views/$ViewName.php");
        require_once('./Views/footer.php');
    }
}

?>