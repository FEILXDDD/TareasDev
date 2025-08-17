<?php

namespace Domain\Entity;

use Domain\ValueObject\TareaId;
use Domain\ValueObject\FechaEntrega;
use Domain\ValueObject\Prioridad;
use Domain\ValueObject\Estado;

class Tarea
{
    private TareaId $id;
    private string $titulo;
    private string $descripcion;
    private Estado $estado;
    private Prioridad $prioridad;
    private ?FechaEntrega $fechaEntrega;
    private bool $completada;


    public function __construct(
        TareaId $id,
        string $titulo,
        string $descripcion,
        Estado $estado,
        Prioridad $prioridad,
        ?FechaEntrega $fechaInicio = null,
        ?FechaEntrega $fechaEntrega = null
    ) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->estado = $estado;
        $this->prioridad = $prioridad;
        $this->fechaEntrega = $fechaInicio;
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
    public function fechaEntrega(): ?FechaEntrega {
        return $this->fechaEntrega;
    }
}
