<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bab extends Model
{
    use HasFactory;

    public function getNextBab()
    {
        return $this->where('id', '>', $this->id)->first();
    }

    public function getPreviousBab()
    {
        return $this->where('id', '<', $this->id)->orderBy('id', 'desc')->first();
    }

    public function scopeCanBeAccessed($query)
    {
        return $query->where('id', '<=', $this->id);
    }

    protected $fillable=[
        'subs_id',
        'name',
        'judul_sub_bab_1',
        'isi_sub_bab_1',
        'image_1',
        'video_1',
        'judul_sub_bab_2',
        'isi_sub_bab_2',
        'image_2',
        'video_2',
        'judul_sub_bab_3',
        'isi_sub_bab_3',
        'image_3',
        'video_3',
        'judul_sub_bab_4',
        'isi_sub_bab_4',
        'image_4',
        'video_4',
    ];

    public function subs(){
        return $this->belongsTo(Sub::class,'subs_id','id');
    }
}
