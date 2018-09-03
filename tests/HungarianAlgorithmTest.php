<?php

namespace HungarianTest;


use Hungarian\Hungarian;
use PHPUnit\Framework\TestCase;

class HungarianAlgorithmTest extends TestCase
{

    /**
     * @test
     */
    public function it_solves_hungarian_min()
    {
        $matrix = [
            [1, 2, 3, 0, 1],
            [0, 3, 12, 1, 1],
            [3, 0, 1, 13, 1],
            [3, 1, 1, 12, 0],
            [3, 1, 1, 12, 0],
        ];

        $hungarian = new Hungarian($matrix);
        $solved = $hungarian->solveMin();
        $this->assertArraySubset([
            3,
            0,
            1,
            4,
            2,
        ], $solved);
    }
}