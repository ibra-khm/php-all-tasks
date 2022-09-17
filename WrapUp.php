<?php
echo "<br><br>******** Q1 ******* <br>";

function countR($str){
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == "r") {
            $count++;
        }
    }
    return $count;
}
echo countR("Robert Robertson the 3rd") . "<br>";

echo "<br><br>******** Q2 ******* <br>";

function isLower($str){
    $lowerStr = strtolower($str);
    if ($str == $lowerStr) {
        echo "$str is all lowercase";
    } else {
        echo "$str is not all lowercase";
    }
}
isLower("Heim");
echo "<br>";
isLower("heim");
echo "<br>";

?>
<table style="border: 1px solid black">
    <?php
echo "<br><br>******** Q3 ******* <br>";
      
    $x = 0;
    function row(){
        global $x;
        $x++;
        for ($i = 1; $i <= 10; $i++) {
            echo "<td style='border: 1px solid black'>" . $i * $x . "</td>";
        }
    }

    function table(){
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            row();
            echo "</tr>";
        }
    }

    table();
    ?>

   </table>
   <?php

echo "<br><br>******** Q4 ******* <br>";

function extractBracket($str){
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == "[") {
            $startOfWord = substr($str, $i + 1);
        }
    }
    for ($i = 0; $i < strlen($startOfWord); $i++) {
        if ($startOfWord[$i] == "]") {
            echo substr($startOfWord, 0, $i) . "<br>";
        }
    }
}

extractBracket('The quick brown [fox] in the forrest.');

extractBracket('[fox] in the forrest.');


echo "<br><br>******** Q5 ******* DNF <br>";

class MyCalculator{
    private $num1;
    private $num2;

    public function __construct($num1, $num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function add(){
        return $this->num1 + $this->num2;
    }

    public function multiply(){
        return $this->num1 * $this->num2;
    }

    public function substract(){
        return $this->num1 - $this->num2;
    }

    public function divide(){
        return $this->num1 / $this->num2;
    }
}

$mycalc = new MyCalculator(12, 6);
echo $mycalc->add(); // Displays 18
echo "<br>";
echo $mycalc->multiply(); // Displays 72












?>
