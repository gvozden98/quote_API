<?php

namespace Database\Seeders;

use App\Models\Philosopher;
use App\Models\Quote;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhilosopherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Philosopher::create([
            'philosopher' => 'Marcus Aurelius',
            'born' => '161 AD',
            'died' => '180 AD',
        ]);
        Philosopher::create([
            'philosopher' => 'Plato',
            'born' => '428 BC',
            'died' => '328 BC',
        ]);
        Philosopher::create([
            'philosopher' => 'Socrates',
            'born' => '470 BC',
            'died' => '399 BC',
        ]);
    }
}
