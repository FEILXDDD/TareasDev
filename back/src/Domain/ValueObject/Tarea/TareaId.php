<?php

namespace Domain\ValueObject\tarea;

use Symfony\Component\Uid\Uuid;

/**
 * Clase que representa el identificador único de una Tarea.
 * Utiliza UUID para garantizar la unicidad.
 */
class TareaId
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
