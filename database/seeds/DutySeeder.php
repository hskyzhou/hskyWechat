<?php

use Illuminate\Database\Seeder;

use App\Models\Duty;

class DutySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Duty::create([
        	'duty_date' => '2016-8-27',
        	'name' => '晚班2',
        	'status' => 1,
        ]);

        Duty::create([
        	'duty_date' => '2016-8-28',
        	'name' => '休息1',
        	'status' => 1,
        ]);

        Duty::create([
        	'duty_date' => '2016-8-29',
        	'name' => '休息2',
        	'status' => 1,
        ]);

        Duty::create([
        	'duty_date' => '2016-8-30',
        	'name' => '休息3',
        	'status' => 1,
        ]);

        Duty::create([
        	'duty_date' => '2016-8-31',
        	'name' => '休息4',
        	'status' => 1,
        ]);

        Duty::create([
        	'duty_date' => '2016-9-1',
        	'name' => '早班1',
        	'status' => 1,
        ]);

        Duty::create([
        	'duty_date' => '2016-9-2',
        	'name' => '早班2',
        	'status' => 1,
        ]);

        Duty::create([
        	'duty_date' => '2016-9-3',
        	'name' => '休息1',
        	'status' => 1,
        ]);
    }
}
