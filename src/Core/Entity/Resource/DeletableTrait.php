<?php

namespace App\Core\Entity\Resource;

use DateTime;
use DateTimeInterface;

trait DeletableTrait
{
    /**
     * @var DateTimeInterface|null
     */
    public ?DateTimeInterface $deletedAt = null;

    /**
     * @return DateTimeInterface|null
     */
    public function getDeletedAt(): ?DateTimeInterface
    {
        return $this->deletedAt;
    }

    /**
     * @param DateTimeInterface|null $deletedAt
     */
    public function setDeletedAt(?DateTimeInterface $deletedAt): void
    {
        $this->deletedAt = $deletedAt;
    }

    public function delete(): void
    {
        $this->deletedAt = new DateTime;
    }
}
