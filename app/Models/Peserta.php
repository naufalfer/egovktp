<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_mahasiswa
 * @property string $statustes
 * @property string $hasiltes
 * @property Mahasiswa $mahasiswa
 * @property TransaksiPendaftaran[] $transaksiPendaftarans
 */
class Peserta extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'peserta';

    /**
     * @var array
     */
    protected $fillable = ['id_mahasiswa', 'statustes', 'hasiltes'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mahasiswa()
    {
        return $this->belongsTo('App\Models\Mahasiswa', 'id_mahasiswa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transaksiPendaftarans()
    {
        return $this->hasMany('App\Models\TransaksiPendaftaran', 'id_peserta');
    }
}
