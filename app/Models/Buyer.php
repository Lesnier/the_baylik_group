<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    protected $table = "buyer";

    protected $fillable = ["user_id","punto_precio"];

    public function user(){
        return $this->hasOne(User::class,'id',"user_id");
    }

}
