<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
public function index(){
    $a =7;
    $b = 3;
    $c = $a*$b;
    return "<h1>Hasil perkalian : ". $c ."</h1>";
}

public function biodata(){
    $nama = "Satria Dwi Nugraha";
    $alamat = "Mojokerto";
    $umur = 19;
    return view('biodata',['nama' => $nama,'alamat' => $alamat, 'umur' => $umur]);
}

}