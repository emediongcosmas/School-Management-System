<?php

    require 'connect.model.php';

    class Grade extends Dbh {
        
        private $name;
        private $class;
        private $arm;
        private $ca1;
        private $exam1;
        private $ca2;
        private $exam2;
        private $total;
        
        public function __construct (
            string $name,
            string $class,
            string $arm,
            int $ca1,
            int $exam1,
            int $ca2,
            int $exam2,
            int $total
        ) {
            
            $this->name = $name;
            $this->class = $class;
            $this->arm = $arm;
            $this->ca1 = $ca1;
            $this->exam1 = $exam1;
            $this->ca2 = $ca2;
            $this->exam2 = $exam2;
            $this->total = $total;
            
        }
        
    }

?>
