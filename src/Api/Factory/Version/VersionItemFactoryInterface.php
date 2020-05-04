<?php

namespace App\Api\Factory\Version;

use App\Api\Entity\Version\VersionItemInterface;
use App\Core\Factory\Resource\FactoryInterface;

interface VersionItemFactoryInterface extends FactoryInterface
{
    /**
     * @return VersionItemInterface
     */
    public function createNew(): VersionItemInterface;
}
