<?php
use PHPUnit\Framework\TestCase;
use App\DNI;

class DNITest extends TestCase {
    
    public function testCalcularDNIConLetra() {
        $dni = new DNI(12345678);
        $this->assertEquals("12345678Z", $dni->getDNIConLetra());
    }
}