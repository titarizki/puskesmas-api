<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class dokter extends Model
{
    protected $primaryKey ='DokterID';
    Protected $table ='dokter';
    protected $fillable = [
        'DokterID','NamaDokter','Spesialisasi'
    ];
    protected $hidden =[];
}