<?php

namespace App\Core\Entity\Resource;

use DateTime;
use DateTimeInterface;

trait TimestampableTrait
{
    /**
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $createdAt = null;

    /**
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $updatedAt = null;

    /**
     * @return DateTimeInterface|null
     */
    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param DateTimeInterface|null $createdAt
     */
    public function setCreatedAt(?DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function create(): void
    {
        $this->createdAt = new DateTime;
        $this->update();
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTimeInterface|null $updatedAt
     */
    public function setUpdatedAt(?DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function update(): void
    {
        $this->updatedAt = new DateTime;;
    }
}
