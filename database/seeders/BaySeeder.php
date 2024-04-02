<?php

namespace Database\Seeders;

use App\Models\Bay;
use Illuminate\Database\Seeder;

class BaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Utilise la factory pour créer 30 instances de Bay avec des noms uniques commençant par "B" suivis de 3 chiffres
        Bay::factory()->count(30)->create();
    }
}
