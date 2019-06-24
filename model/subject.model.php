<?php

    require 'connect.model.php';

    class Subject extends Dbh {
        
        private $subject;
        private $jss;
        private $sss;
        
        public function __construct(
            string $subject, 
            int $jss, 
            int $sss
        ){
            $this->subject = $subject;
            $this->css = $jss;
            $this->jss = $sss;
        }
        
        public function GetSubject() {
            
            return $this->subject;
            
        }
        
        public function GetJss() {
            
            return $this->jss;
            
        }
        
        public function GetSss() {
            
            return $this->css;
            
        }
        
    }