<?php 
/*

Задача 1: лесенка
Нужно вывести лесенкой числа от 1 до 100.
1
2 3
4 5 6
...
*/

  $step = 1;

  for ($i = 1; $i <= 100; $i++){
 

	  for($j=1; $j<=$step; $j++){
		  echo $i." ";
		  $i++;
	  }
	  echo PHP_EOL;
	  $step++;
    
    }


