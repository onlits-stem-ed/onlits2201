<?php
require_once "./.config/bootstrap.php";

use contact_manager\user_controller;

$uri = $_SERVER['REQUEST_URI'];         //Reading URI's

//------------------ Routes ------------------------
switch($uri)
{
    case "/":
        require_once "./View/Home.php";
        break;
    case "/about-us":
        require_once "./View/AboutUs.php";
        break;
    case "/new-contact":
        require_once "./View/NewContact.php";
        break;
    case "/login":
        require_once "./View/Login.php";
        break;
    case "/authenticate":
        $user = new user_controller();
        $uid = "dictator";
        $pass = "dictator";
        $user->authenticate($uid, $pass);
        break;
    default:
        require "./View/404.php";
}
