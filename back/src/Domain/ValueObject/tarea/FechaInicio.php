<?php

namespace Domain\ValueObject\tarea;

/**
 * Clase que representa la fecha de inicio de una tarea.
 * La fecha debe ser una fecha válida y no puede ser en el futuro.
 */
class FechaInicio
{
    private \DateTimeImmutable $value;

    public function __construct(string $date)
    {
        $fecha = new \DateTimeImmutable($date);
        $hoy = new \DateTimeImmutable('today');
        if ($fecha > $hoy) {
            throw new \InvalidArgumentException("La fecha de inicio no puede ser en el futuro.");
        }

        $this->value = $fecha;
    }

    public function value(): \DateTimeImmutable
    {
        return $this->value;
    }
}