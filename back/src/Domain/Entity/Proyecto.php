<?php

namespace Domain\Entity;

use Domain\ValueObject\ProyectoId;

class Proyecto
{
    private ProyectoId $id;
    private string $nombre;
    private string $descripcion;
    private string $estado; // Ej: "ACTIVO", "PAUSADO", "FINALIZADO"

    public function __construct(
        ProyectoId $id,
        string $nombre,
        string $descripcion,
        string $estado = 'ACTIVO'
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->estado = $estado;
    }

    // Getters
    public function id(): ProyectoId { return $this->id; }
    public function nombre(): string { return $this->nombre; }
    public function descripcion(): string { return $this->descripcion; }
    public function estado(): string { return $this->estado; }

    public function cambiarEstado(string $nuevoEstado): void
    {
        $valores = ['ACTIVO', 'PAUSADO', 'FINALIZADO'];
        if (!in_array($nuevoEstado, $valores, true)) {
            throw new \InvalidArgumentException("Estado inválido: $nuevoEstado");
        }
        $this->estado = $nuevoEstado;
    }
}
