<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Trip;
use App\Exceptions\DependentClassCalledDuringUnitTestException;

class TripsRepository
{
    /**
     * @param User $user
     * @return Trip[]
     * @throws DependentClassCalledDuringUnitTestException
     */
    public static function findTripsByUser(User $user): array
    {
        throw new DependentClassCalledDuringUnitTestException('TripDAO should not be invoked on an unit test.');
    }
}
