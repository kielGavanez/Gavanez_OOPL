<?php
    class Animals{
        public $type = "";
        public $name = "";
        function sound($param1){
            
            echo "<br>Name: $this->name</br>";
            echo "<br>Type: $this->type</br>";
            echo "<br>Sound: $param1</br>";
            echo "---------------------------------";
        }

    }

    $snek = new Animals;
        $snek->name = "Burmese Python";
        $snek->type = "Land";
        $snek->sound("Sssssssssssssssssss");

    $dog = new Animals;
        $dog->name = "German Shepherd";
        $dog->type = "Land";
        $dog->sound("woof woof");

    $pish = new Animals;
        $pish->name = "Galunggong";
        $pish->type = "Water";
        $pish->sound("glop glop glop");
    

?>