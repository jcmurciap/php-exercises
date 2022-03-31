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

        public function printNameEdadSalary(){
            $this->salary = "3 millones";
            $this->edad = 28;
            echo "Name: ".$this->name." "."Edad: ".$this->edad." "."Salary: ".$this->salary."<br />";
        }

    }

    class Trabajador extends Persona{
        public $role;
        public function getRole($rol){
            $this->role = $rol;
            echo "El rol es: ".$rol;

        }
    }

    $object = new Persona(); //instancia de clase 
    $object->asignName("Ofelia");

    $camilo = new Trabajador();
    $camilo->asignName("Camilo");
    $camilo->printNameEdadSalary();
    $camilo->getRole("Developer");
    



    

?>