<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';

    public $fillable = ['nama'];

    public function transaksi() {
    	return $this->hasMany('App\Transaksi');
    }
}
