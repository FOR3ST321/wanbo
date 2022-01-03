<?php

namespace Database\Seeders;

use App\Models\StoreBranch;
use Illuminate\Database\Seeder;

class StoreBranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StoreBranch::create([
            'store_name' => 'Wanbo Branch',
            'address' => 'Ikan Kakap Street, Number 9',
            'account_id' => 1
        ]);
    }
}
