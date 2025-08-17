<?php

namespace Domain\ValueObject\tarea;

use Symfony\Component\Uid\Uuid;

class ProyectoId
{
    private string $value;

    public function __construct(?string $value = null)
    {
        $this->value = $value ?? Uuid::v4()->toRfc4122();
    }

    public function __toString(): string
    {
        return $this->value;
    }
}

