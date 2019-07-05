<?php

    require 'connect.model.php';

    class Student extends Dbh {
        
        private $surname;
        private $firstname;
        private $middlename;
        private $dob;
        private $email;
        private $gender;
        private $studentid;
        private $address;
        private $city;
        private $state;
        private $guardian_name;
        private $guardian_no;
        private $relationship;
        
        public function setSurname($surname) {
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                if(isset($_POST['surname']) && !empty($_POST['surname'])) {
                
                    $this->surname = htmlentities($surname);
                
                    return $this->surname;
                    
                }
                
            }
            
        }
        
        public function setFirstname($firstname) {
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                if(isset($_POST['firstname']) && !empty($_POST['firstname'])) {
                
                    $this->firstname = htmlentities($firstname);
                
                    return $this->firstname;
                    
                }
                
            }
            
        }
        
        public function setMiddlename($middlename) {
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                if(isset($_POST['middlename']) && !empty($_POST['middlename'])) {
                
                    $this->middlename = htmlentities($middlename);
                
                    return $this->middlename;
                    
                }
                
            }
            
        }
        
        public function setDob($dob) {
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                if(isset($_POST['dob']) && !empty($_POST['dob'])) {
                
                    $this->dob = $dob;
                
                    return $this->dob;
                    
                }
                
            }
            
        }
        
        public function setEmail($email) {
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                if(isset($_POST['email']) && !empty($_POST['email'])) {
                
                    $this->email = filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
                
                    return $this->email;
                    
                }
                
            }
            
        }
        
        public function setGender($gender) {
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                if(isset($_POST['gender']) && !empty($_POST['gender'])) {
                
                    $this->gender = $gender;
                
                    return $this->gender;
                    
                }
                
            }
            
        }
        
        public function setStudentid($studentid) {
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                if(isset($_POST['studentid']) && !empty($_POST['studentid'])) {
                
                    $this->studentid = htmlentities($studentid);
                
                    return $this->studentid;
                    
                }
                
            }
            
        }
        
        public function setAddress($address) {
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                if(isset($_POST['address']) && !empty($_POST['address'])) {
                
                    $this->address = htmlentities($address);
                
                    return $this->address;
                    
                }
                
            }
            
        }
        
        public function setCity($city) {
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                if(isset($_POST['city']) && !empty($_POST['city'])) {
                
                    $this->city = htmlentities($city);
                
                    return $this->city;
                    
                }
                
            }
            
        }
        
        public function setState($state) {
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                if(isset($_POST['state']) && !empty($_POST['state'])) {
                
                    $this->state = htmlentities($state);
                
                    return $this->state;
                    
                }
                
            }
            
        }
        
        public function setGuardianName($guardian_name) {
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                if(isset($_POST['guardian_name']) && !empty($_POST['guardian_name'])) {
                
                    $this->guardian_name = htmlentities($guardian_name);
                
                    return $this->guardian_name;
                    
                }
                
            }
            
        }
        
        public function setGuardianNo($guardian_no) {
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                if(isset($_POST['guardian_no']) && !empty($_POST['guardian_no'])) {
                
                    $this->guardian_no = htmlentities($guardian_no);
                
                    return $this->guardian_no;
                    
                }
                
            }
            
        }
        
        public function setRelationship($relationship) {
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                if(isset($_POST['relationship']) && !empty($_POST['relationship'])) {
                
                    $this->relationship = $relationship;
                
                    return $relationship;
                    
                }
                
            }
            
        }
        
        public function VerifyStudentReg() {
            
            $query = "SELECT COUNT(email) AS email
                             FROM student WHERE email = :email";
            
            $fetchStudent = $this->connect()->prepare($query);
            $fetchStudent->bindParam(':email', $this->email);
            $fetchStudent->execute();
            
                $row = $fetchStudent->fetch(PDO::FETCH_ASSOC);
                
                    if($row['email'] > 0) {
                        
                        die('Student already exists!');
                        
                    }
            
        }
        
        public function InsertStudent() {
            
            $insertStudent = $this->connect()->prepare("INSERT INTO student (surname, firstname, middlename, dob, email, gender, studentid, address, city, state, guardian_name, guardian_no, relationship) VALUES ( :surname, :firstname, :middlename, :dob, :email, :gender, :studentid, :address, :city, :state, :guardian_name, :guardian_no, :relationship )");
            
            
            $insertStudent->bindParam(':surname', $this->surname);
            $insertStudent->bindParam(':firstname', $this->firstname);
            $insertStudent->bindParam(':middlename', $this->middlename);
            $insertStudent->bindParam(':dob', $this->dob);
            $insertStudent->bindParam(':email', $this->email);
            $insertStudent->bindParam(':gender', $this->gender);
            $insertStudent->bindParam(':studentid', $this->studentid);
            $insertStudent->bindParam(':address', $this->address);
            $insertStudent->bindParam(':city', $this->city);
            $insertStudent->bindParam(':state', $this->state);
            $insertStudent->bindParam(':guardian_name', $this->guardian_name);
            $insertStudent->bindParam(':guardian_no', $this->guardian_no);
            $insertStudent->bindParam(':relationship', $this->relationship);
            $insertStudent->execute();
            
        }    
        
        public function DisplayStudents() {
            
            
            try {
                
                $fetchStudent = $this->connect()->prepare("SELECT * FROM student");
                $fetchStudent->execute();
                $students = $fetchStudent->fetchAll();
                
                    return $students;
                
                }
                
            catch (PDOException $e){
                
                echo $e->getMessage;
                
            }
            
            
        }
        
        public function FetchStudent($id) {
            
            if(isset($_POST['id']) && !empty($_POST['id'])){
                
                try {

                        $fetchStudent = $this->connect()->prepare("SELECT surname, firstname, middlename FROM student");
                        $fetchStudent->bindParam(':id', $id);
                        $fetchStudent->execute();
                        $student = $fetchStudent->fetch(PDO::FETCH_ASSOC);
                        
                            return $student;
                        
                    } 
                
                catch (PDOException $e) {
                        
                        echo $e->getMessage;
                        
                    }
        
            }
            
        }
        
        
    }

?>
