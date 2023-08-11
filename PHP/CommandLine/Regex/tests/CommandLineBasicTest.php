<?php

use PHPUnit\Framework\TestCase;

final class CommandlineBasicTest extends TestCase
{
    public function testAdd1(): void
    {
        $addition = new Addition();
        $this->assertEquals(30, $addition->add(10, 20));
    }

    public function testAdd2(): void
    {
        $addition = new Addition();
        $this->assertEquals(300, $addition->add(100, 200));
    }
}