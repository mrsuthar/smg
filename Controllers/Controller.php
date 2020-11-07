<?php

    class Controller extends Database
    {
        public static function CreateView($ViewName)
        {
            require_once('./Views/header.php');
            require_once("./Views/$ViewName.php");
            require_once('./Views/footer.php');
        }
    }

?>