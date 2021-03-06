<?php

use Illuminate\Database\Seeder;
use App\Appointement;
class AddDummyAppointement extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	['title'=>'Demo Event-1', 'start_date'=>'2017-09-11', 'end_date'=>'2017-09-12'],
        	['title'=>'Demo Event-2', 'start_date'=>'2017-09-11', 'end_date'=>'2017-09-13'],
        	['title'=>'Demo Event-3', 'start_date'=>'2017-09-14', 'end_date'=>'2017-09-14'],
        	['title'=>'Demo Event-3', 'start_date'=>'2017-09-17', 'end_date'=>'2017-09-17'],
        ];
        foreach ($data as $key => $value) {
        	Appointement::create($value);
        }
    }
}
