<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Attribute\Option;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:parrot',
    description: 'Add a short description for your command',
)]
class ParrotCommand{
    public function __invoke(
        SymfonyStyle $io,
        #[Argument('The phrase the parrot will repeat')] string $phrase,
        #[Option('Number of times the parrot will repeat the phrase')] int $times = 1,
    ): int {
        for ($i = 0; $i < $times; $i++) {
            $io->write("{$phrase} ");
        }

        return Command::SUCCESS;
    }
}
