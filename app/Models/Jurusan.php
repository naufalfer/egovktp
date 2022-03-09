<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama_jurusan
 * @property Mahasiswa[] $mahasiswas
 */
class Jurusan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'jurusan';

    /**
     * @var array
     */
    protected $fillable = ['nama_jurusan'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mahasiswas()
    {
        return $this->hasMany('App\Models\Mahasiswa', 'jurusan');
    }
}
