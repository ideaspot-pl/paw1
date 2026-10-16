<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'math:solution',
    description: 'Add a short description for your command',
)]
class MathSolutionCommand{
    public function __invoke(
        SymfonyStyle $io,
        #[Argument('a value')] int $a,
        #[Argument('b value')] int $b,
    ): int {
        $c = $a + $b;
        $io->success("$a + $b = $c");

        return Command::SUCCESS;
    }
}
