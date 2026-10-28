<?php
namespace App\Service;

class HighlanderForecastGenerator
{
    public function getForecastByKey($key): string
    {
        $forecasts = [
            'rain' => "It's going to rain!",
            'snow' => "It's going to snow!",
            'sun' => "It's going to be a lovely sunny weather!",
            'wind' => "It's going to be windy!",
        ];

        if (! isset($forecasts[$key])) {
            throw new \Exception("Invalid key");
        }
        $forecast = $forecasts[$key];

        return $forecast;
    }
}
