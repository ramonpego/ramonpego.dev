<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Database extends Model
{
    protected $fillable=['name','description'];

    public function tables(){
        return $this->hasMany(Table::class);
    }
}
