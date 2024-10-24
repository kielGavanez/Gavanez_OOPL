<?php
    Class Persons{
        private $name;
        private $address;

        public function __construct($name, $address){
            $this->name = $name;
            $this->address = $address;
        }

        public function getName(){
            return $this->name;
        }

        public function getAddress(){
            return $this->address;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function setAddress($address){
            $this->address;
        }
    }

    Class Employees extends Persons{
        private $employeeId;
        

        public function __construct($name, $address, $employeeId){
            parent:: __construct($name, $address);
                $this->employeeId = $employeeId;
        }

        public function work(){
            echo "Employee is working. ";
        }
    }

    Class Managers extends Employees{
        private $teamSize;

        public function __construct($name, $address, $employeeId, $teamSize){
            parent:: __construct($name, $address, $employeeId);
                $this->teamSize = $teamSize;
        }

        public function manageTeam(){
            echo '<br>';
            echo "Manager is managing a team size of {$this->teamSize} members";
        }
    }

    $manager1 = new Managers('Juan','Manila','99', 4);
    $manager1->work();
    $manager1->manageTeam();

?>