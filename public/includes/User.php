<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * User Class for account creation and login pupose
 */

class User{
    private $con;

    function __construct()
    {
        /*
         * Included database
         */
        include_once('../database/db.php');

        /*
         * New database instance
         */
        $db = new Database();
        $this->con = $db->connect();
       /**
        * if( $this->con = $db->connect()){
       echo 'Connection etablie';
       }else{
       echo 'Non connecté';
       }
        */
    }


    /**
     * User is already registered or not
     * @param $email
     * @return int
     */
    public function emailExists($email){
    $pre_stmt = $this->con->prepare("SELECT `id` FROM `user` WHERE email = ? ");

    $pre_stmt->bind_param('s',$email);
    $pre_stmt->execute() or die($this->con->error);
    $result = $pre_stmt->get_result();

    if($result->num_rows > 0){
        return 1;
    }else{
        return 0;
        }
    }

    /**
     * @param $username
     * @param $lastname
     * @param $email
     * @param $password
     * @param $role
     * @return string
     */
    public function createUserAccount($username,$lastname,$email,$password,$role){
        if($this->emailExists($email)){
            return "EMAIL_ALREADY_EXISTS";
        }else{
            $pass_hash = password_hash($password, PASSWORD_BCRYPT,["cost"=>8]);
            $date = date("Y-m-d h:i:s");
            $notes = "";
            $pre_stmt = $this->con->prepare("INSERT INTO `user`(`username`, `lastname`, `email`, `password`, `role`, `register_date`, `last_login`, `notes`) 
            VALUES (?,?,?,?,?,?,?,?)");

            $pre_stmt->bind_param("ssssssss", $username,$lastname,$email,$pass_hash,$role,$date,$date,$notes);
            $result = $pre_stmt->execute() or die($this->con->error);

            if($result){
                return $this->con->insert_id;
            }else{
                return "SOME_ERROR";
            }
        }

    }

    public function userLogin($email, $password){
        $pre_stmt = $this->con->prepare("SELECT id, username, lastname, password, last_login FROM user WHERE email = ?");
        $pre_stmt->bind_param("s",$email);
        $pre_stmt->execute() or die($this->con->error);
        $result = $pre_stmt->get_result();

        if($result->num_rows < 1){
            return "NOT_REGISTERED";
        }else{
            $row = $result->fetch_assoc();
            if(password_verify($password, $row["password"])){
                $_SESSION["userid"]     = $row["id"];
                $_SESSION["username"]   = $row["username"];
                $_SESSION["lastname"]   = $row["lastname"];
                $_SESSION["last_login"] = $row["last_login"];

                /**
                 * Updating user last login time when he is performing
                 */
                $last_login = date("Y-m-d h:i:s");
                $pre_stmt = $this->con->prepare("UPDATE user SET last_login = ? WHERE email = ?");
                $pre_stmt->bind_param("ss", $last_login, $email);
                $result = $pre_stmt->execute() or die($this->con->error);

                if ($result){
                    return 1;
                }else{
                    return 0;
                }

            }else{
                return "PASSWORD_NOT_MATCHED";
            }
        }
    }

}
//$user = new User();

//echo $user->createUserAccount("masta","mfumu","masta@mab.me","password","Admin");
//echo $user->userLogin("gomab@mab.me", "password");

//echo $_SESSION['username'];

