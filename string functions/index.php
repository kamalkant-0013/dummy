<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
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

    echo "<br>";
    echo "<h2>program to wirite multiple lines using echo</h2>";
    echo "hello i am writing <br> multiple lines using echo <br> this feels amazing";

    //i dont know this ques

    echo "<br>";
    echo "<h2>write a program that stores 3 vraibles and find their sum</h2>";
    $c = 7;
    $d = 8;
    $e = 9;
    $result = $c + $d + $e ;
    echo "sum of three vraibles is :" , $result;

    echo "<br>";
    echo "<h2>program to reverse a string</h2>";
    $f = "this string gonna reverse";
    echo strrev($f);

    echo "<br>";
    echo "<h2>program to find cube of a number</h2>";
    $g = 9;
    $cube = $g * $g * $g;
    echo "cube is :" , $cube;

    echo "<br>";
    echo "<h2>program to find length of a string and turn it to uppercase</h2>";
    $h = "hello this is gonna be all in upper case";
    echo "length of string is :";
    echo strlen($h);
    echo "<br>";
    echo strtoupper($h);

    echo "<br>";
    echo "<p>A . 1   - string is a datatype it represented alphabate data in php for eg : \" string \"</p>";
    
    echo "<br>";
    echo "<p>A . 2 - string is repersented in single and double quotes</p>";

    echo "<br>";
    echo "A . 3 - strlen is used for count length of string";
    echo "<br>";
    $length = "hello i am kamal kant";
    echo $length;
    echo "<br>";
    echo "the strlen is :";
    echo strlen($length);

    echo "<br>";
    echo "A . 4 -str word count is used for count the words in the string";
    echo "<br>";
    echo $length;
    echo "<br>";
    echo "the word count is :";
    echo str_word_count($length);

    echo "<br>";
    echo "A . 5 - diff between strtoupper and strtolower is strtopper convert lowercase to uppercase and strtolower do the opposite";
    $a1 = "HELLO MY NAME IS KAMALKANT";
    $a2 = "hello my name is kamal kant";
    echo strtolower($a1);
    echo "<br>";
    echo strtoupper($a2);

    echo "<br>";
    echo "A . 6 - String can modify by using string functions like string replace or str to lower";

    echo "<br>";
    echo "string concatenation is used to joint to strings";

    echo "<br>";
    echo "<h2>A . 7 - program to join two strings</h2> ";
    $b1 = "kamal";
    $b2 = "Kant";
    $concatenation = $b1 . $b2 ;
    echo "<br>";
    echo $b1;
    echo "<br>";
    echo $b2;
    echo "<br>";
    echo "concatenation is :" , $concatenation;

    echo "<br>";
    echo "<h2>A . 8 - substr is used to string slicing eg :</h2>";
    $sub = "Hello my name is kamal kant";
    echo substr($sub,6,5);

    echo "<br>";
    echo "A . 8 - escape characters is used to make quote inside the text with using if slash";

    echo "<br>";
    echo "A. 9 - n is used to start new line \n like this \n and t is used to make space between two characters eg kamal\tkant";

    echo "<br>";
    echo "trim is used to trin starting and ending extra space of line";
    $c1 = "               kamal kant";
    echo trim($c1);

    echo "<br>";
    echo "str_replace function is used to replace the string";

    echo "<br>";

    echo "<h2>Name using haxadecimal</h2>";
    echo "<br>";
    echo "\x4b\x61\x6d\x61\x6c\040\x4b\x61\x6e\x74";
    echo "<br>";

    echo "<h2>aderess using haxadecimal</h2>";
    echo "<br>";
    echo "\x49\040\x41\x6d\040\x46\x72\x6f\x6d\040\x54\x61\x72\x77\x61\x69";
    echo "<br>";

    echo "<h2>Name using octal</h2>";
    echo "<br>";
    echo "\113\141\155\141\154\040\113\141\156\164";
    echo "<br>";

    echo "<h2>aderess using octal</h2>";
    echo "<br>";
    echo "\111\040\141\155\040\106\162\157\155\040\164\141\162\167\141\151";
    echo "<br>";


    ?>
    </pre>
</body>
</html>