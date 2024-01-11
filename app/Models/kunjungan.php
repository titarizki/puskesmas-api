<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class kunjungan extends Model
{
    protected $primaryKey ='KunjunganID';
    Protected $table ='kunjungan';
    protected $fillable = [
        'KunjunganID','PasienID','TanggalKunjungan','Keluhan','Diagnosa','Resep'
    ];
    protected $hidden =[];
}