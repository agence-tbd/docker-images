<?php

namespace Kiboko\Cloud\Domain\Packaging\CommandBus;

interface CommandRunnerInterface
{
    public function run(CommandBusInterface $commandBus, string $rootPath);
}
