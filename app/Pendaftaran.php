<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = [
        'nis', 'nama', 'jns_kelamin','tmp_lahir','tgl_lahir','alamat','asal_sekolah','kelas','jurusan'
    ];
}
