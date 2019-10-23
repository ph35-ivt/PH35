<?php

use Illuminate\Database\Seeder;
use App\Breed;

class BreedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //cach 1
    	// $data= [
    	// 	[
    	// 		'name' => 'breed1',
    	// 		'created_at' => now(),
    	// 		'updated_at' => now()
    	// 	],
    	// 	[
    	// 		'name' => 'breed2',
    	// 		'created_at' => now(),
    	// 		'updated_at' => now()
    	// 	],
    	// 	[
    	// 		'name' => 'breed3',
    	// 		'created_at' => now(),
    	// 		'updated_at' => now()
    	// 	],
    	// 	[
    	// 		'name' => 'breed4',
    	// 		'created_at' => now(),
    	// 		'updated_at' => now()
    	// 	],
    	// 	[
    	// 		'name' => 'breed5',
    	// 		'created_at' => now(),
    	// 		'updated_at' => now()
    	// 	]
    	// ];
    	// Breed::insert($data);

    	//cach 2
    	factory(App\Breed::class, 10)->create();
    }
}
