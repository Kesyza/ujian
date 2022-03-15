<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketSoal extends Model
{
    use HasFactory;

    protected $visible = ['paket_soal'];
    protected $fillable = ['paket_soal'];
    public $timestamps = true;
}
