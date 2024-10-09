<?php

class GodsImage{
    public $name;
    public $gender;
    private $age;

    const description = "God is good";

    public function setAge($userAge){
        $this->age = $userAge;
    }
    public function getAge(){
        return $this->age;
    }

    public function __construct($username, $usergender, $userage){
        $this->name = $username;
        $this->gender = $usergender;
        $this->age = $userage;
    }

    public function __destruct(){
        echo "<br>", "Done";
    }
}

$dbest = new GodsImage("Dimeji", "Male", 86 );

echo $dbest->name;
echo"<br>";
echo $dbest->getAge();
echo "<br>";
echo GodsImage::description;
echo "<br>";
echo "<hr>";

class isHuman {
    public $name;
    public $gender;
    private $age;

    public function __construct($isName, $isGender, $isAge) {
        $this->name = $isName;
        $this->gender = $isGender;
        $this->age = $isAge;
    }

    public function handleVoteEligibility() {
        if ($this->name == "" || $this->gender == "" || $this->age <= 0) {
            return "field cannot be empty";
        } else {
            if ($this->age >= 18) {
                return "eligible to vote" ."<br>". $this->name."<br>". $this->gender;
            } else {
                return "not eligible to vote" ."<br>". $this->name."<br>". $this->gender;
            }
        }
    }
}

$newparam = new isHuman("Ade", "male", 20);
echo "<br>", $newparam->handleVoteEligibility();
echo "<br>";

$newparam = new isHuman("Kunle", "", 20);
echo "<br>", $newparam->handleVoteEligibility();
echo "<br>";

$newparam = new isHuman("Felix", "male", 0);
echo "<br>", $newparam->handleVoteEligibility();
echo "<br>";

$newparam = new isHuman("Lucy", "female", 13);
echo "<br>", $newparam->handleVoteEligibility();
echo "<br>";

$newparam = new isHuman("Bola", "female", 19);
echo "<br>", $newparam->handleVoteEligibility();
echo "<br>";

//27-09-2024

class GodsImage2{ 
    public function hasPower(){
        echo "<br>". "You have power";
    }

    public function hasSpirit(){
        echo "<br>"."You have spirit";
    }
}

class Human extends GodsImage2 {
    public $name;
    private $age;
    protected $gender;

    public function __construct($Isname, $Isage, $Isgender) {
        $this->name = $Isname;
        $this->age = $Isage;
        $this->gender = $Isgender;
    }

    public function hasPower() {
        echo "<br>" . "Not using power";
    }

    public function canVote() {
        if ($this->getAge() >= 18) {
            echo "<br>" . "You can vote";
        } else {
            echo "<br>" . "You cannot vote";
        }
    }

    public function reProduce() {
        echo "<br>" . "I can reproduce";
    }

    private function getAge() {
        return $this->age;
    }
}

$human = new Human("John", 20, "male");
$human->canVote(); // Outputs: You can vote

$youngHuman = new Human("Jane", 16, "female");
$youngHuman->canVote(); // Outputs: You cannot vote


//abstract classes can not be initialized. we use them to unite our classes
//we use 'extends' for abstract and 'implements' for interface
//normal classes are mandated to take all properties of interface based classes and also complete all uncompleted functions
//for abstract classes, normal classes can choose the properties/functions they want to import from abstract classes

abstract class WasteProduct{
    public function dispose(){
        echo "<br>"."This class disposes waste product";
    }
}


class Human2 extends WasteProduct{
    public $name;
    private $age;
    protected $gender;

}