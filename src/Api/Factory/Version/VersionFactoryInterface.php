<?php

namespace App\Api\Factory\Version;

use App\Api\Entity\Version\VersionInterface;
use App\Core\Factory\Resource\FactoryInterface;

interface VersionFactoryInterface extends FactoryInterface
{
    /**
     * @return VersionInterface
     */
    public function createNew(): VersionInterface;
}
