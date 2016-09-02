<?php

namespace Kraken\Console\Server;

use Kraken\Core\CoreInterface;
use Kraken\Runtime\Container\ProcessContainer;

class Server extends ProcessContainer implements ServerInterface
{
    /**
     * @override
     * @inheritDoc
     */
    protected function config(CoreInterface $core)
    {
        return [];
    }

    /**
     * @override
     * @inheritDoc
     */
    protected function boot(CoreInterface $core)
    {
        echo "Server is booting...\n";

        return $this;
    }

    /**
     * @override
     * @inheritDoc
     */
    protected function construct(CoreInterface $core)
    {
        echo "Server is up!\n";

        return $this;
    }
}