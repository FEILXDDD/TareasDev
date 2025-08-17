<?php

namespace Domain\Repository;

use Domain\Entity\Tarea;
use Domain\ValueObject\TareaId;

interface TareaRepository
{
    public function save(Tarea $tarea): void;
    public function findById(TareaId $id): ?Tarea;
    public function all(): array;
}
