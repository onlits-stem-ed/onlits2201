<?php

namespace Onlits2201\EmptyComposer\TestUser;

use Onlits2201\EmptyComposer\User;

require 'src/autoload.php';

class TestUser
{
    public function testUser()
    {
        $user = new User();

        // Test Case 1
        $test = array("user_id"=>"root", "password"=>"root");
        $result = $user->authenticate($test);
        if($result['user_id']=="root" && $result['password']=="root")
            echo "Test1 passed!\n";
        else
            echo "Test1 failed!\n";

        // Test Case 1
        $test = array("user_id"=>"admin", "password"=>"admin");
        $result = $user->authenticate($test);
        if($result['user_id']=="admin" && $result['password']=="admin")
            echo "Test2 passed!\n";
        else
            echo "Test2 failed!\n";
    }
}

$testuser = new TestUser();
$testuser->testUser();

// Our own assertion using inheritance - Make assertions in base class use them in derived.