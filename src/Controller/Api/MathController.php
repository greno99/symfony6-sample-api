<?php declare(strict_types=1);

namespace App\Controller\Api;

use App\Math\Dto\ArithmeticDto;
use App\Math\Dto\FibonacciDto;
use App\Math\Dto\GeometricDto;
use App\Math\MathService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/math')]
class MathController extends AbstractController
{
    public function __construct(
        private readonly MathService $arithmeticService
    ){}

    #[Route('/arithmetic/start/{start}/increment/{step}/size/{size}', methods: ['GET'])]
    public function arithmeticSequence(int $start, int $step, int $size): JsonResponse
    {
        $arithmeticDto = new ArithmeticDto($start, $step, $size);
        $sequence = $this->arithmeticService->retrieveArithmeticSequenceWithArithmeticDto($arithmeticDto);

        return $this->json($sequence);
    }

    #[Route('/geometric/start/{start}/ratio/{ratio}/size/{size}', methods: ['GET'])]
    public function geometricSequence(int $start, float $ratio, int $size): JsonResponse
    {
        $arithmeticDto = new GeometricDto($start, $ratio, $size);
        $sequence = $this->arithmeticService->retrieveGeometricSequenceWithGeometricDto($arithmeticDto);

        return $this->json($sequence);
    }

    #[Route('/fibonacci/size/{size}', methods: ['GET'])]
    public function fibonacciSequence(int $size): JsonResponse
    {
        $fibonacciDto = new FibonacciDto($size);
        $sequence = $this->arithmeticService->retrieveFibonacciSequenceWithFibonacciDto($fibonacciDto);

        return $this->json($sequence);
    }
}