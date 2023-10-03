<?php
#Задачи сделайте в проекте в котором работали на последнем занятии. Роут в main.php добавьте dz0628 что бы результат получался по адресу в браузере /dz0628
 
    #1. Перевернуть строку, то есть последние символы должны стать первыми, а первые последними.
    $string = "Какой-то текст";
    $gnirts = strrev($string);
    echo $gnirts;
    #2. Подсчитать количество слов во введенной пользователем строке. Считаем, что слова разделяются исключительно одним пробелом, а первый и последний символы строки не являются пробелами.
    $string = readline("string = ");
    $array = explode(" ", $string);
    $count = count($array);
    echo $count;
    #3. Дана строка, состоящая из английских слов, разделенных пробелами и знаками препинания. Определить длину самого короткого слова.
    $string = "Hello, World! I'm avale1648, a php programmer";
    $array = explode(" ", $string);
    $min = "abcdefghijklmnopqrstuvwxyz";
    for ($i = 0; $i < count($array); $i++)
    {
        if (strlen($array[$i]) < strlen($min))
        {
            $min = $array[$i];
        }
    }
    $length = strlen($min);
    echo $length;
    #Мат задачи

    #4. Напишите программу, которая определяет, сколько можно купить быков, коров и телят, платя за быка 10 рублей, за корову - 5 рублей, а за теленка - 50 копеек, если на 100 рублей надо купить 100 голов скота?
    $sum = 100;
    $bullPrice = 10;
    $cowPrice = 5;
    $calfPrice = 0.5;
    for($bull = 0; $bull <= $sum/$bullPrice; $bull++)
    {
        for ($cow = 0; $cow <= $sum/$cowPrice; $cow++)
        {
            for ($calf = 0; $calf <= $sum/$calfPrice; $calf++)
            {
                if ((20 * $bull + 10 * $cow + $calf == 200) && ($bull + $cow + $calf == 100))
                {
                    echo "Быков - ".$bull.", Коров - ".$cow.", Телят - ".$calf;
                }
            }
        }
    }
    #5. Ввод n - это предел Фибоначчи. Вывести всю последовательность.
    $n = readline("n = ");
    $fibonacci = fibonacci($n);
    echo $fibonacci;
    #6. Арифметический квадрат. Заполнить квадратную матрицу n x n так, чтобы все числа первого столбца и первой строки равны 1, а каждое из оставшихся чисел равно сумме верхнего и левого соседей.
    # Вывести на экран матрицу данного размера.
    $n = readline("n = ");
    $array;
    for ($i = 1; $i < $n; $i++)
    {
        for ($j = 1; $j < $n; $j++)
        {
            $array[i][j] = square(i, j);
            echo $array[i][j]." ";
        }
        echo "\n";
    }
    #1 1 1 1
    #1 2 3 4
    #1 3 6 10
    #1 4 10 20
    function fibonacci($i)
    {
        if($i == 0)
        {
            return 0;
        }
        if($i == 1  || $i == 2)
        {
            return 1;
        }
        return fibonacci($i - 1) + ($i - 2);
    }
    function square($a, $b)
    {
        if ($a == 1 || $b == 1)
        {
            return 1;
        }
        else
        {
            return square($a - 1, $b) + square($a, $b - 1);
        }
    }
?>