<?php

namespace App\Tests\Math;

use App\Math\Dto\ArithmeticDto;
use App\Math\Dto\FibonacciDto;
use App\Math\Dto\GeometricDto;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class DtoTest extends TestCase
{
    public function testFibonacciDtoThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $fibonacciDto = new FibonacciDto(-1);
    }

    public function testGeometricDtoThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $geometricDto = new GeometricDto(1, 1, -1);
    }

    public function testArithmeticDtoThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $arithmeticDto = new ArithmeticDto(1, 1, -1);
    }
}
