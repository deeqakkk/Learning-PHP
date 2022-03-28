<!Doctype HTML>
<html>
    <head>
        <title>PHP SYntax</title>
    </head>
    <body>
        <?php 
        echo "Deepak Verma is a good boy<hr/>";
        $x=10;
        echo $x;
        echo "<hr/>";
        ECHO "Text sample 1<hr/>";
        echO "Text sample 2<hr/>";
        echo "Text sample 3<hr/>";
        echo "Variable declaration is case-sensitive<hr/>";
        echo "NULL: A variable with no value assigned to it apart from null <hr/>";
         class person{
             public $firstname; 
             public $lastname;
             public $age;
             public function _construct($firstname,$lastname,$age){
                 $this->firstname=$firstname;
                 $this->lastname=$lastname;
                 $this->age=$age;
             }
             public function hello(){
                 return "I'm ".$this->firstname. " " .$this->lastname. " my age is: ". $this->age. "";

             }
         }

         $person1= new person("Deepak","Verma",21);
         $person2=new person("John","Wick",32);
         echo $person1->hello();
         echo "<hr/>   ";
         echo $person2->hello();
         echo "<hr/>    ";
        
        ?>
    </body>
</html>