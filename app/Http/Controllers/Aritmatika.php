<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aritmatika extends Controller
{
    public function pertambahan(string $angka1, string $angka2){

        echo 'hasil dari '. $angka1 . 'ditambah ' . $angka2 . ' adalah '. $angka1 + $angka2;
    }
}
