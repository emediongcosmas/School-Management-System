<?php 

    include '../model/student.model.php';
    
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
    
    // Add new student to the database
    $student->newStudent();
    
    header('Location: ../view/student.php');
    
    
?>