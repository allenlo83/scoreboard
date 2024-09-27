<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Symfony\Component\Console\Output\OutputInterface;

class SendBroadcast extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send-broadcast';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Execute send broadcast';

    protected $verbosity = OutputInterface::VERBOSITY_VERBOSE;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        while (true)
        {
            $data = [];

            for($i = 1; $i <= 10; $i++)
            {
                array_push($data, [
                    'position' => $i,
                    'name' => \Str::random(10),
                    'time' => Carbon::now()->addMinutes($i)->format('H:i'),
                ]);
            }

            \Broadcast::on('live-updates')
                ->as('liveUpdates')
                ->with($data)
                ->sendNow();

            sleep(2);
        }

        echo 'done send broadcast';
    }
}
