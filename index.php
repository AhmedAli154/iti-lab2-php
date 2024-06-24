<?php


// ---------------------------- q1-------------------------------

 $text= "Akshit ahmed aaaa \r\n Loves GeeksForGeeks aajmmmm";
echo nl2br($text);
echo "<br>";
echo "<br>";

// ---------------------------------------------------------------

// ---------------------------- q2--------------------------------
// -------first fn------------
echo substr("Hello ahmed ali",11);
echo "<br>";
echo "<br>";


//---------------------------
//----------second fn--------
echo addcslashes("Hello Ahmed ali","H,a");
echo "<br>";
echo "<br>";

//-----------------------------
//---------third fn------------
$txt = "Hello Ahmed aliy";
echo chop($txt,"y");
echo "<br>";
echo "<br>";

echo chop($txt,"aliy");
echo "<br>";
echo "<br>";

//--------------------------------
//---------fourth fn--------------

echo strcspn("Hello ahmed ali","d");
echo "<br>";


echo strcspn("Hello ahmed ali","h");
echo "<br>";
echo "<br>";

// --------------------------------------

// ---------------------------------------------------------------


// ---------------------------- q3--------------------------------

echo "<pre>";
print_r ($_SERVER);
echo "</pre>";


// ---------------------------------------------------------------

// ---------------------------- q4--------------------------------
$numbers = array(12, 45, 10,25);
echo "<pre>";

print_r($numbers);
 echo "</pre>";
echo "sum is ======>". array_sum($numbers);	
 echo "<br>";
 echo "avg is ======>".  array_sum($numbers) / count($numbers);
 echo "<br>";
 rsort($numbers)	;
 echo "<br>";

  echo "array in reverse order :-";

 echo "<pre>";

print_r($numbers);
 echo "</pre>";

// ---------------------------------------------------------------
// ---------------------------- q5--------------------------------

$names = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);

echo "<pre>";

print_r($names);
  echo "</pre>";
 echo "<br>";
   echo "ascending order sort by value:-";

 asort($names);
 echo "<pre>";

print_r($names);
  echo "</pre>";  
  echo "ascending order sort by key:-";
  ksort($names);
 echo "<pre>";

print_r($names);
  echo "</pre>";

  echo "descending  order sort by value:-";
  arsort($names);
 echo "<pre>";

print_r($names);
  echo "</pre>";
  echo "descending  order sort by key:-";
  krsort($names);
 echo "<pre>";

print_r($names);
  echo "</pre>";



//---------------------------------------------------------------
?>