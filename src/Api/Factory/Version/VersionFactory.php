<?php

namespace App\Api\Factory\Version;

use App\Api\Entity\Version\VersionInterface;
use App\Core\Factory\Resource\FactoryInterface;

class VersionFactory implements VersionFactoryInterface
{
    /**
     * @var FactoryInterface|null
     */
    private ?FactoryInterface $decoratedFactory = null;

    public function __construct(FactoryInterface $decoratedFactory)
    {
        $this->decoratedFactory = $decoratedFactory;
    }

    /**
     * @return VersionInterface
     */
    public function createNew(): VersionInterface
    {
        /** @var VersionInterface $version */
        $version = $this->decoratedFactory->createNew();

        return $version;
    }
}
