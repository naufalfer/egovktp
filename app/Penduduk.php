<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $no_kk
 * @property string $no_tlp
 * @property string $nik
 * @property string $nama
 * @property string $jenis_kelamin
 * @property string $alamat
 * @property string $agama
 * @property string $status
 * @property string $ttl
 * @property int $umur
 * @property string $kewarganegaraan
 * @property string $pekerjaan
 * @property string $pendidikan
 */
class Penduduk extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'penduduk';

    /**
     * @var array
     */
    protected $fillable = ['no_kk', 'no_tlp', 'nik', 'nama', 'jenis_kelamin', 'alamat', 'agama', 'status', 'ttl', 'umur', 'kewarganegaraan', 'pekerjaan', 'pendidikan'];

}
