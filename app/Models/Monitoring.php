<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    use HasFactory;

    protected $table = 'monitoring';
    protected $primaryKey = 'id';
    protected $fillable = ['suhu', 'kelembapan_ruang', 'kelembapan_tanah'];
}