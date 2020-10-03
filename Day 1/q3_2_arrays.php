<?php 
 $m=array(
  array(1 , 2),
  array(3,4),
);
 $n=array(
  array(5,6),
  array(7,8)
 );

 echo "M=<br>";

 for ($i=0; $i < 2; $i++) { 

 	for ($j=0; $j < 2; $j++) { 

 		echo " " .$m[$i][$j];
 	}
 	echo "<br>";
 }

 echo "<br>";
 echo "N= <br>";

 for ($i=0; $i < 2; $i++) { 

 	for ($j=0; $j < 2; $j++) { 

 		echo " " .$n[$i][$j];
 	}
 	echo "<br>";
 }

echo "A=<br>";
 for ($i=0; $i < 2; $i++) { 

 	for ($j=0; $j < 2; $j++) { 
 		
 		echo "  " .$m[$i][$j]+$n[$i][$j];
 	}
 	echo "<br>";	
}


 ?>