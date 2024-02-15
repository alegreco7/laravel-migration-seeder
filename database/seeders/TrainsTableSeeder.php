<?php
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;

class TrainsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Generiamo 10 treni con la data di partenza odierna
        for ($i = 0; $i < 10; $i++) {
            Train::create([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => $faker->time(),
                'arrival_time' => $faker->time(),
                'train_code' => $faker->unique()->randomNumber(5),
                'carriages_number' => $faker->numberBetween(1, 10),
                'on_time' => $faker->boolean(80), // 80% di probabilità di essere in orario
                'cancelled' => $faker->boolean(10), // 10% di probabilità di essere cancellato
            ]);
        }
    }
}
