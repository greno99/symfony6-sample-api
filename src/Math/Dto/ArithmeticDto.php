<?php declare(strict_types=1);

namespace App\Math\Dto;

class ArithmeticDto
{
    private int $size;

    public function __construct(
        private readonly int $start,
        private readonly int $increment,
        int $size
    ){
        $this->ensureSizeIsPositive($size);
        $this->size = $size;
    }

    public function start(): int
    {
        return $this->start;
    }

    public function increment(): int
    {
        return $this->increment;
    }

    public function size(): int
    {
        return $this->size;
    }

    private function ensureSizeIsPositive(int $size): void
    {
        if ($size < 0) {
            throw new \InvalidArgumentException('Size must be positive');
        }
    }
}