<?php

require '../model/connect.model.php';

class Teacher extends Dbh {
    
    private $surname;
    private $firstname;
    private $middlename;
    private $email;
    private $gender;
    private $phone;
    private $address;
    private $city;
    private $state;
    
    public function setSurname($surname) {
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if(isset($_POST['surname']) && !empty($_POST['surname'])) {
            
                $this->surname = $surname;
            
                return htmlentities($surname);
                
            }
            
        }
        
    }
    
    public function setFirstname($firstname) {
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
             if(isset($_POST['firstname']) && !empty($_POST['firstname'])) {
            
                $this->firstname = $firstname;
            
                return htmlentities($firstname);
                
            }
            
        }
        
    }
    
    public function setMiddlename($middlename) {
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if(isset($_POST['middlename']) && !empty($_POST['middlename'])) {
            
                $this->middlename = $middlename;
            
                return htmlentities($middlename);
                
            }
            
        }
        
    }
    
    public function setEmail($email) {
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if(isset($_POST['email']) && !empty($_POST['email'])) {
            
                $this->email = $email;
            
                return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
                
            }
            
        }
        
    }
    
    public function setGender($gender) {
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if(isset($_POST['gender']) && !empty($_POST['gender'])) {
            
                $this->gender = $gender;
            
                return $gender;
                
            }
            
        }
        
    }
    
    public function setPhone($phone) {
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if(isset($_POST['phone']) && !empty($_POST['phone'])) {
            
                $this->phone = $phone;
            
                return htmlspecialchars($phone);
                
            }
            
        }
        
    }
    
    public function setAddress($address) {
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if(isset($_POST['address']) && !empty($_POST['address'])) {
            
                $this->address = $address;
            
                return htmlentities($address);
                
            }
            
        }
        
    }
    
    public function setCity($city) {
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if(isset($_POST['city']) && !empty($_POST['city'])) {
            
                $this->city = $city;
            
                return htmlentities($city);
                
            }
            
        }
        
    }
    
    public function setState($state) {
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if(isset($_POST['state']) && !empty($_POST['state'])) {
            
                $this->state = $state;
            
                return htmlentities($state);
                
            }
            
        }
        
    }
    
    public function newTeacher() {
        
       $insertTeacher = $this->connect()->prepare("INSERT INTO teacher (surname, firstname, middlename, email, gender, phone, address, city, state) VALUES ( :surname, :firstname, :middlename, :email, :gender, :phone, :address, :city, :state )");
       
       $insertTeacher->bindParam(':surname', $this->surname);
       $insertTeacher->bindParam(':firstname', $this->firstname);
       $insertTeacher->bindParam(':middlename', $this->middlename);
       $insertTeacher->bindParam(':email', $this->email); 
       $insertTeacher->bindParam(':gender', $this->gender);
       $insertTeacher->bindParam(':phone', $this->phone);
       $insertTeacher->bindParam(':address', $this->address);
       $insertTeacher->bindParam(':city', $this->city);
       $insertTeacher->bindParam(':state', $this->state);
       $insertTeacher->execute();
        
    }    
    
}

?>
