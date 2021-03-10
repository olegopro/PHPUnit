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

    public function testAssert()
    {
        //проварка на срванение ключей массива
        //self::assertArrayHasKey();
        //self::assertArrayNotHasKey();
        //$this->assertArrayHasKey('key', ['key' => 33]);

        //проверка на существование свойства в классе
        //self::assertClassHasAttribute();
        //self::assertClassNotHasAttribute();
        //$this->assertClassHasAttribute('age', \App\Models\User::class);

        //проверка на существование статического свойства
        //self::assertClassHasStaticAttribute();
        //self::assertClassHasNotStaticAttribute();

        //проверка на наличие элемента в массиве
        //self::assertContains();
        //self::assertNotContains();
        //$this->assertContains(4, [1, 2, 3, 4]);

        //проверка на значение типа
        //self::assertContainsOnly();
        //self::assertNotContainsOnly();
        //$this->assertContainsOnly('string', ['query']);

        //проверка на наличие экземпляра класса
        //self::assertContainsOnlyInstancesOf();
        //$this->assertContainsOnlyInstancesOf(\App\Models\User::class, [$this->user]);

        //проверка кол-ва аргументов/элементов массива
        //self::assertCount();
        //self::assertNotCount();
        //$this->assertCount(2 , [1,2]);

        //проверка на существование директории
        //self::assertDirectoryExists();
        //self::assertNotDirectoryExists();

        //проверка на существование файла
        //self::assertFileExists();
        //self::assertFileNotExists();

        //проверка директории на чтение
        //self::assertDirectoryIsReadable();
        //self::assertDirectoryIsNotReadable();

        //проверка директории на запись
        //self::assertDirectoryIsWritable();
        //self::assertDirectoryIsNotReadable();

        //проверка файла на чтение
        //self::assertFileIsReadable();
        //self::assertFileIsNotReadable();

        //проверка файла на запись
        //self::assertFileIsWritable();
        //self::assertFileIsNotReadable();

        //проверка файла/папки на чтение
        //self::assertIsReadable();
        //self::assertIsNotReadable();

        //проверка файла/папки на запись
        //self::assertIsWritable();
        //self::assertIsNotWritable();

        //проверка равенства содержимого файлов
        //self::assertFileEquals();
        //self::assertFileNotEquals();
        //$this->assertFileEquals('file1', 'file2');

        //проверка на пустое значение
        //self::assertEmpty();
        //self::assertNotEmpty();
        //$this->assertEmpty('');

        //*проверка двух значений на равенство
        //self::assertEquals();
        //self::assertNotEquals();
        //$this->assertEquals('qwerty','qwerty');

        //*проверка двух значений на равенство
        //self::assertSame();
        //self::assertNotSame(;
        //$this->assertSame('123','123');

        //проверка входящего значения на false
        //self::assertFalse();
        //self::assertNotFalse();

         //проверка входящего значения на true
        //self::assertTrue();
        //self::assertNotTrue();

        //проверка на большее значение
        //self::assertGreaterThan();
        //self::assertGreaterNotThan();
        //$this->assertGreaterThan(1, 2);

        //проверка на меньшее значение
        //self::assertLessThan();
        //$this->assertLessThan(3, 2);

        //проверка значения больше/равно
        //self::assertGreaterThanOrEqual();

        //проверка значения меньше/равно
        //self::>assertLessThanOrEqual();

        //проверка на бесконечность
        //self::assertInfinite();
        //self::assertFinite();

        //проверка на соответствие имени экземпляра класса
        //self::assertInstanceOf();
        //self::assertNotInstanceOf();
        //$this->assertInstanceOf(\App\Models\User::class, $this->user);

        //проверяет на тип 'int'
        //self::assertIsInt();
        //self::assertIsNotInt();

        //проверяет на тип 'string'
        //self::assertIsString();
        //self::assertIsNotString();

        //проверяет на тип 'array'
        //self::assertIsArray();
        //self::assertIsNotArray();

        //проверка на тип 'object'
        //self::assertIsObject();
        //self::assertIsNotObject();

        //проверяет на true/false
        //self::assertIsBool();
        //self::assertIsNotBool();

        //проверяет на тип 'Nan' (не число)
        //self::assertNan();

        //проверяет на тип 'Null'
        //self::assertNull();
        //self::assertNotNull();

        //проверка на перечисляемый тип данных (для foreach)
        //self::assertIsIterable();
        //self::assertIsNotIterable();
        //$this->assertIsIterable([1,2,3]);

        //проверка строки на содержание числа
        //self::assertIsNumeric();
        //self::assertIsNotNumeric();

        //проверка на тип 'resource' (подключение к mysql или окрытый файл)
        //self::assertIsResource();
        //self::assertIsNotResource();

        //проверка на регулярные выражения
        //self::assertMatchesRegularExpression();
        //$this->assertMatchesRegularExpression('/string/', 'string 123');

        //проверка соответствия формата строки ()

        //%e: Представляет разделитель каталогов, например / в Linux.
        //%s: Один или несколько чего-либо (символ или пробел), кроме символа конца строки.
        //%S: Ноль или более чего-либо (символ или пробел), кроме символа конца строки.
        //%a: Один или несколько чего-либо (символ или пробел), включая символ конца строки.
        //%A: Ноль или более чего-либо (символ или пробел), включая символ конца строки.
        //%w: Ноль или более символов пробела.
        //%i: Целое число со знаком, например +3142, -3142.
        //%d: Целое число без знака, например 123456.
        //%x: Один или более шестнадцатеричного символа. То есть, символы в диапазоне 0-9, a-f, A-F.
        //%f: Число с плавающей точкой, например: 3.142, -3.142, 3.142E-10, 3.142e+10.
        //%c: Один символ любого типа.
        //%%: Буквальный символ процента: %.

        //self::assertStringMatchesFormat();
        //$this->assertStringMatchesFormat('%c', 1);

        //проверка начала строки на соответствие (суффикс)
        //self::assertStringStartsWith();
        //self::assertStringStartsNotWith();
        //$this->assertStringStartsWith('suffix', 'suffixSomeText');

        //проверка конца строки на соответствие (суффикс)
        //self::assertStringEndsWith();
        //self::assertStringEndsNotWith();
        //$this->assertStringEndsWith('Suffix', 'SomeTextSuffix');


    }

    //создание двойника с помощью библиотеки Mockery
    //public function testMockery()
    //{
    //    //тестирование класса User и Db
    //    /*$db = Mockery::mock(\App\Models\Db::class);
    //    $db->shouldReceive('connect')
    //       ->once()
    //       ->andReturn(TRUE);
    //
    //    $db->shouldReceive('query')
    //       ->once()
    //       ->andReturn(TRUE);
    //
    //    $this->assertTrue($this->user->save($db));*/
    //
    //    //тестирование класса observer
    //    $observer = Mockery::mock(\App\Models\UserObserver::class);
    //    $observer->shouldReceive('update')
    //             //->with('update')
    //             ->withArgs(function ($param){
    //                 $this->assertEquals('update', $param);
    //                 return true;
    //             })
    //             ->once();
    //
    //    $this->user->attach($observer);
    //    $this->user->update();
    //}

    //проверка состяния наблюдателя с использованием класса двойника
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

    //проверка модели с использованием класса двойника
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

    //проверка вывода на экран
    /*public function testEcho()
    {
        $this->expectOutputString('success');
        $this->setOutputCallback(function ($str) {
            return trim($str);
        });

        //$this->expectOutputRegex("/\d/");
        echo 'success';
    }*/

    //проверка ключей массива
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

    //тестирование глобальных переменных
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
