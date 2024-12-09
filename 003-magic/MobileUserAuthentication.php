<?php
declare(strict_types=1);

trait MobileUserAuthentication {
    private string $mobileLogin = 'mobileUser';
    private string $mobilePassword = 'mobilePass';

    public function authenticate(string $login, string $password): string {
        if ($login === $this->mobileLogin && $password === $this->mobilePassword) {
            return 'Пользователь мобильного приложения успешно авторизован.';
        } else {
            return 'Ошибка авторизации пользователя мобильного приложения.';
        }
    }
}