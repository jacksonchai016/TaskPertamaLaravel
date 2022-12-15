<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bukus';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['no_buku', 'judul_buku', 'pengarang_buku', 'penerbit_buku', 'tahun_terbit'];

    
}
