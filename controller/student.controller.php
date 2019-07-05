<?php 

    include '../model/student.model.php';
    
    if (isset($_POST['surname']) && 
        isset($_POST['firstname']) && 
        isset($_POST['middlename']) && 
        isset($_POST['dob']) && 
        isset($_POST['email']) && 
        isset($_POST['gender']) && 
        isset($_POST['studentid']) && 
        isset($_POST['address']) && 
        isset($_POST['city']) && 
        isset($_POST['state']) && 
        isset($_POST['guardian_name']) && 
        isset($_POST['guardian_no']) && 
        isset($_POST['relationship']) && 
        !empty($_POST['surname']) && 
        !empty($_POST['firstname']) && 
        !empty($_POST['middlename']) && 
        !empty($_POST['dob']) && 
        !empty($_POST['email']) && 
        !empty($_POST['gender']) && 
        !empty($_POST['studentid']) && 
        !empty($_POST['address']) && 
        !empty($_POST['city']) && 
        !empty($_POST['state']) && 
        !empty($_POST['guardian_name']) && 
        !empty($_POST['guardian_no']) && 
        !empty($_POST['relationship']) ) 
    {
        
        $surname        = $_POST['surname'];
        $firstname      = $_POST['firstname'];
        $middlename     = $_POST['middlename'];
        $dob            = $_POST['dob'];
        $email          = $_POST['email'];
        $gender         = $_POST['gender'];
        $studentid      = $_POST['studentid'];
        $address        = $_POST['address'];
        $city           = $_POST['city'];
        $state          = $_POST['state'];
        $guardian_name  = $_POST['guardian_name'];
        $guardian_no    = $_POST['guardian_no'];
        $relationship   = $_POST['relationship'];
        
            // Instantiate the Student class
            $student = new Student;
            
                // Set the properties from the input
                $student->setSurname($surname);
                $student->setFirstname($firstname);
                $student->setMiddlename($middlename);
                $student->setDob($dob);
                $student->setEmail($email);
                $student->setGender($gender);
                $student->setStudentid($studentid);
                $student->setAddress($address);
                $student->setCity($city);
                $student->setState($state);
                $student->setGuardianName($guardian_name);
                $student->setGuardianNo($guardian_no);
                $student->setGuardianName($guardian_name);
                $student->setRelationship($relationship);
                
                // Verify if the student has been registered already
                $student->VerifyStudentReg();
            
                // Add new student to the database
                $student->InsertStudent();
                
                header('Location: ../view/viewstudent.php');
        
        
    } else {
        
        echo 'Please fill all fields';
        
    }
    
   
    
?>