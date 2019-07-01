<?php 

require 'connect.model.php';

class User extends Dbh {
    
    private $email;
    private $password;
    
    public function GetDetails() {
        
        if( isset($_POST['email']) &&
            !empty($_POST['email']) &&
            isset($_POST['password']) &&
            !empty($_POST['password'])) 
        {
            
            $email = $_POST['email'];
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            
            $this->email = $email;
            $this->password = $_POST['password'];
            
        }
        
    }
    
    public function UserValidate() {
        
        if( $this->email === 'admin@admin.com' && 
            $this->password === 'admin001') 
        {
            
            header('Location: ../view/home.php');
            
        }
        
    }
    
    
}