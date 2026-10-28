<?php

namespace App\Tests\Service;

use App\Service\HighlanderForecastGenerator;
use PHPUnit\Framework\Attributes\DataProvider;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class HighlanderForecastGeneratorIntegrationTest extends KernelTestCase
{
    public static function dataGetForecastByKey(): array
    {
        return [
            ['rain', "It's going to rain!"],
            ['snow', "It's going to snow!"],
            ['sun', "It's going to be a lovely sunny weather!"],
            ['wind', "It's going to be windy!"],
        ];
    }

    #[DataProvider('dataGetForecastByKey')]
    public function testGetForecastByKey($key, $expectedMessage): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $generator = $container->get(HighlanderForecastGenerator::class);
        $message = $generator->getForecastByKey($key);

        $this->assertEquals($expectedMessage, $message, 'Mismatch in expected and actual highlander messages!');
    }

    public function testGetForecastByKeyWithoutKey(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $generator = $container->get(HighlanderForecastGenerator::class);
        $this->expectExceptionMessage('Invalid key');
        $generator->getForecastByKey('storm');
    }
}
