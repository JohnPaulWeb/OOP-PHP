<?php
  
  echo "Please Enter your Favorite Color:";
  $color = trim(fgets(STDIN));


  echo "Your Favorite Colors is: " . $color . "\n";



  echo "Please enter your number";
  $a = 10;
  $b = 20;
  $sum = $a + $b;

  echo "Sum: $sum\n";


// echo "Please Enter your current year and birth year and calculate and print their age:";
// $current_year = trim(fgets(STDIN));
// $birth_year = trim(fgets(STDIN));
// $age = $current_year - $birth_year;

// echo "Your age is: " . $age . "\n";

echo "Please enter a number to check if it is positive or negative:";
$number = trim(fgets(STDIN));
if (!is_numeric($number)) {
    echo "Invalid input. Please enter a numeric value.\n";
} else if ($number > 0) {
    echo "The number is positive.\n";
} else if ($number < 0) {
    echo "The number is negative.\n";
} else {
    echo "The number is zero.\n";
}

echo "Please Check if a person is Eligible to Vote:";
$number1 = trim(fgets(STDIN));
$age = 18;
if ($age >= 18) {
    echo "The person is eligible to vote.";
} else {
    echo "The person is not eligible to vote.";
}

echo "\n";

echo "Even numbers from 1 to 20:\n";
for ($i = 1; $i < 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n ";
    }
}
echo "\n";


echo "Please enter the number 7 to count even numbers up to 7:";
$user_input = trim(fgets(STDIN));
if ($user_input == "7") {
    $count = 0;
    $num = 1;
    while ($num <= 7) {
        if ($num % 2 == 0) {
            $count++;
        }
        $num++;
    }
    echo "There are $count even numbers between 1 and 7.\n";
} else {
    echo "You did not enter 7.\n";
}



$count = 0;
$eventCount = 0;

while($count < 7) {
    $num=readline("Enter your number: ");
    if ($num % 2 == 0) {
        $eventCount++;
    }
    $count++;
}

echo "You entered $count numbers and $eventCount of them were even.\n";

?>