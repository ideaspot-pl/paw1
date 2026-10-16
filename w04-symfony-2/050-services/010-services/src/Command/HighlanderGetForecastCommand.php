<?php

namespace App\Command;

use App\Service\HighlanderForecastGenerator;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Attribute\Option;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'highlander:get-forecast',
    description: 'Get highlander forecasts.',
)]
class HighlanderGetForecastCommand{
    public function __construct(
        private readonly HighlanderForecastGenerator $highlanderForecastGenerator,
    )
    {
    }

    public function __invoke(
        SymfonyStyle $io,
        #[Option('Count of forecasts to generate', shortcut: 'c')] int $count = 1,
    ): int {
        $forecasts = [];
        for ($i = 0; $i < $count; $i++) {
            $forecasts[] = $this->highlanderForecastGenerator->getForecast();
        }

        $io->listing($forecasts);

        return Command::SUCCESS;
    }
}
