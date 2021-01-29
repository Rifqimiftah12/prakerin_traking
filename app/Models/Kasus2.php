<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus2 extends Model
{
    protected $table = "kasus2s";
    protected $fillable = ['id', 'jumlah_positif', 'jumlah_meninggal', 'jumlah_sembuh','tanggal', 'id_rw'];
    public $timestamps = true;

    public function rw()
    {
        return $this->belongsTo('App\Models\Rw', 'id_rw');
    }

}