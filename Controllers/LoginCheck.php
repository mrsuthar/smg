<?php 

class LoginCheck extends Controller 
{
    public static function fetchdata($uname,$pass)
    {
        $result = self::query("select tbl_user.UserId, tbl_user.Name, tbl_login.Designation from tbl_login inner join tbl_user where Username='$uname' and Password ='$pass'and tbl_login.UserId=tbl_user.UserId and tbl_user.IsActive=1;");
        if($result)
        {
            session_start();
            $_SESSION['islogin'] = true;
            foreach($result as $row)
            {
                $_SESSION['name'] = $row['Name'];
                $_SESSION['designation'] = $row['Designation'];
                $_SESSION['loggedinid'] = $row['UserId'];   
            }
            header("Location: /Index");
        }
        else
        {
            session_start();
            $_SESSION['error'] = "Invalid Credentials.";
            header("Location: /Login");
        }
    }
    
    public static function Validate()
    {
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        self::fetchdata($uname,$pass);
    }
}
?>
