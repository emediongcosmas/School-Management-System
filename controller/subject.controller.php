<?php

include '../model/subject.model.php';
    
    $newSubject = new Subject;
    
    $newSubject->GetSubject();
    $newSubject->GetJss();
    $newSubject->GetSss();
    
    $newSubject->InsertSubject();
    
    
    //  echo $newSubject->jss;