<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

use App\Models\Standing;
use App\Models\Schedule;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Standing::truncate();
        Schedule::truncate();

        $i_standings = 1;

        while ($i_standings <= 20)
        {
            Standing::create([
                'rank' => $i_standings,
                'team' => 'Team ' . $i_standings,
                'wins' => rand(1,99),
                'podiums' => rand(1,99),
            ]);

            $i_standings++;
        }

        $i_schedule = 1;

        while ($i_schedule <= 12)
        {
            $startDate = rand(1,15);
            $endDate = $startDate + 5;

            Schedule::create([
                'season' => '2024',
                'date' => "$startDate - $endDate " . Carbon::create()->month($i_schedule)->startOfMonth()->format('M'),
                'country' => 'Country ' . $i_schedule,
                'winner' => 'Winner ' . $i_schedule,
            ]);

            $i_schedule++;
        }
    }
}
