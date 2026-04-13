<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "<h2>Php Syntax</h2>";
    echo "<br>";
    echo "<h3><?php ?></h3>";
    echo "<br>";
    echo "<p>Diff between echo and print is echo can print more then one value but print only show output of one value , print have one return value but echo does not return any value</p>";
    echo "<br>";
    echo "<p>Variables are used for store the values variable starts with the sign of $ and then we have to write it with alphabet it can't start with number and also - this sign is not used in variable </p>";
    echo "<br>";
    echo "<p>Datatypes : variable store diff types of values like number alphabet decimal ' so each show diff type of data that is called data types <br>1:string <br>2:int<br>3:float<br>4:boolean<br>5:null<br>6:object<br>7:Array</p>";
    echo "<br>";
    echo "<p>string : string is a datatype that show data in alphabets it is always defined in double quotes</p>";
    echo "<br>";
    echo "<p>diff between single and double quote is </p>";
    echo "<br>";
    echo "<p>php comments are two types first is single line comments and second is multi line coment <br>//this show single line comment<br>/*   this show multi line comment  */</p>";
    echo "<br>";
    echo "<p>Type casting is used for changing the type of data type like changing string to integer for eg :</p>";
    echo "<br>";
    $z = 5;
    $z = (string) $z;
    var_dump ($z);
    echo "<br>";
    echo "<p>integer data type shows numbers and float shows decimal values  eg :</p>";
    echo "<br>";
    $y = 55;
    $x = 5.5;
    var_dump ($y);
    echo "<br>";
    var_dump ($x);
    echo "<br>";
    echo "<p>strlen function is used to get the length of string for eg strlen of word Hello is :</p>";
    echo "<br>";
    $w = "Hello";
    echo strlen($w);
    echo "<br>";
    echo "<h2>Program to print your age</h2>";
    echo "<br>";
    $age = 20;
    echo "My age is :" , $age;
    echo "<br>";
    echo "<h2>Program to add two numbers </h2>";
    echo "<br>";
    $num1 = 55;
    $num2 = 54;
    $sum = $num1 + $num2;
    echo "Sum is :" , $sum;
    
    echo "<br>";
    echo "<h2>program to find square root of number</h2>";
    $t = 81;
    echo sqrt($t);

    echo "<br>";
    echo "<h2>program to calculate length of a string </h2>";
    $a = "Hello my name is kamal kant";
    echo $a;
    echo "<br>";
    echo "string length is :";
    echo strlen($a);
    
    echo "<br>";
    echo "<h2>program to joint two strings</h2>";

    $string1 = "kamal";
    $string2 = "kant";
    $joint = $string1 . $string2;
    echo "joint of teo strings is :" , $joint;

    echo "<br>";
    echo "<h2>convert to string upper case</h2>";
    $upper = "i am from himachal";
    echo strtoupper($upper);

    echo "<br>";
    echo "<h2>program to turn string 100 to integer using casting</h2>";
    $b = "24";
    $b = (integer) $b;
    echo $b;
    
    echo "<br>";
    echo "<h2>program to find value of pi </h2>";
    echo "value of pi is :";
    echo (pi());

    echo "<br>"
    echo "<h2></h2>";
    
    
    ?>
</body>
</html>