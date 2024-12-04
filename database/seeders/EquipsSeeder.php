<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Estadi;
use App\Models\Equip;
class EquipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $estadi = Estadi::where('nom', 'Camp Nou')->first();
    $estadi->equips()->create([
        'nom' => 'Barça Femení',
        'titols' => 30,
    ]);
    $estadi = Estadi::where('nom', 'Wanda Metropolitano')->first();
    $estadi->equips()->create([
        'nom' => 'Atlètic de Madrid',
        'titols' => 10,
    ]);
    $estadi = Estadi::where('nom', 'Santiago Bernabéu')->first();
    $estadi->equips()->create([
        'nom' => 'Real Madrid Femení',
        'titols' => 5,
    ]);

    Equip::factory()->count(100)->create();
 }
    
}
