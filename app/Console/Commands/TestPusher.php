<?php

namespace App\Console\Commands;

use App\Events\QuestionAnswered;
use Illuminate\Console\Command;

class TestPusher extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-pusher';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        event(new QuestionAnswered(true, 'hello world', 1));
    }
}
