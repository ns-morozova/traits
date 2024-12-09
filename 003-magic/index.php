<?php
declare(strict_types=1);

include 'AppUserAuthentication.php';
include 'MobileUserAuthentication.php';
include 'User.php';

$user = new User();

// Пример проверки пользователя приложения
$user->authenticateUser('appUser', 'appPass'); // Должно вывести: "Пользователь приложения успешно авторизован."

// Пример проверки пользователя мобильного приложения
$user->authenticateUser('mobileUser', 'mobilePass'); // Должно вывести: "Пользователь мобильного приложения успешно авторизован."

// Пример неудачной авторизации
$user->authenticateUser('wrongUser', 'wrongPass'); // Должно вывести: "Ошибка авторизации."