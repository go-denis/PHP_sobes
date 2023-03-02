<?php 

/*

Задача 2: массивы
Нужно заполнить массив 5 на 7 случайными уникальными числами от 1 до 1000.
Вывести получившийся массив и суммы по строкам и по столбцам.
*/


function creatArray($collumn, $str){

 $array = array();
// /*Заполняем двумерный массив случайными числами: */
 for ($c = 0; $c < $collumn; $c++){
   for ($r = 0; $r < $str; $r++){
      //Генерируем рандомные числа, пока не найдем то, которого нет в нашем массиве
      while ( ($randNum = rand(1, 1000)) && in_array($randNum, $array));//<--------Не внимательно прочитал задание 
        $array[$c][$r] = $randNum;//<---------Видимо тут была ошибка поменял 0 на 1   
     
   }
 }
 return $array;
}

function printArray($array){
 //Выводим и считаем
 $sumCollumn = [];
 foreach ($array as $subArray) {
    
    
    $sumStr = 0;
    $strStop = 0;//Счетчик для строк
    foreach ($subArray as $value) {

        //Проверяем на отсутствие ключа и получаем сумму колонок массива, записываем в новый массив
        if(array_key_exists($strStop, $sumCollumn)){
            $sumCollumn[$strStop] += $value;
        }else{
            $sumCollumn[$strStop] = $value;
        }   


        $strStop++;
        $sumStr += $value;
        if($strStop == 7){ 
          printf(' '.$value.' Сумма: '.$sumStr.PHP_EOL);
        }else{
          printf(' '.$value);
        }
      
    }
  }
  print('Сумма столбцов: '.PHP_EOL);
  foreach($sumCollumn as $key){
    printf(' '.$key);
  }

}

  $mass = creatArray(5,7);
  printArray($mass);

