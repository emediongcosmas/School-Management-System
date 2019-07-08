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
            
            try {
                
                $query = "INSERT INTO subject (subject, jss, sss) VALUES ( :subject, :jss, :sss)";
                $insertSubject = $this->connect()->prepare($query);
                $insertSubject->bindParam(':subject', $this->subject);
                $insertSubject->bindParam(':jss', $this->jss);
                $insertSubject->bindParam(':sss', $this->sss);
                $insertSubject->execute();
                
                } 
                
            catch (PDOException $e){
                
                echo $e->getMessage;
                
            }
            
        }
        
        public function FetchSubject($id) {
            
           try {
               
                $query = "SELECT * FROM subject WHERE id=:id";
                $fetchSubject = $this->connect()->prepare($query);
                $fetchSubject->bindParam(':id', $id);
                $fetchSubject->execute();
                $subject = $fetchSubject->fetchAll();
                
                    return $subject;
                
                }
                
            catch (PDOException $e){
                
                echo $e->getMessage;
                
            }
            
        }
        
        public function DeleteSubject($id) {
            
            
            try {
                
                $query = "DELETE FROM subject WHERE id=:id";
                $deleteSubject = $this->connect()->prepare($query);
                $deleteSubject->bindParam(':id', $id);
                $deleteSubject->execute();
                
                }
                
            catch (PDOException $e){
                
                echo $e->getMessage;
                
            }
            
        }
        
        public function FetchAllSubjects() {
            
            try {
                
                $query = "SELECT * FROM subject ORDER BY subject ASC";
                $viewSubject = $this->connect()->prepare($query);
                $viewSubject->execute();
                $subjects = $viewSubject->fetchAll();
                
                    return $subjects;
                
                }
                
            catch (PDOException $e){
                
                echo $e->getMessage;
                
            }
            
        }
        
        public function UpdateSubject($id) {
            
            
            try {
                
                $query = "UPDATE subject SET subject=:subject, jss=:jss, sss=:sss WHERE id=:id";
                $updateSubject = $this->connect()->prepare($query);
                $updateSubject->bindParam(':subject', $this->subject);
                $updateSubject->bindParam(':jss', $this->jss);
                $updateSubject->bindParam(':sss', $this->sss);
                $updateSubject->bindParam(':id', $id);
                $updateSubject->execute();
                
                }
                
            catch (PDOException $e){
                
                echo $e->getMessage;
                
            }
            
        }
        
    }
    
    
    