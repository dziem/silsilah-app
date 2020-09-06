<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    public $timestamps = false;
    protected $table = 'silsilah';
	protected $primaryKey = 'id_silsilah';
    protected $fillable = [
        'nama', 'jenis_kel', 'id_orang_tua'
    ];
}
