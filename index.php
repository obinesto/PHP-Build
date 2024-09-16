<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LESSONS</title>
</head>

<body>
    <?php
    $myName = 'Ade'; //global var
    $myName2 = 'Simbi'; //global var
    $myName3 = 'Junior'; //global var
    $myAge = 20;   // global var
    $myCity = 'Ibadan';  // global var

    echo "there is a man called $myName";
    echo '<br>';
    echo "<br>";
    echo 'he is ' . $myAge . ' years old'; // interpolation
    echo '<br>';
    echo "<br>";
    echo 'he loves eating mangoes';
    echo '<br>';
    echo '<br>';

    // ways of calling a global var into a function
    function myName()
    {
        global  $myName2; // 1st way
        echo "my name is $myName2";
    }
    myName();

    echo "<br>";
    echo "<br>";


    function myName2()
    {
        echo 'my name is' . $GLOBALS['myName3'];  // 2nd way
    }
    myName2();

    echo "<br>";
    echo "<br>";

    function handleIncrease()
    {
        static $num = 1; //static and local variable
        $num++;
    }
    handleIncrease();
    handleIncrease();
    handleIncrease();
    handleIncrease();

    echo "<br>";

    // echo can take multiple arguments
    echo $myName, "<br>", $myAge, "<br>", $myCity;
    echo "<br>";
    echo "<br>";


    // print can onlt take a single argument
    print $myName;
    echo "<br>";
    echo "<br>";


    // learning some php syntax
    $wordPlay = 'I am going to work today';
    echo strlen($wordPlay);
    echo "<br>";
    echo str_word_count($wordPlay);
    echo "<br>";
    echo str_contains($wordPlay, 'work'); //checks if $wordPlay contains the needle 'work'. Returns 1(true) if positive and 0(false) if negtive
    echo "<br>";
    echo str_ends_with($wordPlay, 'going'); //returns true(1) if the passed $haystack($wordPlay) ends with the $needle(going) string or false(0) otherwise.
    echo "<br>";
    echo str_ends_with($wordPlay, 'today');
    echo "<br>";
    echo strpos($wordPlay, 'a'); // 'a' postion is 'index of 2'
    echo "<br>";
    echo str_starts_with($wordPlay, 'I'); // opposite of str_ends_with
    echo "<br>";
    echo strtoupper($wordPlay);
    echo "<br>";
    echo strtolower($wordPlay);
    echo "<br>";
    echo strrev($wordPlay);
    echo "<br>";
    echo "<br>";


    $wordPlay2 = 'Peter is one of the 12';
    echo str_repeat($wordPlay2 . "<br>", 5); // the int. 5 is the no of times we want repitition
    echo "<br>";
    echo str_replace("Peter", "John", $wordPlay2); // replaced Peter with John
    echo "<br>";
    echo trim($wordPlay);
    echo "<br>";
    echo substr($wordPlay2, 0, 4);
    echo "<br>";
    print_r(str_split($wordPlay2, 2));
    echo "<br>";
    echo "<hr>";


    // creating a variable that is conatant
    define("name", "Cyprian Obi");
    define("greeting", "welcome to class");
    const age = 9; // the const can take different data types as its value

    echo name;
    echo "<br>";
    echo age;
    echo "<br>";
    echo greeting;
    echo "<br>";
    echo "<br>";


    echo __FILE__;  // gives the location of the file
    echo "<br>";
    echo "<br>";

    myFunction();
    echo "<br>";


    function myFunction()
    {
        echo __FUNCTION__;
    };
    echo "<br>";
    echo "<br>";


    // comparison operator

    // == Equal
    // === Identical
    // != not equal
    // !== not identical
    // > greater than
    // < less than
    // <= less than or equal
    // >= greater than or equal
    // ++ increment by one
    // -- decrement by one


    // Logical Operators
    // || or
    // && and


    // Contitional Assignment
    // ? :
    // ?? null safety
    const num1 = 1;
    const num2 = 2;
    const  myAge = 18;
    const myGender = "male";

    function validateNumber()
    {
        if (num1 == num2) {
            echo num1 . "and" . num2 . "are the same";
        } else {
            echo "not the same";
        };
    }
    validateNumber();
    echo "<hr>";

    //11-09-24
    function greetTheWorld($name)
    {
        echo "<br>";
        echo "hello $name";
    }
    greetTheWorld(name: "John Doe");
    echo "<br>";

    function getGrade($grade)
    {
        switch ($grade) {
            case "A";
                return "You are very good";
            case "B";
                return "You are good";
            case "C";
                return "Good";
            case "D";
                return "Better luck next time";
            case "E";
                return "Try harder next time";
            case "F";
                return "Fail";
            default;
                return "Your input is not valid";
        }
    }
    echo "<br>";

    echo getGrade(grade: "a");
    $grade = "A";

    echo "<hr>";

    // 13-09-24

    // For loop
    for ($index = 0; $index < 10; $index++) {
        sayHi(index: $index);
    }

    function sayHi($index)
    {
        echo "<br>", $index, "Hi";
    }

    echo "<br>";
    echo "<br>";

    // while loop
    $j = 0;

    while ($j < 0) {
        $J++;
        echo "<br>", "this is a while loop"; // no output cos ($j < 0). Setting $J >= 0 creates an infinite loop
    }

    // Do while loop
    $i = 0;

    do {
        $i++;
        echo "<br>", "Hello $i";
    } while ($i < 10);

    echo "<br>";

    // For each
    $names = ["peter", "lucy", "jackson", "sandra", "kate"];

    foreach ($names as $n) {
        if ($n === "sandra") {
            $getName = $n;
            echo "<br>", $getName;
        }
    }

    echo "<br>";
    echo "<br>";
    // map array

    $me = [
        "name" => "Ademola",   // this is an associative array
        "gender" => "male"
    ];

    print_r(value: $me);

    echo "<br>";
    echo "<br>";

    echo $me["name"];

    echo "<br>";
    echo "<br>";

    $car = [
        "brand" => "toyota",
        "model" => "camry",
        "year" => "2019",
    ];

    print_r($car);
    echo "<br>";
    echo "<br>";

    echo implode(separator: ",", array: $car);
    echo "<br>";
    echo "<br>";

    foreach ($car as $key => $value) {
        echo $key . ":" . $value . "<br>";
    }

    //class-work 1
    $newArray = ["boy", "girl", "trans"];
    function checkArray(array $myArray, $positionInArray)
    {
        for ($w = 0; $w < count(value: $myArray); $w++) {
            if (!$positionInArray === $myArray[$w]) {
                return "$positionInArray is missing in data";
            }
            return "The index of $positionInArray is $w and the value is $positionInArray";
        }
    }

    echo checkArray($newArray, "trans");
    echo "<br>";
    echo "<br>";
    echo checkArray($newArray, "woman");
    echo "<br>";
    echo "<br>";

    //class-work 2
    $num = [4, 9, 8, 7, 3, 9];

    function addArrayElements($num){
        $sum = 0;
        for ($i = 0; $i < count($num); $i++) {
            $sum += $num[$i];
        }
        return $sum;
    }

    $total = addArrayElements($num);
    echo "The sum of the array elements is: " . $total;
    echo "<br>";
    echo "<hr>";

    //class-work 3
    function checkVotingEligibility ($age, $nationality, $years_in_nigeria){
        if($age < 18 && $nationality == "nigeria"){
           return "You're not eligible to vote!";
        }
        if($age >= 18 && $nationality == "nigeria"){
            return "You're not eligible to vote!";
        }
        if($nationality !== "nigeria" && $years_in_nigeria >= 5 && $age >= 25){
            return "You're eligible to vote!";
        }else{
            return "You're not eligible to vote!";
        }
    }

    echo "<br>", checkVotingEligibility(22, "", "7");

    //class-work 4
    function checkLibraryAccess ($level, $surname, $first_name, $is_exco){
        $levelArray = [100,200,300,400];
        for ($i = 0; $i < count($levelArray); $i++){
            if()

        }
    }


    ?>
</body>

</html>