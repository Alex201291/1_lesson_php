<?php

// ввод данных
$name = readLine("Как вас зовут?");
$age = readline("Сколько вам лет?");
//вывод данных
echo "Вас зовут $name, вам $age лет.";
//ввод данных
$task1 = readLine("Какая задача стоит перед вами сегодня?");
$time1 = readLine("Сколько примерно времени эта задача займет?");
$task2 = readLine("Какая задача стоит перед вами сегодня?");
$time2 = readLine("Сколько примерно времени эта задача займет?");
$task3 = readLine("Какая задача стоит перед вами сегодня?");
$time3 = readLine("Сколько примерно времени эта задача займет?");
//счет времени
$all_time = $time1 + $time2 + $time3;


echo "$name, сегодня у вас запланировано 3 приотритетных задачи на день :\n";
echo "$task1\($time1\)\n";
echo "$task2\($time2\)\n";
echo "$task3\($time3\)\n";
echo "примерное время выполнения плана $all_time";


