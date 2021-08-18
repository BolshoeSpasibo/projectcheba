<?php

$str = " shla sa())sha po shosse \n";
print_r($str);

$arr = str_split($str);

$flag = false;
$a = 0; // счетчик открывающих скобок
$b = 0; // счетчик закрывающих скобок

//цикл перебора элементов массива
foreach ($arr as $value)
{
   //print_r ($value. "\n");
   if ($value == '(' )
   {
        $a++;
        if ( !$flag && $a != $b )       // если нашли "(" то - true
        {
          $flag = true;
        }
        elseif($flag && $a != $b )
        {
            $flag = true;
        }
        else
        {
            $flag = false;
            break;
        }
   }
   // если символ - закрывающая скобка
   elseif ($value == ')')
   {
        $b++;
        if (!$flag)
        {
            $flag = false;
            break;
        }
    }


}
// условие при котором все в порядке
if ($flag && $a == $b)
{
    $flag = true;
    print_r ("всё ок\n");
}
// условие при котором выдает ошибку
else
{
    $flag = false;
    print_r ("ошибка");
}
// условие при котором скобок нет
if ($a == 0 && $b == 0)
    {
        print_r ("Скобок нет\n");
    }
?>

