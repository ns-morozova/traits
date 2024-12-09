<?php
declare(strict_types=1);

class User {
    use AppUserAuthentication, MobileUserAuthentication {
        AppUserAuthentication::authenticate insteadof MobileUserAuthentication;
        MobileUserAuthentication::authenticate as mobileAuthenticate;
    }

    public function authenticateUser(string $login, string $password): void {
        $appAuthResult = $this->authenticate($login, $password);
        $mobileAuthResult = $this->mobileAuthenticate($login, $password);

        if (strpos($appAuthResult, 'успешно') !== false) {
            echo $appAuthResult . PHP_EOL;
        } elseif (strpos($mobileAuthResult, 'успешно') !== false) {
            echo $mobileAuthResult . PHP_EOL;
        } else {
            echo 'Ошибка авторизации.' . PHP_EOL;
        }
    }
}