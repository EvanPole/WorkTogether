<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;
use App\Models\Bay;
use App\Models\Rack;

class RackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bays = Bay::all();

        foreach ($bays as $bay) {
            Rack::factory()->count(42)->create([
                'bay_id' => $bay->id,
            ]);
        }
    }
}
