<?php

    class Student extends Controller
    {
        public static function AllStudent()
        {
            return self::query("Select tbl_user.UserId, tbl_user.Name, tbl_user.Gender, tbl_user.Mobile, tbl_user.Email, tbl_user.CreatedDate, tbl_class.ClassName from tbl_user inner join tbl_student inner join tbl_class where tbl_student.UserId=tbl_user.UserId and tbl_class.ClassId=tbl_student.ClassId and tbl_user.IsActive=1;");
        }

        public static function CreateView($ViewName)
        {
            $data = json_decode(json_encode(self::AllStudent()));
            require_once('./Views/header.php');
            require_once("./Views/$ViewName.php");
            require_once('./Views/footer.php');
        }

        public static function GetClass()
        {
            return json_decode(json_encode(self::query("Select ClassId,ClassName from tbl_class where IsActive=1")));
        }

        public static function AddStudent()
        {
            $class = self::GetClass();
            require_once('./Views/header.php');
            require_once("./Views/AddStudent.php");
            require_once('./Views/footer.php');
        }

        public static function StudentAdded()
        {
            session_start();
            $SName = $_POST['SName'];
            $SGender = $_POST['SGender'];
            $SDOB = $_POST['SGender'];
            $SMobile = $_POST['SMobile'];
            $SEmail = $_POST['SEmail'];
            $SAddress = $_POST['SAddress'];        
            $CreatedBy = $_SESSION['loggedinid'];
            self::update("insert into tbl_user(Name,Gender,DOB,Mobile,Email,Address,CreatedBy,CreatedDate,IsActive) values ('$SName','$SGender','$SDOB','$SMobile','$SEmail','$SAddress',$CreatedBy,now(),1);");
            $StudentId = self::update("select UserId from tbl_user;");
            $ClassId = $_POST['ClassId'];
            $result = self::update("insert into tbl_student(UserId,ClassId) values ($StudentId,$ClassId);");
            if($result)
            {
                $_SESSION['alert'] = "Student Added Successfully";
                header("Location: /Student");
            }
            else
            {
                $_SESSION['alert'] = "Studnet Registration UnSuccessful";
                header("Location: /Student");
            }
        }

        public static function DeleteStudent()
        {
            session_start();
            $UserId = $_REQUEST['UserId'];
            $result = self::update("update tbl_user set IsActive=0 where Userid=$UserId");
            if($result)
            {
                $_SESSION['alert'] = "Student Deleted Successfully";
                header("Location: /Student");
            }
            else
            {
                $_SESSION['alert'] = "Studnet Not Deleted";
                header("Location: /Student");
            }
        }
    }

?>