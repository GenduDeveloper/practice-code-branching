<?php

/* Реализовать основные 4 арифметические операции в виде функций с двумя
   параметрами. Обязательно использовать оператор return  */

function addition(int $a, int $b)
{
    return $a + $b;
}

function subtraction(int $a, int $b)
{
    return $a - $b;
}

function multiplication(int $a, int $b)
{
    return $a * $b;
}

function division(int $a, int $b)
{
    return $a / $b;
}

echo "Сложение: " . addition(10, 10) . "<br>";
echo "Вычитание: " . subtraction(15, 10) . "<br>";
echo "Умножение: " . multiplication(5, 5) . "<br>";
echo "Деление: " . division(50, 2) . "<br>";
