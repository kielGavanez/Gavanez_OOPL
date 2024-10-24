<?php
    Class Authors{
        public $author = array();
        
        public function add($name,$pen_name,$address,$license_number,$books){
            array_push($this->author,array($name,$pen_name,$address,$license_number,$books));
        }

        public function display(){
            foreach ($this->author as $key => $value) {
                echo 
<<<HTML
<tr>
    <td>{$value[0]}</td>
    <td>{$value[1]}</td>
    <td>{$value[2]}</td>
    <td>{$value[3]}</td>
    <td>{$value[4]}</td>
</tr>
HTML;

            }
        }
        public function remove(){
            unset($this->author[0]);
        }
        public function edit($name,$pen_name,$address,$license_number,$books){
            $this->author[0][0] = $name;
            $this->author[0][1] = $pen_name;
            $this->author[0][2] = $address;
            $this->author[0][3] = $license_number;
            $this->author[0][4] = $books;
        }
    
    }
    
    echo"<table border='1'><thead><th>Name</th><th>Pen Name</th><th>Address</th><th>License Number</th><th>Books</th>"
    
    


?>

