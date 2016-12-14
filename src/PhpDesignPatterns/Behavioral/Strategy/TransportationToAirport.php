<?php
declare(strict_types=1);


namespace PhpDesignPatterns\Behavioral\Strategy;

class TransportationToAirport
{

    /**
     * @var TransportStrategy
     */
    private $strategy;

    /**
     * @param TransportStrategy $strategy
     */
    public function __construct(TransportStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @param User $user
     * @return TransportResult
     */
    public function run(User $user): TransportResult
    {
        return $this->strategy->transport($user);
    }
}
