<?php
namespace contact_manager;

class user_controller
{
    function authenticate(string $uid, string $pass)
    {
        $params = array($uid, $pass);
        $user = DB::select("SELECT user_id FROM user WHERE user_id=? AND password=PASSWORD(?)", $params);
        if(isset($user)) {
            echo "User " . $user[0][0] . " has logged-in successfully!\n";
        }
    }
}

// $user = new user_controller();
// $uid = "dictator";
// $pass = "dictator";
// $user->authenticate($uid, $pass);