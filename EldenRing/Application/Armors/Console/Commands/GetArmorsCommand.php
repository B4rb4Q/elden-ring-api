<?php

namespace Application\Armors\Console\Commands;

use Illuminate\Console\Command;

class GetArmorsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'armors:save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save armors into database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}
