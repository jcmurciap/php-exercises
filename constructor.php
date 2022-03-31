<?php
    class Person{
        
        public $name; // propiedad
        private $edad; //accede solo desde la clase
        protected $salary; //accede desde la clase y desde las clases heredadas
        
        function __construct($newName){
            $this->name = $newName;
        }

        public function getEdad(){
            $this->edad = 28;
            return $this->edad;
        }
        
        public function getSalary(){
            $this->salary = 1;
            return $this->salary;
        }

        public function getName(){
            echo "Hello, I'm ".$this->name;
        }
    }

    $object = new Person("Ofelia");
    $object->getName(); 
?>