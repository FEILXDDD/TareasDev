<?php

namespace Domain\Repository;

use Domain\Entity\Proyecto;
use Domain\ValueObject\tarea\ProyectoId;

interface ProyectoRepository
{
    public function save(Proyecto $proyecto): void;
    public function findById(ProyectoId $id): ?Proyecto;
    public function all(): array;
}
