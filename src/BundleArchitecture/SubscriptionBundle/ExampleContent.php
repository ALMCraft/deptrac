<?php

declare(strict_types=1);

namespace App\BundleArchitecture\SubscriptionBundle;

use \App\BundleArchitecture\UserBundle\ExampleContent as UserExampleBundle;

final class ExampleContent
{
    private UserExampleBundle $exampleFromUserBundle;

    public function __construct(UserExampleBundle $exampleFromUserBundle)
    {
        $this->exampleFromUserBundle = $exampleFromUserBundle;
    }
}
