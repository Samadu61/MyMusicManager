<?php

namespace App\Core\Entity\Resource;

use DateTimeInterface;

interface TimestampableInterface
{
    /**
     * @return DateTimeInterface|null
     */
    public function getCreatedAt(): ?DateTimeInterface;

    /**
     * @param DateTimeInterface|null $date
     */
    public function setCreatedAt(?DateTimeInterface $date): void;

    public function create(): void;

    /**
     * @return DateTimeInterface|null
     */
    public function getUpdatedAt(): ?DateTimeInterface;

    /**
     * @param DateTimeInterface|null $date
     */
    public function setUpdatedAt(?DateTimeInterface $date): void;

    public function update(): void;
}
