<?php declare(strict_types=1);

namespace hostelnew\room;

require_once 'src/requires.php';

class room
{
    private $connection;
    public function __construct() {
        $this->connection = new \mysqli(SERVER, USERNAME, PASSWORD);
    }      
    public function index()
    {
        return "Done!";
    }

    public function details($id)
    {

    }

    public function create()
    {

    }

    public function edit($id)
    {

    }

    public function delete($id)
    {

    }
}