<?php

use Illuminate\Database\Seeder;
use App\Film;

class filmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Film::class, 50) -> create();
    }
}
