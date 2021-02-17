<?php 

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASSWORD;
    private $name = DB_NAME;

    // Database handler
    private $dbh;

    // Statement
    private $stmt;

    
    public function __construct()
    {
        # Data source name 
        $dsn = "mysql:host=$this->host;dbname=$this->name";
        try {

            $option = [
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } 
        catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($query) {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $tipe = null) 
    {
        if (is_null($tipe)) {
            switch ( true ) {
                case is_int($value) :
                    $tipe = PDO::PARAM_INT;
                case is_bool($value) :
                    $tipe = PDO::PARAM_BOOL;
                case is_null($value) :
                    $tipe = PDO::PARAM_NULL;
                default :
                    $tipe = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $tipe); 
    }

    public function execute() 
    {
        $this->stmt->execute(); 
    }


    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function rowCount() {
        return $this->stmt->rowCount();
    }
}

?>