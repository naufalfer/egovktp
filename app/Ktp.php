<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $no_ktp
 * @property string $nik
 * @property string $foto
 * @property string $tanda_tangan
 */
class Ktp extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ktp';

    /**
     * @var array
     */
    protected $fillable = ['no_ktp', 'nik', 'foto', 'tanda_tangan'];

}
