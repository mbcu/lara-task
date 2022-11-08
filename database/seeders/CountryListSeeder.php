<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountryListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		  $data=[
			[
				'name'=>'Afghanistan',
				'code'=>'af',
			],
			[
				'name'=>'Albania',
				'code'=>'al',
		  	],
			[
				'name'=>'Algeria',
				'code'=>'dz',
		  	],
			[
				'name'=>'Andorra',
				'code'=>'ad',
		  	],
			[
				'name'=>'Angola',
				'code'=>'ao',
		  	]
			];
		  \App\Models\CountryList::insert($data);
    }
}
