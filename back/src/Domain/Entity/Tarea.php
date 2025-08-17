<?php

namespace Domain\Entity;

use Domain\ValueObject\tarea\Estado;
use Domain\ValueObject\tarea\FechaEntrega;
use Domain\ValueObject\tarea\FechaInicio;
use Domain\ValueObject\tarea\Prioridad;
use Domain\ValueObject\tarea\TareaId;

/**
 * Clase que representa una tarea en el sistema.
 * Contiene información sobre el título, descripción, estado, prioridad y fechas de inicio y entrega.
 */
class Tarea
{
    private TareaId $id;
    private string $titulo;
    private string $descripcion;
    private Estado $estado;
    private Prioridad $prioridad;
    private ?FechaInicio $fechaInicio;
    private ?FechaEntrega $fechaEntrega;


    public function __construct(
        TareaId $id,
        string $titulo,
        string $descripcion,
        Estado $estado,
        Prioridad $prioridad,
        ?FechaInicio $fechaInicio = null,
        ?FechaEntrega $fechaEntrega = null
    ) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->estado = $estado;
        $this->prioridad = $prioridad;
        $this->fechaInicio = $fechaInicio;
        $this->fechaEntrega = $fechaEntrega;
    }



    // Getters
    public function id(): TareaId {
        return $this->id;
    }
    public function titulo(): string {
        return $this->titulo;
    }
    public function descripcion(): string {
        return $this->descripcion;
    }
    public function estado(): Estado {
        return $this->estado;
    }
    public function prioridad(): Prioridad {
        return $this->prioridad;
    }
    public function fechaInicio(): ?FechaInicio {
        return $this->fechaInicio;
    }
    public function fechaEntrega(): ?FechaEntrega {
        return $this->fechaEntrega;
    }
}
