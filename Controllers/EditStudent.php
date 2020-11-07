<?php

class EditStudent extends Controller
{

    public static function UpdateStudent()
    {
        $sql= "update tbl_user set Name='".$_POST['SName']."', Gender='".$_POST['SGender']."', Mobile='".$_POST['SMobile']."', Email='".$_POST['SEmail']."', Address='".$_POST['SAddress']."', ModifiedDate=now() where UserId='".$_POST['UserId']."';";
        $result = self::update($sql);
        if($result)
        {
            session_start();
            $_SESSION['alert'] = "User Update Successfully";
            header("Location: /Student");
        }
        else
        {
            session_start();
            $_SESSION['alert'] = "User Updation UnSuccessful";
            header("Location: /Student");
        }
    }

    public static function CreateView($ViewName)
    {
        $UserId = $_REQUEST['UserId'];
        $sql = "SELECT UserId, Name, Gender, DOB, Mobile, Email, Address from tbl_user where IsActive=1 and UserId=$UserId";
        $data = json_decode(json_encode(self::query($sql)));
        require_once('./Views/header.php');
        require_once("./Views/$ViewName.php");
        require_once('./Views/footer.php');
    }
}

?>