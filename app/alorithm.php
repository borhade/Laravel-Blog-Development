<?php
function InsertionSort($elments)
{
 $totalElements =count($elments);
 for($i=1;$i< $totalElements;$i++){
     $j=$i-1;
     var_dump($elments[$i]);
      $temp = $elments[$i];
     while($j>=0 && $elments[$j] > $temp){
        $elments[$j+1]= $elments[$j];
        $j--;
     }
     $elments[$j+1]=$temp;
  }
   print_r($elments);
}
$array = [5,4,2,1]; 
InsertionSort($array);
?>

---------------------------------------------Selection sort--------------------------

<?php

<?php
function selectionSort($a){
  $len = count($a);
  for($i=0;$i<$len-1;$i++){
    $min =$i;
    for($j=$i+1;$j<$len;$j++){
      if($a[$j]<$a[$min]){
          $min=$j;
      }
    }
    
    if($i!=$min){
        $temp = $a[$i];
        $a[$i]=$a[$min];
        $a[$min]= $temp;
    }
    
  }
  
  echo"<pre>";
   print_r($a);
  echo"</pre>";
  
  
  
}


$test = [5,10,4,3,2,1,56,46,3,90];
selectionSort($test);


?>
	
	
function swap($a,$i,$min){
  $temp = $a[$i];
  $a[$i]= $a[$min];
  $a[$min]=$temp;
   return $a;
}
	
$test = [4,2,5,12];
selectionSort($test);	
?>


middle =4
left = 4

r = 8-4  