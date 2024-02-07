<?php

/* Реализовать функцию с тремя параметрами: function calcOperation($arg1, $arg2, $operation), где $arg1, $arg2 значение аргументов,
 $operation - строка с названием операции.
 В зависимости от переданного значения операции выполнить одну из арифметических операций (используя функции с пункта 3)
 и вернуть полученное значение (использовать switch) */

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

function calcOperation($arg1, $arg2, $operation)
{
    switch($operation) {
        case '+':
            return addition($arg1, $arg2);
        case '-':
            return subtraction($arg1, $arg2);
        case '*':
            return multiplication($arg1, $arg2);
        case '/':
            return division($arg1, $arg2);
    }
}

echo "Результат сложения: " . calcOperation(5, 3, '+') . "<br>";
echo "Результат вычитания: " . calcOperation(50, 2, '-') . "<br>";;
echo "Результат умножения: " . calcOperation(5, 3, '*') . "<br>";;
echo "Результат деления: " . calcOperation(9, 3, '/');
