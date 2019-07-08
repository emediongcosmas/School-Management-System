<?php

    require 'connect.model.php';

    class Grade extends Dbh {
        
        private $name;
        private $class;
        private $arm;
        private $subject;
        private $ca1;
        private $exam1;
        private $ca2;
        private $exam2;
        private $total;
        
        public function __construct (
            $name,
            $class,
            $arm,
            $subject,
            $ca1,
            $exam1,
            $ca2,
            $exam2,
            $total
        ) {
            
            $this->name = $name;
            $this->class = $class;
            $this->arm = $arm;
            $this->subject = $subject;
            $this->ca1 = $ca1;
            $this->exam1 = $exam1;
            $this->ca2 = $ca2;
            $this->exam2 = $exam2;
            $this->total = $total;
            
            print_r($subject);
            print_r($ca1);
            print_r($exam1);
            print_r($ca2);
            print_r($exam2);
            print_r($total);
            
        }
        
    }

?>
