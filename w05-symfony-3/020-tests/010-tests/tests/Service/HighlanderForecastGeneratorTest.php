<?php

namespace App\Tests\Service;

use App\Service\HighlanderForecastGenerator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class HighlanderForecastGeneratorTest extends TestCase
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
        $generator = new HighlanderForecastGenerator();
        $message = $generator->getForecastByKey($key);

        $this->assertEquals($expectedMessage, $message, 'Mismatch in expected and actual highlander messages!');
    }

    public function testGetForecastByKeyWithoutKey(): void
    {
        $generator = new HighlanderForecastGenerator();
        $this->expectExceptionMessageIs('Invalid key');
        $generator->getForecastByKey('storm');
    }
}
