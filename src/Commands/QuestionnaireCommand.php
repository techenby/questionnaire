<?php

namespace Techenby\Questionnaire\Commands;

use Illuminate\Console\Command;

class QuestionnaireCommand extends Command
{
    public $signature = 'questionnaire';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
