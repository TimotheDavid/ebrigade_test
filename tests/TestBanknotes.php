<?php
use PHPUnit\Framework\TestCase;
require "../src/Banknot.php";




final class TestBanknotes extends TestCase {


    public function testBanknotes(): void  {

        $response = calculatebanknotes(110.2);


        $this->assertEquals([
            50 => 2,
            10 => 1,
            0.2 => 1
        ], $response);







    }




}