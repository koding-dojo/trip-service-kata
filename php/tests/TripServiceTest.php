<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\TripService;

class TripServiceTest extends TestCase
{
    private TripService $tripService;

    public function setUp(): void
    {
        $this->tripService = new TripService;
    }

    public function test_it_does_something() {
        self::fail('This tests has not been implemented yet.');
    }
}
