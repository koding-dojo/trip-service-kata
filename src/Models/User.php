<?php

namespace App\Models;

class User
{
    private array $trips;
    private array $friends;
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->trips = array();
        $this->friends = array();
    }

    public function getTrips()
    {
        return $this->trips;
    }

    public function getFriends()
    {
        return $this->friends;
    }

    public function addFriend(User $user)
    {
        $this->friends[] = $user;
    }

    public function addTrip(Trip $trip)
    {
        $this->trips[] = $trip;
    }
}
