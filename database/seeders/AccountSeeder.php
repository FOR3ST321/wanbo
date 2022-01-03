<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Account;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::create([
            'is_admin' => true,
            'username' => 'wanbo_admin',
            'password' => bcrypt('password')
        ]);

        Account::create([
            'is_admin' => false,
            'username' => 'wanbo_user',
            'password' => bcrypt('password')
        ]);
    }
}
