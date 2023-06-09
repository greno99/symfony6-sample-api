<?php declare(strict_types=1);

namespace App\Math\Dto;

class GeometricDto
{
    private int $size;

    public function __construct(
        private readonly int $start,
        private readonly float $ratio,
        int $size
    ){
        $this->ensureSizeIsPositive($size);
        $this->size = $size;
    }

    public function start(): int
    {
        return $this->start;
    }

    public function ratio(): float
    {
        return $this->ratio;
    }

    public function size(): int
    {
        return $this->size;
    }

    private function ensureSizeIsPositive($size): void
    {
        if ($size < 0) {
            throw new \InvalidArgumentException('Size must be positive');
        }
    }
}