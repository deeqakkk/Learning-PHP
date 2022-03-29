<!DOCTYPE html>
<html>

<body>

<?php
$var1 = "Hello world!";
$x = 15;
$y = 20.5;

echo $var1;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<hr />";

$sport= "Football";
echo "I like $sport!";
echo "<hr />";

$sport= "Football";
echo "I like " . $sport . "!";
echo "<hr />";

$x = 5;
$y = 6;
echo $x + $y;
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