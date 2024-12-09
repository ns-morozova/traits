<?php
declare(strict_types=1);

trait AppUserAuthentication {
    private string $appLogin = 'appUser';
    private string $appPassword = 'appPass';

    public function authenticate(string $login, string $password): string {
        if ($login === $this->appLogin && $password === $this->appPassword) {
            return 'Пользователь приложения успешно авторизован.';
        } else {
            return 'Ошибка авторизации пользователя приложения.';
        }
    }
}