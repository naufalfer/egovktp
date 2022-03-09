<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $nama
 * @property string $nik
 * @property string $tujuankerja
 * @property string $jamkerja
 * @property string $alamat
 * @property string $no_kk
 * @property string $jenis_kelamin
 */
class Sistem extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sistem';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'nik', 'tujuankerja', 'jamkerja', 'alamat', 'no_kk', 'jenis_kelamin'];

}
