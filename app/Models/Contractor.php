<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    use HasFactory;

    protected $table = "contractor";

    protected $fillable = ["users_id", "licencia"];

    protected $hidden = ["user"];

    public function user()
    {
        return $this->hasOne(User::class,'id', 'users_id');
    }



}
