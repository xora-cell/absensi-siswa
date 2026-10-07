<?php
    class Database {
        protected $host = HOST_SERVER;
        protected $user = HOST_USER;
        protected $pass = HOST_PASS;
        protected $db = HOST_DB;

        protected $connection;
        protected $statement;

        function __construct() {
            $db_connect = 'mysql:host='. $this->host . ';dbname='. $this->db;
            $optimasi = [
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            try {
                $this->connection = new PDO($db_connect, $this->user, $this->pass, $optimasi);
            } catch(PDOException $e)  {
                die($e->getMessage());
            }
        }

        function query($sql) {
            $this->statement = $this->connection->prepare($sql);
        }

        function binding($param, $value, $type = NULL) {
            if (is_null($type)) {
                switch (true) {
                    case is_int($value) :
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value) :
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value) :
                        $type = PDO::PARAM_NULL;
                        break;
                    default :
                        $type = PDO::PARAM_STR;
                }
            }

            $this->statement->bindValue($param, $value, $type);
        } 

        function execution() {
            $this->statement->execute();
        }

        function resultAll() {
            $this->execution();
            return $this->statement->fetchAll(PDO::FETCH_ASSOC);
        }
        
        function resultOne() {
            $this->execution();
            return $this->statement->fetch(PDO::FETCH_ASSOC);
        }

        function rowCount() {
            return $this->statement->rowCount();
        }
    }

?>
