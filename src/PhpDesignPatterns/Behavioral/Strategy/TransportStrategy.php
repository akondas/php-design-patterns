<?php
declare(strict_types=1);

namespace PhpDesignPatterns\Behavioral\Strategy;

interface TransportStrategy
{
    /**
     * @param User $user
     * @return TransportResult
     */
    public function transport(User $user): TransportResult;
}
