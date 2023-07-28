<?php

use PHPUnit\Framework\TestCase;

final class RegexExperimentTest extends TestCase
{
    public function testIsHello(): void
    {
        $this->assertEquals(true, RegexExperiment::isHello('Hello World'));
        $this->assertEquals(true, RegexExperiment::isHello('hello'));
        $this->assertEquals(false, RegexExperiment::isHello('Hi'));
    }

    public function testIsFullName(): void
    {
        $this->assertEquals(true, RegexExperiment::isFullName('Mrityunjay Kumar'));
        $this->assertEquals(true, RegexExperiment::isFullName('Manish Kumar Mishra'));
        $this->assertEquals(false, RegexExperiment::isFullName('Mrityunjay!'));
    }

    public function testIsPanValid(): void
    {
        $this->assertEquals(true, RegexExperiment::isPanValid('ABCDE1234Z'));
        $this->assertEquals(true, RegexExperiment::isPanValid('BAPMC3256W'));
        $this->assertEquals(false, RegexExperiment::isPanValid('12345ABCDE8'));
    }

    public function testValidEmail(): void
    {
        $this->assertEquals(true, RegexExperiment::validEmail('rajukumar@gmail.com'));
        $this->assertEquals(true, RegexExperiment::validEmail('raju_kumar@gmail.com'));
        $this->assertEquals(true, RegexExperiment::validEmail('raju.kumar@gmail.com'));
        $this->assertEquals(false, RegexExperiment::validEmail('raju kumar@gmail.com'));
    }
}