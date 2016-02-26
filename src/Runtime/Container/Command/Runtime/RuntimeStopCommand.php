<?php

namespace Kraken\Runtime\Container\Command\Runtime;

use Kraken\Command\Command;
use Kraken\Command\CommandInterface;
use Kraken\Throwable\Exception\Runtime\Execution\RejectionException;

class RuntimeStopCommand extends Command implements CommandInterface
{
    /**
     * @param mixed[] $params
     * @return mixed
     * @throws RejectionException
     */
    protected function command($params = [])
    {
        if (!isset($params['alias']))
        {
            throw new RejectionException('Invalid params.');
        }

        return $this->runtime->manager()->stopRuntime($params['alias']);
    }
}