<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        foreach(range(1,20) as $index)
        {
            Supplier::insert(
                [
                    'name' => $faker->company, // Supplier company name
                    'email' => $faker->unique()->safeEmail, // Unique email address
                    'phone' => $faker->phoneNumber, // Supplier phone number
                    'address' => $faker->address,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
