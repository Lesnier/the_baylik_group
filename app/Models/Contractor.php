<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    use HasFactory;

    protected $table = "contractor";

    protected $fillable = ["user_id", "licencia"];

    public function user(){
        return $this->hasOne(User::class,'id',"user_id");
    }

}
