<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $table = "seller";

    protected $fillable = ["users_id", "address", "links"];

    public function user()
    {
        return $this->hasOne(User::class,'id', 'users_id');
    }
}
