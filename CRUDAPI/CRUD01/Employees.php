<?php
class Employee{

    // 連線
    private $conn;

    // 資料表
    private $db_table = "";

    // 欄位
    public $id;
    public $name;
    public $email;
    public $age;
    public $designation;
    public $created;

    // 資料庫連線
    public function __construct($db){
        $this->conn = $db;
    }

    // 建立
    public function createEmployee(){
        $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        name = :name, 
                        email = :email, 
                        age = :age, 
                        designation = :designation, 
                        created = :created";

        $stmt = $this->conn->prepare($sqlQuery);

        // PHP 過濾字串
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->age=htmlspecialchars(strip_tags($this->age));
        $this->designation=htmlspecialchars(strip_tags($this->designation));
        $this->created=htmlspecialchars(strip_tags($this->created));

        // 綁資料
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":age", $this->age);
        $stmt->bindParam(":designation", $this->designation);
        $stmt->bindParam(":created", $this->created);

        if($stmt->execute()){
            return true;
        }

        return false;
    }


}
?>