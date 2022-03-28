<!Doctype HTML>
<html>
    <head>
        <title>PHP Variable</title>
    </head>
    <body>
        <?php 
        echo "<h1>PHP Variables<h1/><hr/>";
        $txt1="Learn PHP | ";
        $txt2="Deepak Verma";
    
        echo "<h2>".$txt1.$txt2."</h2><hr/>";
        $x=3;
        $y=10;
        echo "Sum of x + y = ".($x+$y)."<hr/>";
        function myTest() {
            echo "Hello World";
            echo "<br>";
            $GLOBALS['x']=$GLOBALS['x']+$GLOBALS['y'];

    
        }
        myTest();
        echo "Sum of x + y = ".($x+$y)."<hr/>"; 
        $cars=array("BMW","Audi","Toyota","Porsche","Mercedes");
        for($x=0;$x<count($cars);$x++)
        {
            echo $cars[$x]."<hr/>";
        }
        print "<h2>var_dump(x) : </h2>"; var_dump(1234);
        print "<h2>var_dump(string): </h2>"; var_dump("Deepak Verma");
        echo "<hr/>";
        ?>
    </body>
</html>