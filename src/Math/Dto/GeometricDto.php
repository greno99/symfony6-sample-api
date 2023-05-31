<?php declare(strict_types=1);

namespace App\Math\Dto;

class GeometricDto
{
    public function __construct(
        private readonly int $start,
        private readonly int $ratio,
        private readonly int $size
    ){}

    public function start(): int
    {
        return $this->start;
    }

    public function ratio(): int
    {
        return $this->ratio;
    }

    public function size(): int
    {
        return $this->size;
    }
}