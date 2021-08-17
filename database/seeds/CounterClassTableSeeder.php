<?php

use Illuminate\Database\Seeder;
use App\Counter;

class CounterClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Counter::create([
        	'name'=>'No.1',
        	'electric'=>4
        ]);
        Counter::create([
        	'name'=>'No.2',
        	'electric'=>6
        ]);
        Counter::create([
        	'name'=>'No.3',
        	'electric'=>2
        ]);
        Counter::create([
        	'name'=>'No.4',
        	'electric'=>4
        ]);
        Counter::create([
        	'name'=>'No.5',
        	'electric'=>2
        ]);
        Counter::create([
        	'name'=>'No.6',
        	'electric'=>6
        ]);
    }
}
