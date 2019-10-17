<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 1001; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('contact_forms')->insert([
    			'name' => $faker->name,
    			'email' => $faker->email,
    			'message' => $faker->paragraph(3)
    		]);
 
    	}
    }
}
