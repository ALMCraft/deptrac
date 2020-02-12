<?php

declare(strict_types=1);

namespace App\MixedArchitecture\SubscriptionBundle\Controller;

use App\MixedArchitecture\SubscriptionBundle\Service\ExampleService;
use App\MixedArchitecture\UserBundle\Service\ExampleService as UserExampleService;

final class ExampleController
{
    private ExampleService $exampleService;
    private UserExampleService $userExampleService;

    public function __construct(
        ExampleService $exampleService,
        UserExampleService $userExampleService)
    {
        $this->exampleService = $exampleService;
        $this->userExampleService = $userExampleService;
    }
}
