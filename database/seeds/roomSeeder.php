<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class roomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('rooms')->insert([
        'name' => $faker->name,
        'image'=>$faker->image('public/img',640,480, null, false),
        'typeroom' =>$faker->text($ma),
        'number'=>Str::random(32),
        'area' =>str::random(32),
        'price'=>$faker->randomNumber($nbDigits = NULL, $strict = false),
        ]);
}
    }
}
