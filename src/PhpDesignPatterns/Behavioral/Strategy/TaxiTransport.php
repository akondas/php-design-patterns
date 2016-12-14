<?php
declare(strict_types=1);


namespace PhpDesignPatterns\Behavioral\Strategy;

class TaxiTransport implements TransportStrategy
{

    /**
     * @param User $user
     * @return TransportResult
     */
    public function transport(User $user): TransportResult
    {
        // TODO: Implement transport() method.
        return new TransportResult();
    }
}
