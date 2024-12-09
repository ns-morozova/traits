<?php
declare(strict_types=1);

include 'Person.php';
include 'PeopleList.php';

// Создание объектов Person
$person1 = new Person('Иван', 'Иванов', 'ivanov', 'password123');
$person2 = new Person('Петр', 'Петров', 'petrov', 'password456');

// Создание списка людей
$peopleList = new PeopleList();
$peopleList->addPerson($person1);
$peopleList->addPerson($person2);

// Вывод списка людей через foreach
foreach ($peopleList as $person) {
    echo $person . PHP_EOL;
}
