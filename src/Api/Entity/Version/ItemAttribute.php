<?php

namespace App\Api\Entity\Version;

use App\Core\Entity\Resource\DeletableTrait;
use App\Core\Entity\Resource\ResourceTrait;
use App\Core\Entity\Resource\TimestampableTrait;

class ItemAttribute implements ItemAttributeInterface
{
    use ResourceTrait, TimestampableTrait, DeletableTrait;

    /**
     * @var VersionItemInterface|null
     */
    private ?VersionItemInterface $versionItem;

    /**
     * @var string|null
     */
    private ?string $name = null;

    /**
     * @return VersionItemInterface|null
     */
    public function getVersionItem(): ?VersionItemInterface
    {
        return $this->versionItem;
    }

    /**
     * @param VersionItemInterface|null $versionItem
     */
    public function setVersionItem(?VersionItemInterface $versionItem): void
    {
        $this->versionItem = $versionItem;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}
