<?php

namespace Database\Seeders;

use App\Constants\MotorcycleMake;
use App\Models\MotorcycleModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotorcycleModelSeeder extends Seeder
{
    /*
     * Info for seeding motorcycle models
     */

    private array $data = [
        [
            'make_id' => MotorcycleMake::KAWASAKI,
            'name' => 'ZX6R',
            'horsepower' => 128,
            'weight' => 432,
        ],
        [
            'make_id' => MotorcycleMake::DUCATI,
            'name' => 'Panigale V4S',
            'horsepower' => 216,
            'weight' => 412,
        ],
        [
            'make_id' => MotorcycleMake::HONDA,
            'name' => 'GSX600RR',
            'horsepower' => 121,
            'weight' => 410,
        ],
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data as $id => $attr) {
            MotorcycleModel::updateOrCreate(
                ['id' => $id + 1],
                $attr
            );
        }
    }
}
