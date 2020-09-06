<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silsilah extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 public $timestamps = false;
	protected $table = 'silsilah';
	protected $primaryKey = 'id_silsilah';
    protected $fillable = [
        'nama', 'jenis_kel', 'id_orang_tua'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}