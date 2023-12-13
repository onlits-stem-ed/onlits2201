<?php
namespace Onlits2201\MyTestFramework;

class TestCase
{
    static $status;
    public function assertTrue($bool)
    {
        if($bool == true)
            $this->status++;
        
    }

    
}