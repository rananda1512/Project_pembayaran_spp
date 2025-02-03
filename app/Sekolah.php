<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    //
    protected $fillable = ["nama_sekolah"];
    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
