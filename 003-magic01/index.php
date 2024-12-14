<?php
declare(strict_types=1);

include 'Person.php';
include 'PeopleList.php';

// Создание объектов Person
$person1 = new Person('Иван', 'Иванов', 'ivanov', 'password123');
$person2 = new Person('Петр', 'Петров', 'petrov', 'password456');

// Сериализация объекта
$serializedPerson = serialize($person1);
echo "Сериализованный объект: " . $serializedPerson . PHP_EOL;

// Изменение строки (например, изменение логина)
$modifiedSerializedPerson = str_replace('ivanov', 'petrov', $serializedPerson);
echo "Измененная сериализованная строка: " . $modifiedSerializedPerson . PHP_EOL;

// Десериализация объекта
$deserializedPerson = unserialize($modifiedSerializedPerson);
echo "Десериализованный объект: " . $deserializedPerson . PHP_EOL;



// Создание списка людей
$peopleList = new PeopleList();
$peopleList->addPerson($person1);
$peopleList->addPerson($person2);

// Вывод списка людей через foreach
echo "Вывод списка людей:" . PHP_EOL;
foreach ($peopleList as $person) {
    echo $person . PHP_EOL;
}
