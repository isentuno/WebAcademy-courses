<?php

echo("<br><hr><br>");
echo("ЗАДАНИЕ 1");
echo("<br><hr><br>");

$number = rand(1, 100);
const MY_NUMBER = 24;

if ($number == MY_NUMBER) {
    echo "Вы угадали число";
}
elseif ($number < MY_NUMBER) {
    echo "Увы, число меньше указанного Вами";
}
elseif ($number > MY_NUMBER){
    echo "Увы, число больше указанного Вами";
}

echo("<br><hr><br>");
echo("ЗАДАНИЕ 2");
echo("<br><hr><br>");


if ($number % 3 === 0) {
    echo "Число $number кратное трём";
}

echo("<br><hr><br>");
echo("ЗАДАНИЕ 3");
echo("<br><hr><br>");

$types = [5, 5.0, '5', true, [5]];
$something = $types[array_rand($types, 1)];
if ($something === '5') {
    echo "Успех 1 <br>"  ;
}
if ($something === 5) {
    echo "Успех 2 <br>";

}
if (is_scalar ($something)) {
    echo "Успех 3 <br>";
}
if (is_numeric ($something)) {
    echo "Успех 4 <br>";
}

echo("<br><hr><br>");
echo("ЗАДАНИЕ 3");
echo("<br><hr><br>");

$roles = ['superadmin', 'admin', 'user', 'customer', 'moderator', 'publisher'];
$role = $roles[array_rand($roles, 1)];
switch ($role) {
    case 'superadmin':
        echo "У вас полный доступ ко всем ресурсам";
        break;
    case 'admin':
        echo "У вас есть доступ создавать и редактировать странички";
        break;
    case 'user':
        echo "Вы можете просматривать содержимое платформы";
        break;
    default:
        echo "Роль $role не зарегистрирована в системе";

}
//done

