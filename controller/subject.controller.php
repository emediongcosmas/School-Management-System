<?php

include '../model/subject.model.php';
    
    if($_POST['action'] == 'addsubject'){
        
        $newSubject = new Subject;
    
            $newSubject->GetSubject();
            $newSubject->GetJss();
            $newSubject->GetSss();
            
                $newSubject->InsertSubject();
                
                    header('Location: ../view/viewsubject.php');
        
    } elseif ($_POST['action'] == 'editsubject') {
       
        $id = $_POST['id'];
        
            $editSubject = new Subject;

                $editSubject->FetchSubject($id);
            
            
        
    } elseif ($_POST['action'] == 'deletesubject') {
        
        
        
    } 
    
    