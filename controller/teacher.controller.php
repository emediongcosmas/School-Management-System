<?php 

    include '../model/teacher.model.php';

    $surname    = $_POST['surname'];
    $firstname  = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $email      = $_POST['email'];
    $gender     = $_POST['gender'];
    $phone      = $_POST['phone'];
    $address    = $_POST['address'];
    $city       = $_POST['city'];
    $state      = $_POST['state'];
    
    // Instantiate the teacher class
    $teacher = new Teacher;
    
    // Set the properties from the input
    $teacher->setSurname($surname);
    $teacher->setFirstname($firstname);
    $teacher->setMiddlename($middlename);
    $teacher->setEmail($email);
    $teacher->setGender($gender);
    $teacher->setPhone($phone);
    $teacher->setAddress($address);
    $teacher->setCity($city);
    $teacher->setState($state);
    
    // Add new teacher to the database
    $teacher->newTeacher();
    
    header('Location: ../view/teacher.php');
    
?>