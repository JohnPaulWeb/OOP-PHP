
<?php
    // class Car {
    //     public $color;
    //     public $model;

    //     function __construct($color, $model) {
    //         $this->color = $color;
    //         $this->model = $model;
    //     }

    //     function getCarInfo() {
    //         return "This car is a " . $this->color . " " . $this->model;
    //     }
    // }

    // $myCar = new Car("red", "Toyota");
    // echo $myCar->getCarInfo();

    // Conditional Statements

    // $score = 70;

    // if ($score >= 98) {
    //   echo "Adult";
    // } else if($score >= 75) {
    //     echo "Pass"
    // } else {
    //     "Try again"
    // }


    // Loop Statement
    // for ($i = 1; $i <= 5; $i++) {
    //     echo "Iteration: " . $i . "\n";
    // }

    // For Each

    // $colors = ["Red", "Green", "Blue"];
    // foreach ($colors as $color) {
    //     echo $color . "<br>";
    // }

    // Arrays - Associative 

    $student = [
        "name" => "Juan",
        "age" => 20,
        "course" => "BSIT"
    ];
   foreach ($student as $key => $value) {
       echo "$key: $value\n";
   }
   echo $student["course"];
?>
