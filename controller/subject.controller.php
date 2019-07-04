<?php

include '../model/subject.model.php';
    
    if($_POST['action'] == 'addsubject'){
        
        $newSubject = new Subject;
    
            $newSubject->GetSubject();
            $newSubject->GetJss();
            $newSubject->GetSss();
            
                $newSubject->InsertSubject();
                
                    header('Location: ../view/viewsubject.php');
       
    } elseif ($_POST['action'] == 'deletesubject') {
        
        $id = $_POST['id'];
        
            $deleteSubject = new Subject;
            $deleteSubject->DeleteSubject($id);
        
                header('Location: ../view/viewsubject.php');
        
    } elseif ($_POST['action'] == 'updatesubject') {
        
        $id = $_POST['id'];
        
            $updateSubject = new Subject;
            $updateSubject->GetSubject();
            $updateSubject->GetJss();
            $updateSubject->GetSss();
            $updateSubject->UpdateSubject($id);
        
                header('Location: ../view/viewsubject.php');
        
    } 
    
    