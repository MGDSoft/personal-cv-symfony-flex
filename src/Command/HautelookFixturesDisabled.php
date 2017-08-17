<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;

class HautelookFixturesDisabled extends Command
{
    protected function configure()
    {
        $this
            ->setName('hautelook:fixtures:load')
            ->setDescription('This command is disabledDisabled :o, use doctrine:fixtures:load')
        ;
    }

    public function isEnabled()
    {
        return false;
    }
}