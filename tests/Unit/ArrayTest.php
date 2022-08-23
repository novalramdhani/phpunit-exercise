<?php 

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    public function testIfArrayHasKey()
    {
        $array = [
            'name' => 'Noval Ramdhani',
            'email' => 'noval@dev.org'
        ];

        $this->assertArrayHasKey('email', $array);
    }
}