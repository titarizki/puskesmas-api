<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class jadwalpraktek extends Model
{
    protected $primaryKey ='jadwalID';
    Protected $table ='jadwalpraktek';
    protected $fillable = [
        'jadwalID','DokterID','Hari','JamMulai','JamSelesai'
    ];
    protected $hidden =[];
}