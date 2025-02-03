<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class);
    }
}
