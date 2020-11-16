<?php

namespace App;

use App\Models\User;
use App\Exceptions\DependentClassCalledDuringUnitTestException;

class UserSession
{
    private static UserSession $userSession;

    public static function getInstance(): UserSession
    {
        if (null === static::$userSession) {
            static::$userSession = new UserSession();
        }

        return static::$userSession;
    }

    public function isUserLoggedIn(User $user): bool
    {
        throw new DependentClassCalledDuringUnitTestException(
            'UserSession.isUserLoggedIn() should not be called in an unit test'
        );
    }

    public function getLoggedUser(): User
    {
        throw new DependentClassCalledDuringUnitTestException(
            'UserSession.getLoggedUser() should not be called in an unit test'
        );
    }

}
