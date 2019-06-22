<?php

    include '../model/grade.model.php';
    
        $name   = $_POST['name'];
        $class  = $_POST['class'];
        $arm    = $_POST['arm'];
        $ca1    = $_POST['ca1'];
        $exam1  = $_POST['exam1'];
        $ca2    = $_POST['ca2'];
        $exam2  = $_POST['exam2'];
        $total  = $_POST['total'];
    
    $grade = new Grade($name, $class, $arm, $ca1, $exam1, $ca2, $exam2, $total);