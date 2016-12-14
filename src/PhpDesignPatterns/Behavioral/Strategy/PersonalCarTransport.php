<?php
declare(strict_types=1);


namespace PhpDesignPatterns\Behavioral\Strategy;

class PersonalCarTransport implements TransportStrategy
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
