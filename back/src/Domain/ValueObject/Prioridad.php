<?php

namespace Domain\ValueObject;


/**
 * Clase que representa la prioridad de una tarea.
 * Las prioridades válidas son: BAJA, MEDIA, ALTA.
 */
class Prioridad
{
    private const VALID_PRIORITIES = ['BAJA', 'MEDIA', 'ALTA'];
    private string $value;

    /**
     * Constructor de la clase Prioridad.
     *
     * @param string $value La prioridad de la tarea, debe ser una de las constantes válidas.
     * @throws \InvalidArgumentException Si el valor no es una prioridad válida.
     */
    public function __construct(string $value)
    {
        $value = strtoupper($value);
        if (!in_array($value, self::VALID_PRIORITIES, true)) {
            throw new \InvalidArgumentException("Prioridad inválida: $value");
        }
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}
