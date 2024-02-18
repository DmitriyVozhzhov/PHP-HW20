<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    echo "Привіт! Ви відправили GET запит.";
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['number1']) && isset($_POST['number2'])) {
        $number1 = floatval($_POST['number1']);
        $number2 = floatval($_POST['number2']);
        $sum = $number1 + $number2;
        echo "Результат складання чисел: $sum";
    } else {
        http_response_code(400);
        echo "Помилка: не вдалося отримати числа для складання.";
    }
} else {
    http_response_code(400);
    echo "Непідтримуваний метод запиту.";
}
