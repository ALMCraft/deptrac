<?php declare(strict_types=1);

namespace App\ProtocolArchitecture\UserBundle;

use App\ProtocolArchitecture\SubscriptionBundle\PrivateClass;
use App\ProtocolArchitecture\SubscriptionBundle\UserInterface;

final class UserImplementation implements UserInterface
{
    private PrivateClass $privateClass;

    public function __construct(PrivateClass $privateClass)
    {
        $this->privateClass = $privateClass;
    }

    public function id(): string
    {
        return "1";
    }

    public function occupation(): string
    {
        return "engineer";
    }
}
