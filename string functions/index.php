<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<style>
     body {
          text-align: center;
          font-size: 30px;
          color: red;
         line-height: 83px;
}
</style>    
<body>

<?php 

$x = "my name is kamal kant";
 echo strlen($x);
 echo"<br>";
 echo str_word_count($x);

$y = "i love my country";

var_dump(str_contains($y , "love"));
echo strpos($y , "love" );

echo "<br>";

$d = "HEllo What are you doing";
echo strpos($d, "you");

echo "<br>";

$e = "hello my name is kamal kant";
echo strtoupper($e);

echo "<br>";

$f = "HELLO MY NAME IS KAMAL KANT";
echo strtolower($f);

echo "<br>";

$g = "elephent live in sea";
echo str_replace("elephent","fish", $g);

echo "<br>";
$h = "mai kya ladle mewooo";
echo strrev($h);

echo "<br>";

$j = "i am from himachal pradesh";

echo substr($j,2,-3);

echo "<br>";

$l = "i am from himachal pradesh";

echo substr($l,-2,3);

echo "<br>";
//octal numbers
$a = "\110\145\154\154\157\012\115\171\040\116\141\155\145\040\151\163\040\113\141\155\141\154\040\113\141\156\164\012\111\040\141\155\040\106\162\157\155\040\164\141\162\167\141\151\012\111\040\150\141\166\145\040\144\157\156\145\040\102\103\101\012\146\162\157\155\040\126\107\103\040\115\141\156\144\151";

echo nl2br($a);

echo "<br>";


// hexadecimal nubmers
$b = "\x48\x65\x6c\x6c\x6f\040\x4d\x79\040\x4e\x61\x6d\x65\040\x49\x73\040\x4b\x61\x6d\x61\x6c\040\x4b\x61\x6e\x74\012\x49\040\x41\x6d\040\x46\x72\x6f\x6d\040\x54\x61\x72\x77\x61\x69\012\x49\040\x48\x61\x76\x65\040\x44\x6f\x6e\x65\040\x42\x43\x41\012\x49\x6e\040\x56\x47\x43\040\x4d\x61\x6e\x64\x69";


echo nl2br($b);

echo "<br>";

# decimal numbers
$c = chr(72).chr(101).chr(108).chr(108).chr(111).chr(32).
     chr(109).chr(121).chr(32).
     chr(78).chr(97).chr(109).chr(101).chr(32).
     chr(73).chr(115).chr(32).chr(75).chr(97).chr(109).chr(97).chr(108).chr(32).
     chr(75).chr(97).chr(110).chr(116).chr(10).chr(73).chr(32).chr(70).chr(114).chr(111).chr(109).chr(32).
     chr(84).chr(97).chr(114).chr(119).chr(97).chr(105);

     
echo $c;         

?>  


     
</body>
</html>