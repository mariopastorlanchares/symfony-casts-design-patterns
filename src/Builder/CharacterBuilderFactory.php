<?php

namespace App\Builder;

use Psr\Log\LoggerInterface;

class CharacterBuilderFactory
{

    public function __construct(private readonly LoggerInterface $logger)
    {
    }

    public function createBuilder(): CharacterBuilder
    {
        return new CharacterBuilder($this->logger);
    }


}
