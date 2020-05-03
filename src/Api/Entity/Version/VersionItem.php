<?php

namespace App\Api\Entity\Version;

use App\Core\Entity\Resource\DeletableTrait;
use App\Core\Entity\Resource\ResourceTrait;
use App\Core\Entity\Resource\TimestampableTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class VersionItem implements VersionItemInterface
{
    use ResourceTrait, TimestampableTrait, DeletableTrait;

    /**
     * @var VersionInterface|null
     */
    private ?VersionInterface $version = null;

    /**
     * @var string|null
     */
    private ?string $name = null;

    /**
     * @var string|null
     */
    private ?string $model = null;

    /**
     * @var ItemAttributeInterface[]|Collection
     */
    public Collection $attributes;

    public function __construct()
    {
        $this->attributes = new ArrayCollection;
    }

    /**
     * @return VersionInterface|null
     */
    public function getVersion(): ?VersionInterface
    {
        return $this->version;
    }

    /**
     * @param VersionInterface|null $version
     */
    public function setVersion(?VersionInterface $version): void
    {
        $this->version = $version;
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
     * @return string|null
     */
    public function getModel(): ?string
    {
        return $this->model;
    }

    /**
     * @param string|null $model
     */
    public function setModel(?string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return ItemAttributeInterface[]|Collection
     */
    public function getAttributes(): Collection
    {
        return $this->attributes;
    }

    /**
     * @param ItemAttributeInterface[]|Collection $attributes
     */
    public function setAttributes(Collection $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @param ItemAttributeInterface $attribute
     * @return bool
     */
    public function hasAttribute(ItemAttributeInterface $attribute): bool
    {
        return $this->attributes->contains($attribute);
    }

    /**
     * @param ItemAttributeInterface $attribute
     */
    public function addAttribute(ItemAttributeInterface $attribute): void
    {
        if (!$this->hasAttribute($attribute)) {
            $this->attributes->add($attribute);
            $attribute->setVersionItem($this);
        }
    }

    /**
     * @param ItemAttributeInterface $attribute
     */
    public function removeAttribute(ItemAttributeInterface $attribute): void
    {
        if ($this->hasAttribute($attribute)) {
            $this->attributes->removeElement($attribute);
            $attribute->setVersionItem(null);
        }
    }
}
