<?php

echo "<br>******** Q1 ******* <br>";
    $year = 1900;

    if(($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0)){
        echo("$year is a Leap Year");
    } else {
        echo("$year is NOT a Leap Year");
    }

echo "<br><br>******** Q2 ******* <br>";

    $temp = 19;
    if($temp < 20){
        echo"we are in winter";
    } else{
        echo"It is Summertime!";
    }

echo "<br><br>******** Q3 ******* <br>";

    $firstNum = 2;
    $secondNum = 3;
    if($firstNum == $secondNum){
        echo(($firstNum + $secondNum)*3);
    } else{
        echo("Result is: ".$firstNum + $secondNum);
    }


echo "<br><br>******** Q4 ******* <br>";


    $firstNum = 16;
    $secondNum = 14;
    if($firstNum + $secondNum == 30){
        echo($firstNum + $secondNum);
    } else{
        echo "false";
    }

echo "<br><br>******** Q5 ******* <br>";

    $num =  12;
    if($num % 3 == 0){
        echo"$num is a multiple of 3"; 
    } else{
        echo"$num is NOT a multiple of 3";
    }

echo "<br><br>******** Q6 ******* <br>";
 
    $num = 19;
    if($num >= 20 && $num <= 50){
        echo"True: $num is between 20 & 50";
    }else{
        echo"False: $num is NOT between 20 & 50";
    }


echo "<br><br>******** Q7 ******* <br>";

    $num1 = 9;
    $num2 = 7;
    $num3 = 8;
    if($num1 > $num2 && $num1 > $num3){
        echo($num1);
    } else{
        if($num2 > $num1 && $num2 > $num3){
            echo($num2);
        }else{
            echo($num3);
        }
    }


echo "<br><br>******** Q8 ******* <br>";
    $firstCost = 2.50;
    $secondCost = 5.00;
    $thirdCost = 6.20;
    $forthCost = 7.50;
    
    $units = 70;

    if($units <= 50){
        $bill = $units * $firstCost;
    }elseif($units > 50 && $units <= 100){
        $initial = 50 * $firstCost;
        $unitsRemain = $units - 50;
        $bill = $initial + ($unitsRemain * $secondCost); 
        
    }elseif($units > 100 && $units <= 200){
        $initial = (50 * 3.5) + (100 * $secondCost);
        $unitsRemain = $units -150;
        $bill = $initial + ($unitsRemain * $thirdCost);
    }else{
        $initial = (50* 3.5) + (100 * $secondCost) + (100 * $thirdCost);
        $unitsRemain = $units - 250;
        $bill = $initial + ($unitsRemain * $forthCost);    
    }
    echo("bill is: $bill");
    
echo "<br><br>******** Q9 ******* <br>";
   
$firstNum = (6);
    $secondNum = (3);
    $operator = ("/");
    $result = ('');
    if(is_numeric($firstNum) && is_numeric($secondNum)){
        switch($operator){
            case "+":
                $result = $firstNum + $secondNum;
                break;
            case "-":
                $result = $firstNum - $secondNum;
                break;
            case "*":
                $result = $firstNum * $secondNum;
                break;
            case "/":
                $result = $firstNum / $secondNum;

        }
    }
    echo($result);
    

echo "<br><br>******** Q10 ******* <br>";
    $age = 16;
    if($age >= 18){
        echo "$age Is Eligible to Vote";
    }else{
        echo "$age Is NOT Eligible to Vote";
    }

    
echo "<br><br>******** Q11 ******* <br>";
    $num = 12;
    if($num < 0){
        echo("$num is Negative");
    } elseif($num > 0){
        echo("$num is Positive");
    } else{
        echo("Number is Zero");
    }

echo "<br><br>******** Q12 ******* <br>";
   $marks = array(60, 86, 95, 63, 55, 74, 79, 62, 50);
   $sum = 0;
   
   foreach ($marks as $val) {
       $sum += $val;
   }
   $avg = $sum / count($marks);
   if ($avg < 60)
       echo "Grade is: F";
   elseif ($avg < 70)
       echo "Grade is: D";
   elseif ($avg < 80)
       echo "Grade is: C";
   elseif ($avg < 90)
       echo "Grade is: B";
   else
       echo "Grade is: A";
   

    
   echo"<br><br>**************************** Arrays ****************************";

   echo "<br><br><br>******** Q1 ******* <br>";   
   $colors = array('red', 'green', 'white');
   echo ("The memory of that scene for me is like a frame of film forever frozen at 
        that moment: the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. 
        The new president and his first lady. - Richard M. Nixon");


echo "<br><br>******** Q2 ******* <br>";

   $colors = array('white', 'green', 'red');
   foreach($colors as $color){
        echo("$color ");
   }
   sort($colors);
   echo"<ul>";
   foreach($colors as $x){
        echo"<li>$x</li>";
   }
   echo"</ul>";
    
echo "<br><br>******** Q3 ******* <br>";   
   $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", 
    "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
    "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
    "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

    foreach($cities as $country => $capital){
            echo "The Capital of $country is $capital <br>";
    }


echo "<br><br>******** Q4 ******* <br>";
    $color = array (4 => 'white', 6 => 'green', 11=> 'red');
    echo reset($color);


echo "<br><br>******** Q5 ******* <br>";
    $original = array('1', '2', '3', '4', '5');

    function arrAdd($ele, $i){
        $numArr = [1,2,3,4,5];
        array_splice($numArr, $i, 0, $ele);
        return $numArr;
    }
    print_r(arrAdd("$", 3));


echo "<br><br>******** Q6 ******* <br>";
    $fruits = array ("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
    asort ($fruits);
    foreach ($fruits as $key => $val){
        echo "$key = $val\n <br>";
    }

echo "<br><br>******** Q7 ******* <br>"; 
    
    $temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    
    function tempAvg($arr){
        $average = array_sum($arr) / count($arr); 
        sort($arr);
        $newArr = array_unique($arr);
        sort($newArr);
        echo ("Average Temperature is: $average <br>");
        echo ("List of seven lowest Temperature is: $newArr[0], $newArr[1], $newArr[2], $newArr[3], $newArr[4] <br>");
        rsort($newArr);
        echo ("List of seven highest Temperature is: $newArr[0], $newArr[1], $newArr[2], $newArr[3], $newArr[4] <br>");
    }
    tempAvg($temp);


echo "<br><br>******** Q8 ******* <br>";
    
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    print_r(array_merge($array1,$array2));

echo "<br><br>******** Q9 ******* <br>";

    $colors = array("red","blue", "white","yellow");
    $colors = array_flip($colors);

    $colors = array_change_key_case($colors, CASE_UPPER);

    $colors = array_flip($colors);

    print_r($colors);

echo "<br><br>******** Q10 ******* <br>";

    
    $colors = array("RED","BLUE", "WHITE","YELLOW");;
    $colors = array_flip($colors);

    $colors = array_change_key_case($colors, CASE_LOWER);

    $colors = array_flip($colors);

    print_r($colors);

    echo "<br><br>******** Q11 ******* <br>";


    echo "<br><br>******** Q12 ******* <br>";

    $words =  array("abcd","abc","de","hjjj","g","wer");

    $length = array_map('strlen', $words);

    echo "The shortest array length is ".min($length);
    echo "he longest array length is ".max($length);


echo "<br><br>******** Q13 ******* <br>";

$num = range(11, 20);
shuffle($num);
for ($i = 0; $i<10; $i++){
    echo $num[$i].' ';
}


echo "<br><br>******** Q14 ******* <br>";

$num = array( 2, 0, 10, 12, 6);

function in_array_int_len($arr){
        $lower = 0;
        $current = 0;
        foreach($arr as $item){
          $current = $item;
          if($current != 0 and $lower == 0){

            $lower = $current;
          }elseif($current != 0 and $lower != 0 and $current < $lower){
            $lower = $current;
          }
        }
        echo "The lowest number is : $lower <br>";
      }
      in_array_int_len($num);

      

      
echo"<br><br>**************************** Loops ****************************";


echo "<br><br>******** Q1 ******* <br>";

for($i=1; $i<=10; $i++){
    if ($i < 10){
        echo "$i-";
    }else{
        echo "$i";
    }
}

echo "<br><br>******** Q2 ******* <br>";

$sum = 0;

for($i=1; $i<=30; $i++){
    $sum +=$i;
}
echo "The total number is $sum";

echo "<br><br>******** Q3 ******* DNF <br>";

$letters = array("A", "B", "C", "D", "E");

for ($i = 0; $i < 5; $i++){
    for($y = 4; $y > $i; $y--){
        echo $letters[0]."‏‏‎ ‎‏‏‎ ‎";
    }
    for ($x = 0; $x <= $i; $x++){
        echo $letters[$i]."‏‏‎ ‎‏‏‎ ‎";
    }
    echo "<br>";
}


echo "<br><br>******** Q4 ******* DNF <br>";

$number = array(1, 2, 3, 4, 5);

for ($i = 0; $i < 5; $i++){
    for($y = 4; $y > $i; $y--){
        echo $number[0]."‏‏‎ ‎‏‏‎ ‎";
    }
    for ($x = 0; $x <= $i; $x++){
        echo $number[$i]."‏‏‎ ‎‏‏‎ ‎";
    }
    echo "<br>";
}


echo "<br><br>******** Q5 ******* DNF <br>";

$nums = [1, 2, 3, 4, 5];
for($i=0; $i<5; $i++){
    for($x=0; $x < $i; $x++){
        echo "0 ";
    }
    echo $nums[$i]." ";
    for($y=4; $y > $i; $y--){
        echo 0 . " ";
    }
    echo "<br>";
}



echo "<br><br>******** Q6 ******* DNF <br>";


$num = 5;
$sum = 1;

for($i = 0; $i < $num; $i++){
    $sum += $num * $num - 1;
}
echo $sum;


echo "<br><br>******** Q7 ******* <br>";

$num = 0;
$x = 1;

for($i = 0; $i <= 10; $i++){
    $sum = $num + $x;
    echo $sum."&nbsp &nbsp";
    $num = $x;
    $x = $sum;
}


echo "<br><br>******** Q8 ******* <br>";

$string = "Orange Coding Academy";
$counter = 0;

for($i=0; $i < strlen($string); $i++){
    if($string[$i] == "c" || $string[$i] == "C"){
        $counter++;
    }
}
echo "String: $string <br>";
echo "C count is: $counter";


echo "<br><br>******** Q9 ******* <br>";
?>
<table style="border: 0px; border-spacing: 0px;">
<?php
for ($i=1; $i <= 6; $i++){
    echo "<tr>";
    for ($x = 1; $x <=5; $x++){
        echo "<td style='border: 1px solid black; padding: 3px; '> $i * $x = ".$i * $x."</td>";
    }
    echo "</tr>";
}
?>
</table>
<?php


echo "<br><br>******** Q10 ******* <br>";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 and $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo "$i ";
    }
}
echo "<br>";


echo "<br><br>******** Q11 ******* <br>";

$n = 1;
$lines = 5;
for ($i = 1; $i <= $lines; $i++) {
    for ($x = 1; $x <= $i; $x++) {
        echo "$n ";
        $n++;
    }
    echo "<br>";
}

echo "<br><br>******** Q12 ******* DNF <br>";

$letterArray = ["A", "B", "C", "D", "E"];

for ($i = 0; $i <= 5; $i++) {
    for ($x = 5; $x > $i; $x--) {
        echo "&nbsp";
    }
    for ($y = 0; $y < $i; $y++) {
        echo $letterArray[$y] . " ";
    }
    echo "<br>";
}
for ($i = 0; $i < 4; $i++) {
    for ($y = 0; $y <= $i; $y++) {
        echo "&nbsp";
    }
    for ($x = 4; $x > $i; $x--) {
        echo $letterArray[count($letterArray) - ($x + 1)] . " ";
    }
    echo "<br>";
}



echo"<br><br>**************************** Functions ****************************";

echo "<br><br>******** Q1 ******* <br>";
function isPrime($num)
    {
        if ($num <= 1) {
            echo "$num is not a prime number <br>";
        } elseif ($num == 2) {
            echo "$num is a prime number <br>";
        } else {
            $prime = 0;
            for ($i = 2; $i < $num; $i++) {
                if ($num % $i == 0) {
                    $prime++;
                }
            }
            if ($prime == 0) {
                echo "$num is a prime number <br>";
            } else {
                echo "$num is not a prime number <br>";
            }
        }
    }

    isPrime(3);
    isPrime(5);
    isPrime(2);
    isPrime(7);
    isPrime(9);
    isPrime(12);
    isPrime(13);
    isPrime(199);
    isPrime(200);

echo "<br><br>******** Q2 ******* <br>";

function reverseStr($str)
    {
        $strArr = [];
        for ($i = 1; $i <= strlen($str); $i++) {
            array_push($strArr, $str[strlen($str) - $i]);
        }
        echo implode("", $strArr) . "<br>";
    }

    reverseStr("ibrahim");
    reverseStr("house");


echo "<br><br>******** Q3 ******* DNF <br>";

function isLower($str){
    $lowerStr = strtolower($str);
    if ($str == $lowerStr) {
        echo "The string is all lowercase";
    } else {
        echo "The string is not all lowercase";
    }
}
isLower("hello");
echo "<br>";
isLower("Hello");
echo "<br>";

function isLowerRgex($str){
    if (!preg_match('/[A-Z]/', $str)) {
        echo "The string is all lowercase";
    } else {
        echo "The string is not all lowercase";
    }
}
isLowerRgex("hello");
echo "<br>";
isLowerRgex("Hello");
echo "<br>";
function isLowerAscii($str){
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if (!(ord($str[$i]) >= 97 and ord($str[$i]) <= 122)) {
            $count++;
        }
    }

    if ($count > 0) {
        echo "The string is not all lowercase <br>";
    } else {
        echo "The string is all lowercase";
    }
}

isLowerAscii("hello");
echo "<br>";
isLowerAscii("Hello");
echo "<br>";


echo "<br><br>******** Q4 ******* <br>";

function swap($x, $y){
    $intermediate = $x;
    $x = $y;
    $y = $intermediate;

    echo "y= $y , x= $x <br>";
}
swap(5, 10);

function swap2($x, $y){
    echo "y= $x , x= $y <br>";
}

swap2(5, 10);

echo "<br><br>******** Q5 ******* <br>";
echo "repeated question?";



echo "<br><br>******** Q6 ******* <br>";

function isArmstrong($num){
    $numStr = strval($num);
    $sum = 0;
    for ($i = 0; $i < strlen($numStr); $i++) {
        $sum += (intval($numStr[$i]) ** 3);
    }
    if ($sum == $num) {
        echo "$num is an Armstrong Number <br>";
    } else {
        echo "$num is not an Armstrong Number <br>";
    }
}
isArmstrong(407);
isArmstrong(406);
isArmstrong(153);


echo "<br><br>******** Q7 ******* <br>";

function isPalindrome($str){
    $strR = [];
    for ($i = 1; $i <= strlen($str); $i++) {
        if ($str[strlen($str) - $i] == " ") {
            array_push($strR, "");
        } else {
            array_push($strR, $str[strlen($str) - $i]);
        }
    }
    $noSpacesStr = str_replace(" ", "", $str);
    if (strtolower($noSpacesStr) == strtolower(implode("", $strR))) {
        echo "$str (is a palindrome) <br>";
    } else {
        echo "$str (is not a palindrome) <br>";
    }
}
isPalindrome("Hello");
isPalindrome("racecar");
isPalindrome("Eva, can I see bees in a cave?");
isPalindrome("Eva can I see bees in a cave");


echo "<br><br> ******** Q8 ******* <br>";
function removeDuplicates($array){
    $newArr = ["test"];

    foreach ($array as $num) {
        if (array_search($num, $newArr) == false) {
            array_push($newArr, $num);
        }
    }
    array_shift($newArr);
    echo "(";
    foreach ($newArr as $num) {
        echo $num . " ";
    }
    echo ") <br>";
}

removeDuplicates([2, 4, 7, 4, 2, 8, 4]);

echo "<br><br><br><br><br>";


?>