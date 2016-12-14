<?php

declare(strict_types=1);

namespace tests\PhpDesignPatterns\Behavioral;

use PhpDesignPatterns\Behavioral\Strategy\CityBusTransport;
use PhpDesignPatterns\Behavioral\Strategy\PersonalCarTransport;
use PhpDesignPatterns\Behavioral\Strategy\TaxiTransport;
use PhpDesignPatterns\Behavioral\Strategy\TransportationToAirport;
use PhpDesignPatterns\Behavioral\Strategy\TransportResult;
use PhpDesignPatterns\Behavioral\Strategy\User;

class StrategyTest extends \PHPUnit_Framework_TestCase
{
    public function testCityBusTransportationStrategy()
    {
        $user = new User();
        $transportation = new TransportationToAirport(new CityBusTransport());

        $result = $transportation->run($user);

        $this->assertInstanceOf(TransportResult::class, $result);
    }

    public function testTaxiTransportationStrategy()
    {
        $user = new User();
        $transportation = new TransportationToAirport(new TaxiTransport());

        $result = $transportation->run($user);

        $this->assertInstanceOf(TransportResult::class, $result);
    }

    public function testPersonalCarTransportationStrategy()
    {
        $user = new User();
        $transportation = new TransportationToAirport(new PersonalCarTransport());

        $result = $transportation->run($user);

        $this->assertInstanceOf(TransportResult::class, $result);
    }
}
