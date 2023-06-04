<?php declare(strict_types=1);

namespace App\Math;

use App\Math\Dto\ArithmeticDto;
use App\Math\Dto\FibonacciDto;
use App\Math\Dto\GeometricDto;

class MathService
{
    public function retrieveArithmeticSequenceWithArithmeticDto(ArithmeticDto $arithmeticDto): array
    {
        $sequence = [];
        for ($i = 0; $i < $arithmeticDto->size(); $i++) {
            $sequence[] = $arithmeticDto->start() + $i * $arithmeticDto->increment();
        }

        return $sequence;
    }

    public function retrieveGeometricSequenceWithGeometricDto(GeometricDto $geometricDto): array
    {
        $result = [];
        $startNumber = $geometricDto->start();
        $ratio = $geometricDto->ratio();
        $size = $geometricDto->size();

        for ($i = 0; $i < $size; $i++) {
            $result[] = $startNumber * pow($ratio, $i);
        }

        return $result;
    }

    public function retrieveFibonacciSequenceWithFibonacciDto(FibonacciDto $fibonacciDto): array
    {
        if ($fibonacciDto->size() < 1) {
            return [0];
        }

        $fib = [0, 1];
        for ($i = 1; $i < ($fibonacciDto->size()-1); $i++) {
            $fib[] = $fib[$i] + $fib[$i - 1];
        }

        return $fib;
    }
}