<?php

declare(strict_types=1);

namespace App\ProtocolArchitecture\SubscriptionBundle;

interface UserInterface
{
    public function id(): string;
    public function occupation(): string;
}
