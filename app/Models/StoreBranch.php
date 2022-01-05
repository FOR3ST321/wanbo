<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StoreBranch extends Model
{
    use HasFactory;

    public static function getData(){
        return DB::table('store_branches')
        ->join('rooms', 'rooms.store_branch_id', '=', 'store_branches.id')
        ->join('packages', 'rooms.package_id', '=', 'packages.id')
        ->join('accounts', 'store_branches.account_id', '=', 'accounts.id')
        ->get();
    }
}
