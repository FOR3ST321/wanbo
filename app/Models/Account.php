<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    use HasApiTokens, HasFactory, Notifiable, Authenticatable;

    protected $fillable = [
        'is_admin',
        'username',
        'password',
    ];
    
    public static function getAccount ($id) {
        return DB::table('accounts')
        ->join('users', 'accounts.id','=','users.account_id')
        ->where('accounts.id','=',$id)
        ->select('accounts.*')
        ->get();
    }
}
