<?php
abstract class User
{
    public $id;
    public $name;
    public $gmail;
    public $phone;
    protected $password;
    public $created_at;
    public $updated_at;

    function __construct($id,$name,$gmail,$phone,$password,$created_at,$updated_at) {
        $this->id = $id;
        $this->name = $name;
        $this->gmail = $gmail;
        $this->password = $password;
        $this->phone = $phone;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public static function login($gmail,$password)
    {
        $user = null;
        $qry = "SELECT * FROM USERS WHERE gmail='$gmail' AND password='$password' ";
        require_once('config.php');
        $cn= mysqli_connect(DB_HOST,DB_USER_NAME,DB_PASS,DB_NAME);
        $result = mysqli_query($cn,$qry);
        if ($arr = mysqli_fetch_assoc($result)) {
            switch ($arr["role"]) {
                case 'subscriber':
                    $user = new Subscriber($arr["id"],$arr["name"],$arr["gmail"],$arr["password"],$arr["phone"],$arr["created_at"],$arr["updated_at"]);
                    break;
                    case 'admin':
                        $user = new Admin($arr["id"],$arr["name"],$arr["gmail"],$arr["password"],$arr["phone"],$arr["created_at"],$arr["updated_at"]);
                        break;
                
            }
        }
        mysqli_close($cn);
        return $user;
    }
}
class Subscriber extends User
{
    public $role = "subscriber";

    public static function register($name,$gmail,$phone,$password)
    {
        $qry = "INSERT INTO USERS (name,gmail,phone,password) 
        VALUES('$name','$gmail','$phone','$password')";
        require_once('config.php');
        $cn= mysqli_connect(DB_HOST,DB_USER_NAME,DB_PASS,DB_NAME);
        $result = mysqli_query($cn,$qry);
        mysqli_close($cn);
        return $result;
    }
    public static function storePost($title,$content,$imageName,$user_id)
    {
        $qry = "INSERT INTO USERS (title,content,img,user_id) 
        VALUES('$title','$content','$imageName',$user_id)";
        require_once('config.php');
        $cn= mysqli_connect(DB_HOST,DB_USER_NAME,DB_PASS,DB_NAME);
        $result = mysqli_query($cn,$qry);
        mysqli_close($cn);
        return $result;
    }
}
class Admin extends User
{
    public $role = "admin";

}