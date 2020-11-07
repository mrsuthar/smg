<?php

class Course extends Controller
{
    public static function GetClass()
        {
            $sql = "select tbl_class.ClassId, tbl_class.ClassName from tbl_class where tbl_class.IsActive=1;";
            return json_decode(json_encode(self::query($sql)));
        }

        public static function CreateView($ViewName)
        {
            $data = self::GetClass();
            require_once('./Views/header.php');
            require_once("./Views/$ViewName.php");
            require_once('./Views/footer.php');
        }
}


?>