<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorials</title>
</head>

<body>
    <h1>My first PHP page</h1>
    <?php
     echo "Hello World!" . "<br>";

     // variables
        $age = "15";
        echo "She is " . $age . " years old" . "<br>";
        $txt = "W3Schools.com" . "<br>";
        echo "I love " . $txt . "!" . "<br>";

        $add = 500;
        $ADD = 148;
        echo $ADD + $add;
        echo "<br>";
        # data types
        # strings : they can use either single or double quotes
        "hello world";
        'how are you';

        # integers : they can be negative or positive whole numbers between -2,147,483, 648 and 2,147,483,647
        649;
        -3478;
        $num = 598;
        var_dump($num);
        echo "<br>";
        #floating point numbers
        $decimal = 10.365;
        var_dump($decimal);
        echo "<br>";

        # boolean A Boolean represents two possible states: TRUE or FALSE.

        # An array stores multiple values in one single variable.
        $person = array("Name", "Age", "Hieght", "Complexsion", '55', "true");
        var_dump($person);
        echo "<br>";
        #echo  "i love" .  $person;
        # object
        class Car
        {
            public $color;
            public $model;
            public function __construct($color, $model)
            {
                $this->color = $color;
                $this->model = $model;
            }
            public function message()
            {
            return "My car is a " . $this->color . " " . $this->model . "!";
            }
        }

        $myCar = new Car("black", "Volvo");
        echo $myCar->message();
        echo "<br>";
        $myCar = new Car("red", "Toyota");
        echo $myCar->message();
        echo "<br>";
        # null
        $okay = "Hello world!";
        $okay = null;
        var_dump($okay);
        echo "<br>";
        #   some php functions commonly used to manupulate strings

        #   strlen() returns the length of the string
        #   str_word_count() returns the number of words in the string
        #   strrev () returns the reverse of the string
        #   strpos() returns the position of the first occurrence of a word in the string
        #  str_replace() function replaces some characters with some other characters in a string
        echo strlen('verbum networks limited');
        echo "<br>";
        echo str_word_count ('verbum networks limited');
        echo "<br>";
        echo strrev ('verbum networks limited');
        echo '<br>';
        echo strpos ("verbum limited ok", "ok");
        echo '<br>';
        echo str_replace  ("limited","verbum", " limited hello");
        echo "<br>";


        #PHP NUMBERS : intergers number string and float

        #
        $x = 2655;
        var_dump(is_long($x));
        echo "<br>";  
        $nums = 26.55;
        var_dump(is_int($nums));
        
?>

</body>

</html>