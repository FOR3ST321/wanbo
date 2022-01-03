<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Wanbo',
            'email' => 'wanbo@gmail.com',
            'membership_type' => 'platinum',
            'account_id' => 1
        ]);

        User::factory(50)->create();
    }
}
