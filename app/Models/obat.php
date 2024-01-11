<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class obat extends Model
{
    protected $primaryKey ='ObatID';
    Protected $table ='obat';
    protected $fillable = [
        'ObatID','NamaObat','Dekripsi','Harga'
    ];
    protected $hidden =[];
}