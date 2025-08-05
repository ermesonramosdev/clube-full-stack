<?php 
    
    include './teste.php';
    echo "$name <br><hr>";
    

    //Strings
    $name1 = "Ermeson Ramos de Lima";
    echo gettype($name1), " $name1 <br><hr>";
    

    //Number
    $number = 1;
    echo gettype($number), " $number <br><hr>";

    //Arrays
    $myArray = [1, 2, 3, "Teste"];
    foreach ($myArray as $item) {
        echo gettype($myArray), " $item <br>";
    }
    echo "<hr>";

    //Objects
    class Person {
        public $name;
        public $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function __toString() {
            return "Nome:$this->name, Idade:$this->age <hr>";
        }
    }

    $person = new Person("Ermeson", 17);
    echo gettype($person),"  ", $person;

    //Null
    $myNull = null;
    echo gettype($myNull), $myNull;