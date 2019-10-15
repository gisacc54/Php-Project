<?php
//example of global variables
 $int=100;
 $float=400.50;
 $string="hello";
 $boolean=true;
 //to define array
 $string_array=array("Math","Phycis","Biology","History");
 $number_array=array(1,2,3,4);

// echo "<br>";
 echo  $int." + ".$float." = ",$int+$float."<br>";
 print $int." + ".$float." = ";
 print $int+$float."<br>";
 echo "<b>",$string."</b><br>";
  print "<b>".$string."</b><br>";
  echo "string $int <br>";
  echo $boolean."<br>";

 //it explain the data type of the variable
 var_dump($float);
 echo "<br>";
 var_dump($string_array);
 echo "<br>";
 var_dump($number_array);
 echo "<br>";
 //to display the array
 echo $string_array[0],"<br>",$number_array[1],"<br>";//array

// function global_variable()	
// {
// 	//you cannot use a global variable inside a function
// 	echo "$string";
// }
// global_variable();

 function local_variable()
 {
 	//you can declare variable inside function
 	//local variable
 	$string="treasure";
 	echo $string."<br>";
 }
 local_variable();


 function global_keyword()
 {
 	//you can use global variable within a function by global keyword
 	global $string; //global variable
 	echo $string."<br>";
 	echo $GLOBALS["int"]."<br>";//another option
 	echo $GLOBALS['float']."<br>";//another option

 }
 global_keyword();
 ?>


