<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $visible = ['nama', 'email', 'password', 'nama_sekolah'];
    protected $fillable = ['nama', 'email', 'password', 'nama_sekolah'];
    public $timestamps = true;
}
