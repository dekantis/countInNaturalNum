<?php

//Задача: Определить  количество  цифр,  меньших  5,  используемых  при  записи натурального числа N.

$n=25272; //Натуральное число

//Функция для подсчета цифр
function countInNaturalNum(int $naturalNum): int
{
    $count = 0;
    while ($naturalNum>0) {
        if ($naturalNum%10<5) { //Проверка текущей цифры
            $count++;
        }
        $naturalNum = (int)($naturalNum/10);
    }
    return $count;
}
echo "В числе $n - ".countInNaturalNum($n)." цифры < 5";

