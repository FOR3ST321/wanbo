<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public static function package(){
    //     return DB::table('rooms')
    //     ->join('packages', 'rooms.package_id', '=', 'packages.id')
    //     ->join('store_branches', 'rooms.store_branch_id', '=', 'store_branches.id')
    //     ->select('packages.*', 'store_branches.*', 'rooms.*')
    //     ->get();
    // }

    public function package(){
        return $this->belongsTo(Package::class);
    }
}
