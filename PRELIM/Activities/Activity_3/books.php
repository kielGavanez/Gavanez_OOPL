<?php
    require('authors.php');

    class Books extends Authors{
        public $books;

        public function connect(){
            Authors:: add($authors);

        }
    }
?>