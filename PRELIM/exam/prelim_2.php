<?php
    Class Animals{
        private $speciesName;
        private $habitat;

        public function __construct($speciesName, $habitat){
            $this->speciesName = $speciesName;
            $this->habitat = $habitat;
        }

        public function makeSound(){
            echo "Animal make sound. ";
            echo "<br>";
        }
    }

    Class Mammals extends Animals{
        private $legCount;
        

        public function __construct($speciesName, $habitat, $legCount){
            parent:: __construct($speciesName, $habitat);
                $this->legCount = $legCount;
        }

        public function walk(){
            echo "Mammal is walking on {$this->legCount} legs. ";
        }
    }

    Class Humans extends Mammals{
        private $languageSpoken;

        public function __construct($speciesName, $habitat, $legCount, $languageSpoken){
            parent:: __construct($speciesName, $habitat, $legCount);
                $this->languageSpoken = $languageSpoken;
        }

        public function speak(){
            echo '<br>';
            echo "Human is speaking {$this->languageSpoken}.";
        }
    }

    $Human1 = new Humans('Homo Erectus','Maharlika',99,'Russian');
    $Human1->makeSound();
    $Human1->walk();
    $Human1->speak();


?>