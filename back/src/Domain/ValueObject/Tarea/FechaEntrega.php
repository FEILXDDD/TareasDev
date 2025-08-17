<?php

namespace Domain\ValueObject\tarea;

use DateTimeImmutable;
use InvalidArgumentException;

/**
 * Clase que representa la fecha de entrega de una Tarea.
 * La fecha debe ser una fecha válida y no puede ser en el pasado.
 */
class FechaEntrega
{
    private \DateTimeImmutable $value;


    public function __construct(string $date)
    {
        $fecha = new DateTimeImmutable($date);
        if ($fecha < new DateTimeImmutable('today')) {
            throw new InvalidArgumentException("La fecha de entrega no puede ser en el pasado.");
        }
        $this->value = $fecha;
    }

    public function value(): DateTimeImmutable
    {
        return $this->value;
    }
}
