<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_name',
    ];

    // public function moduls()
    // {
    //     return $this->belongsTo(Modul::class, 'moduls_id','id');
    // }
    public function babs()
    {
        return $this->hasMany(Bab::class, 'subs_id','id');
    }
}
