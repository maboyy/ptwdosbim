<?php

namespace App\Models;

use App\Models\User;
use App\Models\MataKuliah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalUjian extends Model
{
    use HasFactory;

    protected $table = "jadwal_ujian";

    protected $fillable = [
        "user_id", "mata_kuliah_id", "date", "time"
    ];

    public function user_relation()
    {
        return $this->hasOne(User::class, "id", "user_id");
    }

    public function mata_kuliah_relation()
    {
        return $this->hasOne(MataKuliah::class, "id","mata_kuliah_id");
    }
}
