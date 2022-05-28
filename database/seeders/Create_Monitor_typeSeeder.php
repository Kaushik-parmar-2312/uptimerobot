<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\monitor_type;

class Create_Monitor_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $monitor_types = [
            [
               'monitor_type'=>'HTTP(s)',
            ],
            [
               'monitor_type'=>'Keyword',
            ],
            [
                'monitor_type'=>'Ping',
             ],
             [
                'monitor_type'=>'Port',
             ],
        ];

        
        foreach ($monitor_types as $key => $value) {
            monitor_type::create($value);
        }
    }
}
