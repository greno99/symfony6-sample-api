<?php

namespace App\Tests\Math;

use App\Math\Dto\ArithmeticDto;
use App\Math\Dto\FibonacciDto;
use App\Math\Dto\GeometricDto;
use App\Math\MathService;
use PHPUnit\Framework\TestCase;

class MathServiceTest extends TestCase
{
    public function testFibonacciArrayIsCorrectWithSizeIsTen(): void
    {
        $mathService = new MathService();
        $fibonacciDto = new FibonacciDto(10);
        $fibonacciArray = $mathService->retrieveFibonacciSequenceWithFibonacciDto($fibonacciDto);
        $this->assertEquals([0, 1, 1, 2, 3, 5, 8, 13, 21, 34], $fibonacciArray);
    }

    public function testFibonacciArrayIsCorrectWithSizeIsZero(): void
    {
        $mathService = new MathService();
        $fibonacciDto = new FibonacciDto(0);
        $fibonacciArray = $mathService->retrieveFibonacciSequenceWithFibonacciDto($fibonacciDto);
        $this->assertEquals([0], $fibonacciArray);
    }

    public function testFibonacciArrayIsCorrectWithSizeIsOne(): void
    {
        $mathService = new MathService();
        $fibonacciDto = new FibonacciDto(1);
        $fibonacciArray = $mathService->retrieveFibonacciSequenceWithFibonacciDto($fibonacciDto);
        $this->assertEquals([0, 1], $fibonacciArray);
    }

    public function testMathArithmeticArrayIsCorrect(): void
    {
        $mathService = new MathService();
        $arithmeticDto = new ArithmeticDto(1, 2, 10);
        $arithmeticArray = $mathService->retrieveArithmeticSequenceWithArithmeticDto($arithmeticDto);
        $this->assertEquals([1, 3, 5, 7, 9, 11, 13, 15, 17, 19], $arithmeticArray);
    }

    public function testGeometricArrayIsCorrect(): void
    {
        $mathService = new MathService();
        $geometricDto = new GeometricDto(1, 2, 10);
        $geometricArray = $mathService->retrieveGeometricSequenceWithGeometricDto($geometricDto);
        $this->assertEquals([1, 2, 4, 8, 16, 32, 64, 128, 256, 512], $geometricArray);
    }
}
