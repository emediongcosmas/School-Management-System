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
        
        public function getName($name) {
             
            $this->name = $name;
            return $name;
            
        }
        
    }

?>
