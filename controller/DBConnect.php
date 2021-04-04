<?php
error_reporting(0);
class DBConnect {
    private $db = NULL;
    const PROTOCOL = "Location: http://";
    const DB_SERVER = "localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_NAME = "lhms";

    public function __construct() {
        $dsn = 'mysql:dbname=' . self::DB_NAME . ';host=' . self::DB_SERVER;
        try {
            $this->db = new PDO($dsn, self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $error) {
            throw new IllegalArgumentException('Connection failed: ' .$error->getMessage());
        }
        return $this->db;
    }
    
    public function authLogin($retChq){
        session_start();
        if($retChq === 1){
            if(isset($_SESSION['username'])){
                header(self::PROTOCOL.$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['PHP_SELF']), '/\\')."/"."home.php");
            }
        }elseif($retChq === 0){
            if(!isset($_SESSION['username'])){
                return false;
            }
            return true;
        }elseif($retChq === "1"){
            if(!isset($_SESSION['username'])){
                header(self::PROTOCOL.$_SERVER['SERVER_NAME']);
            }
        }
    }

    public function login($user, $pass){
        $stmt = $this->db->prepare("SELECT * FROM employees WHERE username=? AND password=?");
        $stmt->execute([$user,$pass]);
        if($stmt->rowCount() > 0){
            session_start();
            $employees = $stmt->fetchAll();
            foreach($employees as $emp){
                $_SESSION['username'] = $user;
                $_SESSION['password'] = $pass;
                $_SESSION['id'] = $emp['id'];
                $_SESSION['firstName'] = $emp['f_name'];
                $_SESSION['middleName'] = $emp['m_name'];
                $_SESSION['lastName'] = $emp['l_name'];
                $_SESSION['birthDay'] = $emp['b_day'];
                $_SESSION['profilePic'] = $emp['profilePic'];
                $_SESSION['designation'] = $emp['designation'];
                $_SESSION['landline'] = $emp['landline'];
                $_SESSION['mobile'] = $emp['mobile_no'];
            }
            return true;
        }
        return false;
    }
        
    public function logout(){
        session_start();
        session_destroy();
        header(self::PROTOCOL.$_SERVER['SERVER_NAME']);
    }

    public function searchByBeg($begNo){
        $stmt = $this->db->prepare("SELECT * FROM patients WHERE bed_no LIKE ?");
        $stmt->execute([$begNo]);
        return $stmt->fetchAll();
    }
    
    public function searchByCity($city){
        $stmt = $this->db->prepare("SELECT * FROM patients WHERE city LIKE ?");
        $stmt->execute(["%".$city."%"]);
        return $stmt->fetchAll();
    }

    public function getPatientsProfileById($id){
        $stmt = $this->db->prepare("SELECT * FROM patients WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }

    public function addPatient($fname, $lname, $sex, $bed_no, $bday, $address, $city, $status, $prv_decs, $bd_gp, $weight, $height, $mobile){

        $stmt = $this->db->prepare("INSERT INTO `patients`(`fname`, `lname`, `sex`, `bed_no`, `bday`, `address`, `city`, `status`, `prv_decs`, `bd_gp`, `weight`, `height`, `mobile`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");

        $stmt->execute([$fname, $lname, $sex, $bed_no, $bday, $address, $city, $status, $prv_decs, $bd_gp, $weight, $height, $mobile]);
        
        return true;
    }
    
}

$db = new DBConnect();
?>

