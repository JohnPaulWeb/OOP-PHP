<?php


    // class student {
    //     public $name;
    //     public $course;

    //     public function introduce() {
    //         echo "I am $this->name from $this->course";
    //     }
    // }

    // $stud1 = new student();
    // $stud1->name = "John";
    // $stud1->course = "Computer Science";
    // $stud1->introduce();

    // $stud2 = new student();
    // $stud2->name = "Jane";
    // $stud2->course = "Mathematics";
    // $stud2->introduce();

    class Fruit {
        // Properties
        public $name;
        public $color;

        
      
        // Methods
        function set_name($name) {
          $this->name = $name;
        }
        function get_name() {
          return $this->name;
        }
        function set_color($color) {
          $this->color = $color;
        }
        function get_color() {
          return $this->color;
        }
      }
      
      $apple = new Fruit();
      $apple->set_name('Apple');
      $apple->set_color('Red');
      echo "Name: " . $apple->get_name();
      echo "<br>";
      echo "Color: " . $apple->get_color(); 
      
?>