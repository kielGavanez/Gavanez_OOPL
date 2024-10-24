<?php
    class Authors{
        public $authors = array();

        public function add($name, $penName, $address, $licenseNo,$books){
            array_push($this->authors,array($name, $penName, $address, $licenseNo,$books));         
        }
        public function display(){
            foreach ($this->authors as $authors => $a) {
                echo
<<<HTML
<tr>
    <td>$a[0]</td>
    <td>$a[1]</td>
    <td>$a[2]</td>
    <td>$a[3]</td>
    <td>$a[4]</td>
</tr>
HTML;
            }
        }
        public function edit($name, $penName, $address, $licenseNo,$books){
            $this->authors[0][0] = $name;
            $this->authors[0][1] = $penName;
            $this->authors[0][2] = $address;
            $this->authors[0][3] = $licenseNo;
            $this->authors[0][4] = $books;            
        }
        public function remove(){
            unset ($this->author[0]);
        }
    }

    echo "<table border='1'><thead><th>Name</th><th>Pen Name</th><th>Address</th><th>License Number</th><th>Books</th>"
?>