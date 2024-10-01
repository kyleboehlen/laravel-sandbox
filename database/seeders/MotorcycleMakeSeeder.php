<?php

namespace Database\Seeders;

use App\Constants\MotorcycleMake as Make;
use App\Models\MotorcycleMake;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotorcycleMakeSeeder extends Seeder
{
    /*
     * Array of seeder data
     */
    private array $data = [
        Make::KAWASAKI => [
            'name' => 'Kawasaki',
            'nickname' => 'Kawi'
        ],
        Make::HONDA => [
            'name' => 'Honda',
            'nickname' => null
        ],
        Make::DUCATI => [
            'name' => 'Ducati',
            'nickname' => null
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data as $id => $attr) {
            MotorcycleMake::updateOrCreate(
                ['id' => $id],
                $attr
            );
        }
    }
}
