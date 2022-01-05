<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Package extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function getData(){
        return DB::table('packages')
        ->join('rooms', 'packages.id', '=', 'rooms.package_id')
        ->get();
    }
}
