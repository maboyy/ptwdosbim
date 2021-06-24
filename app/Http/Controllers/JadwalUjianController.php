<?php

namespace App\Http\Controllers;

use App\Models\JadwalUjian;
use Illuminate\Http\Request;

class JadwalUjianController extends Controller
{
    public function index()
    {
        $data = JadwalUjian::with("user_relation", "mata_kuliah_relation")->orderBy("date", "asc")->get();

        return view("ujian", compact("data"));
    }
}
