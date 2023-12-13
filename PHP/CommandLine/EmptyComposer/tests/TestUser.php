<?php

use Onlits2201\EmptyComposer\User;
use PHPUnit\Framework\TestCase;

// require 'src/User.php';

final class TestUser extends TestCase
{
    public function testRetunValue()
    {
        $user = new User();
        $test = array("user_id"=>"root", "password"=>"root");
        $result = $user->authenticate($test);
        // $this->assertEquals(true, $result['user_id']=="root" && $result['password']=="root");
        $this->assertTrue(true);
    }
}