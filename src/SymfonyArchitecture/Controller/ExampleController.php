<?php

declare(strict_types=1);

namespace App\SymfonyArchitecture\Controller;

use App\SymfonyArchitecture\Repository\ExampleRepository;

final class ExampleController
{
    public ExampleRepository $repository;

    public function __construct(ExampleRepository $repository)
    {
        $this->repository = $repository;
    }
}
