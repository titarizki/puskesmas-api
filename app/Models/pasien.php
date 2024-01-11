<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class pasien extends Model
{
    protected $primaryKey ='PasienID';
    Protected $table ='pasien';
    protected $fillable = [
        'PasienID','Nama','JenisKelamin','Alamat','NomorTelpon','TanggalLahir'
    ];
    protected $hidden =[];
}