<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use hostelnew\room\room;

include 'src/requires.php';

final class RoomTest extends TestCase
{
    public function test_index()
    {
        $room = new room();
        $this->assertSame("Done!", $room->index());
    }
}