<?php

namespace App\Api\Entity\Version;

use App\Core\Entity\Resource\DeletableInterface;
use App\Core\Entity\Resource\ResourceInterface;
use App\Core\Entity\Resource\TimestampableInterface;
use Doctrine\Common\Collections\Collection;

interface VersionInterface extends
    ResourceInterface,
    TimestampableInterface,
    DeletableInterface
{
    /**
     * @return int|null
     */
    public function getNumber(): ?int;

    /**
     * @param int|null $number
     */
    public function setNumber(?int $number): void;

    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void;

    /**
     * @return VersionItemInterface[]|Collection
     */
    public function getItems(): Collection;

    /**
     * @param VersionItemInterface[]|Collection $items
     */
    public function setItems(Collection $items): void;

    /**
     * @param VersionItemInterface $item
     * @return bool
     */
    public function hasItem(VersionItemInterface $item): bool;

    /**
     * @param VersionItemInterface $item
     */
    public function addItem(VersionItemInterface $item): void;

    /**
     * @param VersionItemInterface $item
     */
    public function removeItem(VersionItemInterface $item): void;
}
