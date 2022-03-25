<!Doctype html>
<html>
    <body>
        <?php

        $x=3;
        $y=10;
        echo "<h1>My first PHP page!!!</h1>";
        # this is a single line comment.
        // this is a single line comment(alternative method).
        /* this is a multi-line comment
        in php */

        # variables
        $myName = "Deepak Verma";
        echo $myName;
        $yourName="Aman Kumar";
        echo "<h3>$myName and $yourName are good friends.</h3>";
        echo "PHP is a Loosely Typed Language
        In the example above, notice that we did not have to tell PHP which data type the variable is.<br>
        
        PHP automatically associates a data type to the variable, depending on its value. <br>Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error";
        echo "<br>";
        function myTest() {
            echo "Hello World";
            echo "<br>";
            $GLOBALS['x']=$GLOBALS['x']+$GLOBALS['y'];

    
        }
        myTest();
        echo "Updated value of x = $x";

        echo "<h1>PHP echo and print statements</h1>";
        echo "<br>Echo has no return value while print has a return value of 1 so it can be used in expressions. <br>";
        echo "echo can be used with or without paranteses. <br>";
        echo "e.g.", "this ", "is ", "a ", "test";

        $txt1="Learn PHP | ";
        $txt2="Deepak Verma";
    
        echo "<h2>".$txt1.$txt2."</h2>";

        print "Deepak Verma is a good boy, currently he is learning PHP<br>";
        print "This sentence is displayed using 'print' in PHP<br>";

        print "<h2>var_dump(x) : </h2>"; var_dump(1234);
        print "<h2>var_dump(string): </h2>"; var_dump("Deepak Verma");

        $cars=array("Volvo","BMW","Toyota","Addi", "Mercedes");
        print "<h2>var_dump(cars): </h2><br>"; 
      echo "Word count for [Deepak verma is a good human being!] : "; 
      echo str_word_count("Deepak verma is a good human being!<br>");
      echo "<br>";
        var_dump($cars);
        echo "<br>Minimum value of the array : ";
        echo(min(0, 150, 30, 20, -8, -200));  // returns -200
        echo "<br>Maximum value of the array : ";
    echo(max(0, 150, 30, 20, -8, -200));  // returns 150
    echo "<br>Value of pi : ".pi();
    echo "<br>rand() generates a random number : ".rand(1,1000);
    #creating a constant with case sensitive name
    define("HELLO","Deepak Verma gonna be an amazing develoepr!");
    echo "<br>This sentence is printed using constant: ".HELLO;
        ?>
    </body>
</html>