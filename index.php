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


    echo "<br><h2>Switch Case</h2>";
    $favcolor = "yellow";
    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, not green!";
    }

    echo "<br><h2>While Loop</h2>";
    $x=1;
    while($x<=10)
    {
        echo "The number is : $x <br>";
        $x++;
    }
    echo "<br><h2>For Loop</h2>";
    for($x=0;$x<=4;$x++)
    {
        echo "The number is : $x <br>";
    }
    echo "<br><h2>Array traversal</h2>";
    $cars=array("BMW","Audi","Toyota","Porsche","Mercedes");
    for($x=0;$x<count($cars);$x++)
    {
        echo $cars[$x]."<br>";
    }
   echo "<br><h2>PHP Superglobal -_SERVER</h2>";
   echo "Server name : ".$_SERVER['SERVER_NAME']."<br>";
    echo "Server port : ".$_SERVER['SERVER_PORT']."<br>";
    echo "Server software : ".$_SERVER['SERVER_SOFTWARE']."<br>";
    echo "Server protocol : ".$_SERVER['SERVER_PROTOCOL']."<br>";
    echo "Server IP : ".$_SERVER['SERVER_ADDR']."<br>";
    echo "Server root : ".$_SERVER['DOCUMENT_ROOT']."<br>";
    echo "Server request method : ".$_SERVER['REQUEST_METHOD']."<br>";
    echo "Server request URI : ".$_SERVER['REQUEST_URI']."<br>";
    echo "Server query string : ".$_SERVER['QUERY_STRING']."<br>";
    echo "Server user agent : ".$_SERVER['HTTP_USER_AGENT']."<br>";
    echo "Server remote address : ".$_SERVER['REMOTE_ADDR']."<br>";
    echo "Server remote port : ".$_SERVER['REMOTE_PORT']."<br>";
    

    // FORMS
    echo "<br><h2>PHP Forms</h2>";
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
  </form>
    if($_SERVER["REQUEST_METHDO"]=="POST"){
        $name=$_REQUEST['fnmae'];
        if(empty($name)){
            echo "Name is empty, try again!";
        }
        else {
            echo "Hello, How are you doing... $name";
        }
    }

        ?>
    </body>
</html>