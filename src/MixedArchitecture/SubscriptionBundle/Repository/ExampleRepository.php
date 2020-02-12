<?php

declare(strict_types=1);

namespace App\MixedArchitecture\SubscriptionBundle\Repository;

use App\MixedArchitecture\SubscriptionBundle\Service\ExampleService;

final class ExampleRepository
{
    private ExampleService $exampleService;

    public function __construct(ExampleService $exampleService)
    {
        $this->exampleService = $exampleService;
    }
}
