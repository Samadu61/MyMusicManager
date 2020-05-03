<?php

namespace App\Api\Entity\Version;

use App\Core\Entity\Resource\DeletableInterface;
use App\Core\Entity\Resource\ResourceInterface;
use App\Core\Entity\Resource\TimestampableInterface;
use Doctrine\Common\Collections\Collection;

interface VersionItemInterface extends
    ResourceInterface,
    TimestampableInterface,
    DeletableInterface
{
    /**
     * @return VersionInterface|null
     */
    public function getVersion(): ?VersionInterface;

    /**
     * @param VersionInterface|null $version
     */
    public function setVersion(?VersionInterface $version): void;

    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void;

    /**
     * @return string|null
     */
    public function getModel(): ?string;

    /**
     * @param string|null $model
     */
    public function setModel(?string $model): void;

    /**
     * @return ItemAttributeInterface[]|Collection
     */
    public function getAttributes(): Collection;

    /**
     * @param ItemAttributeInterface[]|Collection $attributes
     */
    public function setAttributes(Collection $attributes): void;

    /**
     * @param ItemAttributeInterface $attribute
     * @return bool
     */
    public function hasAttribute(ItemAttributeInterface $attribute): bool;

    /**
     * @param ItemAttributeInterface $attribute
     */
    public function addAttribute(ItemAttributeInterface $attribute): void;

    /**
     * @param ItemAttributeInterface $attribute
     */
    public function removeAttribute(ItemAttributeInterface $attribute): void;
}
