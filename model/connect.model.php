<?php

    class Dbh {
        
        private $servername;
        private $username;
        private $password;
        private $dbname;
        private $charset;
        
        public function connect() {
            
            $this->servername = 'localhost';
            $this->username = 'root';
            $this->password = 'emediong1';
            $this->dbname = 'studentportal';
            $this->charset = 'latin1';
            
            try {
                
                $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
                $pdo = new PDO($dsn, $this->username, $this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                return $pdo;
                
                } 
            
            catch (PDOException $e) {
                    
                echo "Connection failed:".$e->getMessage();
                    
                }
            
        }
        
    }

?>