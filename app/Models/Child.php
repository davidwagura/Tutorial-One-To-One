<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'father_id',
        'child_name',
    ];
    public function father()
    {
        return $this->belongsTo(Father::class);
    }

}
