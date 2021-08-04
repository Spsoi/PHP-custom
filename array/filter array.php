<?php
  $str = '1111,2222,3333,4444,5555,, ';
  $searchId = [4444];
  $empty = ['',' ',0,null];
  // превращаем строку в массив
  $explode = explode(',', $str);
  // объединяем два массива в один
  $merge = array_merge($searchId,$empty);
  // удаляем исключения
  $diff = array_diff($explode, $empty);
  // сбрасываем индекс
  $a = array_values($diff);

print_r($a);
// =================================================================================
// Array
// (
//     [0] => 1111
//     [1] => 2222
//     [2] => 3333
//     [3] => 4444
//     [4] => 5555
// )

