<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class resepobat extends Model
{
    protected $primaryKey ='ResepID';
    Protected $table ='resepobat';
    protected $fillable = [
        'ResepID','KunjunganID','ObatID','Jumlah'
    ];
    protected $hidden =[];
}