<?php

interface Animals{
    function makeSound();
}

class Dog implements Animals{
    function makeSound(){
        echo 'woof woof';
    }
}

class Cat implements Animals{
    function makeSound(){
        echo 'meow meow';
    }
}

class Cow implements Animals{
    function makeSound(){
        echo 'moo moo';
    }
}

class Zoo{

    function displayAnimals($animalSounds){
        foreach ($animalSounds as $sound) {
            echo $sound->makeSound().'<br>';
        }
    }
}

$animalSounds = [new Dog, new Cat, new Cow];
$animal = new Zoo();
$animal->displayAnimals($animalSounds);

?>