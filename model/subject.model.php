<?php

    require 'connect.model.php';

    class Subject extends Dbh {
        
        private $subject;
        private $jss;
        private $sss;
        
        public function GetSubject() {
            
            if(isset($_POST['subject']) && !empty($_POST['subject'])) {
                
                $this->subject = htmlentities($_POST['subject']);
                
                return $this->subject;
                
            }
            
        }
        
        public function GetJss() {
            
            if(isset($_POST['jss']) && !empty($_POST['jss'])){
                
                $this->jss = $_POST['jss'];
                
                return $this->jss;
                
            } else {
                
                $this->jss = 0;
                
                return $this->jss;
                
            }
            
        }
        
        public function GetSss() {
            
            if(isset($_POST['sss']) && !empty($_POST['sss'])) {
                
                $this->sss = $_POST['sss'];
                
                return $this->sss;
                
            } else {
                
                $this->sss = 0;
                
                return $this->sss;
                
            }
            
        }
        
        public function InsertSubject() {
            
            $insertStudent = $this->connect()->prepare("INSERT INTO subject (subject, jss, sss) VALUES ( :subject, :jss, :sss)");
        
        
            $insertStudent->bindParam(':subject', $this->subject);
            $insertStudent->bindParam(':jss', $this->jss);
            $insertStudent->bindParam(':sss', $this->sss);
            $insertStudent->execute();
            
        }   
        
    }
    
    
    