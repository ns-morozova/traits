<?php
declare(strict_types=1);

class Person {
    private string $firstName;
    private string $lastName;
    private string $login;
    private string $password;

    public function __construct(string $firstName, string $lastName, string $login, string $password) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->login = $login;
        $this->password = $password;
    }

    public function __get(string $name) {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
    }

    public function __set(string $name, $value): void {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }

    public function __sleep(): array {
        return ['firstName', 'lastName', 'login', 'password'];
    }

    // public function __wakeup(): void {
    //     // Восстановление любых ресурсов, если необходимо
    // }

    public function __toString(): string {
        return "Имя: {$this->firstName}, Фамилия: {$this->lastName}, Логин: {$this->login}";
    }
}