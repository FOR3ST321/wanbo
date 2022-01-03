<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'room_name' => 'Rose',
            'description' => 'go straight, turn right, the farthest room on the left side',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);
        
        Room::create([
            'room_name' => 'Orchid',
            'description' => 'go straight, turn right, the second room from the far end on the left side',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);
        
        Room::create([
            'room_name' => 'Daisy',
            'description' => 'go straight, turn right, the third room from the far end on the left side',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);

        Room::create([
            'room_name' => 'Lily',
            'description' => 'go straight, turn right, second room on the left',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);

        Room::create([
            'room_name' => 'Iris',
            'description' => 'go straight, turn right, first room on the left',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);

        Room::create([
            'room_name' => 'Tulip',
            'description' => 'go straight, turn left, the farthest room on the right side',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);

        Room::create([
            'room_name' => 'Sunflower',
            'description' => 'go straight, turn left, the second room from the far end on the right side',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);

        Room::create([
            'room_name' => 'Camellia',
            'description' => 'go straight, turn left, the third room from the far end on the right side',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);

        Room::create([
            'room_name' => 'Lavender',
            'description' => 'go straight, turn left, second room on the right',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);

        Room::create([
            'room_name' => 'Jasmine',
            'description' => 'go straight, turn left, first room on the right',
            'package_id' => mt_rand(1,3),
            'store_branch_id' => 1
        ]);

    }
}
