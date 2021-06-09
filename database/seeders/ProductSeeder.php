<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        $faker = Factory::create('id_ID');

        $type = ['makanan', 'minuman', 'dll'];

        for ($i=0; $i < 20; $i++) {

            DB::table('products')->insert([

                'name' => $faker->name,
                'price' => $faker->numberBetween(500, 50000),
                'production_date' => $faker->date,
                'expired' => $faker->dateTimeBetween,
                'type' => $faker->randomElement($type),
                'description' => $faker->text(100),
                'stock' => $faker->numberBetween(5, 10),
                'prosedur' => $faker->name,
                'address' => $faker->address,
                'postcode' => $faker->randomNumber,
                'status' => $faker->boolean()

            ]);
        }
    }
}
