<?php

namespace App\Api\Factory\Version;

use App\Api\Entity\Version\VersionItemInterface;
use App\Core\Factory\Resource\FactoryInterface;

class VersionItemFactory implements VersionItemFactoryInterface
{
    /**
     * @var FactoryInterface
     */
    private FactoryInterface $decoratedFactory;

    public function __construct(FactoryInterface $decoratedFactory)
    {
        $this->decoratedFactory = $decoratedFactory;
    }

    /**
     * @return VersionItemInterface
     */
    public function createNew(): VersionItemInterface
    {
        /** @var VersionItemInterface $item */
        $item = $this->decoratedFactory->createNew();

        return $item;
    }
}
