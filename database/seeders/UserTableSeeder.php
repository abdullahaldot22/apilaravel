<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => 'Laham Hue',
        //     'created_at' => Carbon::now(),
        // ]);

        // User::factory()->count(50)->create();

        $faker = Factory::create();
        foreach(range(1, 10) as $index)
        {
            DB::table('users')->insert([
                'name' => $faker->name,
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
