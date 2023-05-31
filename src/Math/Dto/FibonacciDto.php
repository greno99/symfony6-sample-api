<?php declare(strict_types=1);

namespace App\Math\Dto;

use InvalidArgumentException;

class FibonacciDto
{
    private int $size;

    public function __construct(int $size)
    {
        $this->ensureSizeIsPositive($size);
        $this->size = $size;
    }

    public function size(): int
    {
        return $this->size;
    }

    private function ensureSizeIsPositive(int $size): void
    {
        if ($size < 0) {
            throw new InvalidArgumentException('Size must be positive');
        }
    }
}