<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private $user;

    protected function setUp(): void
    {
        $this->user = new \App\Models\User();
        $this->user->setAge(33);
    }

    protected function tearDown(): void
    {

    }

    /*public function testEcho()
    {
        $this->expectOutputString('success');
        $this->setOutputCallback(function ($str) {
            return trim($str);
        });

        //$this->expectOutputRegex("/\d/");
        echo 'success';
    }*/

    /*public function testArray()
    {
        $this->assertSame(
            [12, 43, 65, 12, 34, 3423, 34, 12, 231],
            [12, 43, 65, 12, 34, 34, 34]
        );
    }*/

    public function testArray()
    {
        $this->assertEquals(
            [12, 43, 65, 12, 34, 34, 34],
            [12, 43, 65, 12, 34, 34, 34]
        );
    }


}
