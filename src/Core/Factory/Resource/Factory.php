<?php

namespace App\Core\Factory\Resource;

use InvalidArgumentException;

class Factory implements FactoryInterface
{
    private ?string $className;

    public function __construct(?string $className)
    {
        $this->className = $className;
    }

    /**
     * @return mixed
     */
    public function createNew()
    {
        if (class_exists($this->className)) {
            return new $this->className;
        }

        throw new InvalidArgumentException(sprintf(
            'Invalid class given, cannot instantiate %s',
            $this->className
        ));
    }
}
