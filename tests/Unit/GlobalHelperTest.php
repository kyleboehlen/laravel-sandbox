<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class GlobalHelperTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_convert_base_number(): void
    {
        $this->assertEquals(convertBaseNum(2, [1], 10), [1]);
        $this->assertEquals(convertBaseNum(2, [1, 0, 1], 10), [5]);
        $this->assertEquals(convertBaseNum(10, [5], 2), [1, 0, 1]);
        $this->assertEquals(convertBaseNum(2, [1, 0, 1, 0, 1, 0], 10), [4, 2]);
        $this->assertEquals(convertBaseNum(10, [4, 2], 2), [1, 0, 1, 0, 1, 0]);
        $this->assertEquals(convertBaseNum(3, [1, 1, 2, 0], 16), [2, 10]);
        $this->assertEquals(convertBaseNum(16, [2, 10], 3), [1, 1, 2, 0]);
        $this->assertEquals(convertBaseNum(97, [3, 46, 60], 73), [6, 10, 45]);
        $this->assertEquals(convertBaseNum(2, [], 10), [0]);
        $this->assertEquals(convertBaseNum(10, [0], 2), [0]);
        $this->assertEquals(convertBaseNum(10, [0, 0, 0], 2), [0]);
        $this->assertEquals(convertBaseNum(7, [0, 6, 0], 10), [4, 2]);
        $this->assertFalse(convertBaseNum(1, [0], 10));
        $this->assertFalse(convertBaseNum(0, [], 10));
        $this->assertFalse(convertBaseNum(-2, [1], 10));
        $this->assertFalse(convertBaseNum(2, [1, -1, 1, 0, 1, 0], 10));
        $this->assertFalse(convertBaseNum(2, [1, 2, 1, 0, 1, 0], 10));
        $this->assertFalse(convertBaseNum(2, [1, 0, 1, 0, 1, 0], 1));
        $this->assertFalse(convertBaseNum(10, [7], 0));
        $this->assertFalse(convertBaseNum(2, [1], -7));
        $this->assertFalse(convertBaseNum(-2, [1], -7));
    }
}
