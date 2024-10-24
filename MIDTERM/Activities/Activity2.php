<?php
interface Benefits{
    function Pagibig();
    function SSS();
    function PhilHealth();
    function Other($otherDeduction);
}
class Employee implements Benefits {
    protected $name;
    protected $salary;
    protected $position;
    protected $pagibig;
    protected $sss;
    protected $philhealth;

    public function __construct($n, $s, $p, $pagibig, $sss, $philhealth){
        $this->name = $n;
        $this->salary = $s;
        $this->position = $p;
        $this->pagibig = $pagibig;
        $this->sss = $sss;
        $this->philhealth = $philhealth;
    }
    public function Pagibig(){
        return $this->salary - $this->pagibig;
    }
    public function SSS(){
        return $this->Pagibig() - $this->sss;
    }
    public function PhilHealth(){
        return $this->SSS() - $this->philhealth;
    }
    public function Other($otherDeduction){
        return $this->PhilHealth() - $otherDeduction;
    }
    public function display_employee_info($otherDeduction){
        echo
<<<HTML
    <table border= 1px black>
            <thead>
                <th>Info</th>
                <th>Deduction</th>
                <th>Data</th>
            </thead>
            <tbody>
                <tr>
                    <td>Employee Name</td>
                    <td></td>
                    <td>{$this->name}</td>
                </tr>
                <tr>
                    <td>Position</td>
                    <td></td>
                    <td>{$this->position}</td>
                </tr>
                <tr>
                    <td>Salary</td>
                    <td></td>
                    <td>{$this->salary}</td>
                </tr>
                <tr>
                    <td>Pagibig Contribution</td>
                    <td>{$this->pagibig}</td>
                    <td>{$this->Pagibig()}</td>
                </tr>
                <tr>
                    <td>SSS Contribution</td>
                    <td>{$this->sss}</td>
                    <td>{$this->SSS()}</td>
                </tr>
                <tr>
                    <td>PhilHealth Contribution</td>
                    <td>{$this->philhealth}</td>
                    <td>{$this->PhilHealth()}</td>
                </tr>
                <tr>
                    <td>Other Deduction</td>
                    <td>$otherDeduction</td>
                    <td>{$this->Other($otherDeduction)}</td>
                </tr>
                <tr>
                    <td>Remain</td>
                    <td></td>
                    <td>{$this->Other($otherDeduction)}</td>
                </tr>
            </tbody>
    </table> 
HTML;
        // echo "Employee Name: {$this->name} <br>";
        // echo "Position: {$this->position} <br>";
        // echo "Salary {$this->salary} <br>";
        // echo "Pagibig Deduction {$this->Pagibig()} <br>";
        // echo "SSS Deduction {$this->SSS()}<br>";
        // echo "Philhealth Deduction {$this->PhilHealth()} <br>";
        // echo "Other Deduction {$this->Other($otherDeduction)} <br>";
    }
}

class Executive extends Employee{
    public function __contruct($n, $s, $p, $pagibig, $sss, $philhealth){

        Employee::__contruct($n, $s, $p, $pagibig, $sss, $philhealth);
    }
    public function Pagibig(){
        return $this->salary - $this->pagibig;
    }
    public function SSS(){
        return $this->Pagibig() - $this->sss;
    }
    public function PhilHealth(){
        return $this->SSS() - $this->philhealth;
    }
    public function Other($otherDeduction){
        return $this->PhilHealth() - $otherDeduction;
    }
    public function display_employee_info($otherDeduction){
    echo
<<<HTML
    <table border= 1px black>
            <thead>
                <th>Info</th>
                <th>Deduction</th>
                <th>Data</th>
            </thead>
            <tbody>
                <tr>
                    <td>Employee Name</td>
                    <td></td>
                    <td>{$this->name}</td>
                </tr>
                <tr>
                    <td>Position</td>
                    <td></td>
                    <td>{$this->position}</td>
                </tr>
                <tr>
                    <td>Salary</td>
                    <td></td>
                    <td>{$this->salary}</td>
                </tr>
                <tr>
                    <td>Pagibig Contribution</td>
                    <td>{$this->pagibig}</td>
                    <td>{$this->Pagibig()}</td>
                </tr>
                <tr>
                    <td>SSS Contribution</td>
                    <td>{$this->sss}</td>
                    <td>{$this->SSS()}</td>
                </tr>
                <tr>
                    <td>PhilHealth Contribution</td>
                    <td>{$this->philhealth}</td>
                    <td>{$this->PhilHealth()}</td>
                </tr>
                <tr>
                    <td>Other Deduction</td>
                    <td>$otherDeduction</td>
                    <td>{$this->Other($otherDeduction)}</td>
                </tr>
                <tr>
                    <td>Remain</td>
                    <td></td>
                    <td>{$this->Other($otherDeduction)}</td>
                </tr>
            </tbody>
    </table> 
HTML;
        // echo "Employee Name: {$this->name} <br>";
        // echo "Position: {$this->position} <br>";
        // echo "Salary {$this->salary} <br>";
        // echo "Pagibig Deduction {$this->Pagibig()} <br>";
        // echo "SSS Deduction {$this->SSS()}<br>";
        // echo "Philhealth Deduction {$this->PhilHealth()} <br>";
        // echo "Other Deduction {$this->Other($otherDeduction)} <br>";
    }
}

$employee = new Employee("Juan Miguel Cayabyab", 13000, "Staff", 1000, 2000, 500);
$employee->display_employee_info(3000);

$executive = new Executive("Juliana Camille Perez", 23000, "Manager", 1000*2, 2000*2, 500*2);
$executive->display_employee_info(3000*2);
?>