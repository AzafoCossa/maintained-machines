<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Equipment::insert([
            [
                'name'=>'Forklift',
            ],
            [
                'name'=>'Tractor',
            ],
            [
                'name'=>'PayLoader',
            ],
            [
                'name'=>'Mobile Crane',
            ],
            [
                'name'=>'Rail Excavator',
            ],
            [
                'name'=>'Vessel Excavator',
            ]
        ]);
    }
}
