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

    //создание двойника с помощью библиотеки Mockery
    public function testMockery()
    {
        //тестирование класса User и Db
        /*$db = Mockery::mock(\App\Models\Db::class);
        $db->shouldReceive('connect')
           ->once()
           ->andReturn(TRUE);

        $db->shouldReceive('query')
           ->once()
           ->andReturn(TRUE);

        $this->assertTrue($this->user->save($db));*/

        //тестирование класса observer
        $observer = Mockery::mock(\App\Models\UserObserver::class);
        $observer->shouldReceive('update')
                 //->with('update')
                 ->withArgs(function ($param){
                     $this->assertEquals('update', $param);
                     return true;
                 })
                 ->once();

        $this->user->attach($observer);
        $this->user->update();
    }

    //public function testObserver()
    //{
    //    $observer = $this->getMockBuilder(\App\Models\UserObserver::class)
    //                     ->onlyMethods(['update'])
    //                     ->getMock();
    //    //тестирование аргуметов метода
    //    $observer->expects($this->exactly(2))
    //             ->method('update')
    //             ->with($this->equalTo('update'));
    //
    //            /*->with(
    //                //$this->greaterThan()
    //                // $this->stringContains('upd')
    //                 $this->anything()
    //             );*/
    //
    //            /*->withConsecutive(
    //                [$this->stringContains('upd')],
    //                [$this->stringContains('upd')]
    //            );*/
    //
    //            /*->with($this->callback(function ($param){
    //                return 'update' == $param;
    //            }));*/
    //
    //    $this->user->attach($observer);
    //    $this->user->attach($observer);
    //    $this->user->update();
    //}

    /*public function testModel()
    {
        //создание двойника
        //$db = $this->createMock(\App\Models\Db::class);

        //создание двойника через конструктор
        $db = $this->getMockBuilder(\App\Models\Db::class)
            ->disableOriginalConstructor()
                //->enableOriginalConstructor()
            ->disableOriginalClone()
                //->enableOriginalClone()
            ->onlyMethods(['connect', 'query'])
                ->setMockClassName('Db')
            ->getMock();

        //$db = $this->createMock(\App\Models\Db::class);
        //$db->method('connect')->willReturn(true);
        //$db->method('query')->willReturn(true);

        $map = [
            ['localhost', 'user', 'pass', 'db', TRUE],
            ['externalHost', 'user', 'pass', 'db', true],
        ];

        $db->method('connect')->will(

            $this->returnValueMap($map)
        );

        $this->assertTrue($this->user->save($db));
    }*/

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

    /*public function testArray2()
    {
        $this->assertEquals(
            [12, 43, 65, 12, 34, 34, 34],
            [12, 43, 65, 12, 34, 34, 34]
        );
    }*/

    /* public function testGlobal1()
     {
         $tmp = $GLOBALS['someVariable'];
         $GLOBALS['someVariable'] = 'World';

         $this->assertEquals($tmp, 'Hello');
     }*/

    /* public function testGlobal2()
     {
         $tmp = $GLOBALS['someVariable'];
         $this->assertEquals($tmp, 'Hello');
     }*/

}
