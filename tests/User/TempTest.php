<?php

class TempTest extends \PHPUnit\Framework\TestCase
{
    //запуск перед инициализацией класса
    public static function setUpBeforeClass(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    //запуск перед каждым тестом
    public function setUp(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    //запуск перед каждым тестом assert
    public function assertPreConditions(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    //тест 1
    public function testOne()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        $this->assertTrue(TRUE);
    }

    //тест 2
    public function testTwo()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        $this->assertTrue(FALSE);
    }

    //запуск после каждого успешного метода теста assert
    public function assertPostConditions(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    //запуск после каждого метода теста класса (для очистки результата)
    public function tearDown(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    //запуск при неуспешном выполнении теста
    protected function onNotSuccessfulTest(Throwable $t): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        throw $t;
    }

    //запуск после отработки класса (для очистки класса)

    public static function tearDownAfterClass(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }
}
