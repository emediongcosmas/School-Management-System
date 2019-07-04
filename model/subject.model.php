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
                
                $insertSubject = $this->connect()->prepare("INSERT INTO subject (subject, jss, sss) VALUES ( :subject, :jss, :sss)");
        
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
                
                $fetchSubject = $this->connect()->prepare("SELECT * FROM subject WHERE id=:id");
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
                
                $deleteSubject = $this->connect()->prepare("DELETE FROM subject WHERE id=:id");
                $deleteSubject->bindParam(':id', $id);
                $deleteSubject->execute();
                
                }
                
            catch (PDOException $e){
                
                echo $e->getMessage;
                
            }
            
        }
        
        public function FetchAllSubjects() {
            
            try {
                
                $viewSubject = $this->connect()->prepare("SELECT * FROM subject ORDER BY subject ASC");
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
                
                $updateSubject = $this->connect()->prepare("UPDATE subject SET subject=:subject, jss=:jss, sss=:sss WHERE id=:id");
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
    
    
    