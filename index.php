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
        ?>
    </body>
</html>