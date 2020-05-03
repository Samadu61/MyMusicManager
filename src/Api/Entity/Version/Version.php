<?php

namespace App\Api\Entity\Version;

use App\Core\Entity\Resource\DeletableTrait;
use App\Core\Entity\Resource\ResourceTrait;
use App\Core\Entity\Resource\TimestampableTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Version implements VersionInterface
{
    use ResourceTrait, TimestampableTrait, DeletableTrait;

    /**
     * @var int|null
     */
    private ?int $number = null;

    /**
     * @var string|null
     */
    private ?string $name = null;

    /**
     * @var VersionItemInterface[]|Collection
     */
    private Collection $items;

    public function __construct()
    {
        $this->items = new ArrayCollection;
    }

    /**
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @param int|null $number
     */
    public function setNumber(?int $number): void
    {
        $this->number = $number;
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

    /**
     * @return VersionItemInterface[]|Collection
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    /**
     * @param VersionItemInterface[]|Collection $items
     */
    public function setItems(Collection $items): void
    {
        $this->items = $items;
    }

    /**
     * @param VersionItemInterface $item
     * @return bool
     */
    public function hasItem(VersionItemInterface $item): bool
    {
        return $this->items->contains($item);
    }

    /**
     * @param VersionItemInterface $item
     */
    public function addItem(VersionItemInterface $item): void
    {
        if (!$this->hasItem($item)) {
            $this->items->add($item);
            $item->setVersion($this);
        }
    }

    /**
     * @param VersionItemInterface $item
     */
    public function removeItem(VersionItemInterface $item): void
    {
        if ($this->hasItem($item)) {
            $this->items->removeElement($item);
            $item->setVersion(null);
        }
    }
}
