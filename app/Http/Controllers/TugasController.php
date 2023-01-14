<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    //
    public function tugas()
    {
        for ($i = 1; $i <= 100; $i++) {
            $i = sprintf("%.2f", $i);
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo $this->LuasPersegi($i);
                echo "<br>";
            } else if ($i % 5 == 0) {
                echo $this->KelilingLingkaran($i);
                echo "<br>";
            } else if ($i % 3 == 0) {
                echo $this->LuasLingkaran($i);
                echo "<br>";
            }
            else {
                echo $i;
                echo "<br>";
            }
        }
    }
    public function LuasLingkaran(float $a)
    {

        $jariJari = $a / 3.0;
        $hasil = 3.14 * $jariJari * $jariJari;
        return sprintf("%.2f",  $hasil);
    }

    public function KelilingLingkaran(float $a)
    {

        $jariJari = $a / 5.0;
        $hasil = 2 * 3.14 * $jariJari;
        return sprintf("%.2f",  $hasil);
    }

    public function LuasPersegi(float $a)
    {

        $panjang = $a / 3.0;
        $lebar = $a / 5.0;
        $hasil = $panjang * $lebar;
        return sprintf("%.2f",  $hasil);
    }
}
