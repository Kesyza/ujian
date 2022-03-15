<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $visible = ['nama_mapel'];
    protected $fillable = ['nama_mapel'];
    public $timestamps = true;
}
