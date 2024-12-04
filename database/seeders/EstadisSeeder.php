<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Estadi;
class EstadisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('estadis')->insert([
        ['nom' => 'Camp Nou','ciutat' => 'Barcelona', 'capacitat' => 99000],
        ['nom' => 'Wanda Metropolitano', 'ciutat' => 'Madrid', 'capacitat' => 68000],
        ['nom' => 'Santiago Bernabéu','ciutat' => 'Madrid', 'capacitat' => 81000],
    ]);
}
}
