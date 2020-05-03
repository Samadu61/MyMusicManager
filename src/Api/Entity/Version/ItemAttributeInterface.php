<?php

namespace App\Api\Entity\Version;

use App\Core\Entity\Resource\DeletableInterface;
use App\Core\Entity\Resource\ResourceInterface;
use App\Core\Entity\Resource\TimestampableInterface;

interface ItemAttributeInterface extends
    ResourceInterface,
    TimestampableInterface,
    DeletableInterface
{
    /**
     * @return VersionItemInterface|null
     */
    public function getVersionItem(): ?VersionItemInterface;

    /**
     * @param VersionItemInterface|null $versionItem
     */
    public function setVersionItem(?VersionItemInterface $versionItem): void;

    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void;
}
