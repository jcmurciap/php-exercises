<?php
    class Persona{
        
        public $name; // propiedad
        private $edad; //accede solo desde la clase
        protected $salary; //accede desde la clase y desde las clases heredadas
        
        public function asignName($newName){ //método
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
    }

    $object = new Persona(); //instancia de clase 
    $object->asignName("Ofelia");

    $object2 = new Persona();
    $object2->asignName("Juan");

    echo $object->name."<br/>";   // Ofelia
    echo $object2->name."<br />";  // Juan
    echo $object->getEdad()."<br />"; //private
    echo $object->getSalary(); //protected

?>