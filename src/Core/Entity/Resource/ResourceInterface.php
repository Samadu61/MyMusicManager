<?php

namespace App\Core\Entity\Resource;

interface ResourceInterface
{
    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void;
}
