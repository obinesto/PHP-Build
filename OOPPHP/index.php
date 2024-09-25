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
