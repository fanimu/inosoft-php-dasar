<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function printNumbers()
    {
        function luasLingkaran($jariJari) {
            return round(3.14 * $jariJari * $jariJari, 2);
        }

        function kelilingLingkaran($jariJari) {
            return round(2 * 3.14 * $jariJari, 2);
        }

        function luasPersegi($panjang, $lebar) {
            return round($panjang * $lebar, 2);
        }

        $output = '';
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                $luasPersegi = luasPersegi($i / 3, $i / 5);
                $output .= $luasPersegi . "<br>";
            } elseif ($i % 3 === 0) {
                $jariJari = $i / 3;
                $luasLingkaran = luasLingkaran($jariJari);
                $output .= $luasLingkaran . "<br>";
            } elseif ($i % 5 === 0) {
                $jariJari = $i / 5;
                $kelilingLingkaran = kelilingLingkaran($jariJari);
                $output .= $kelilingLingkaran . "<br>";
            } else {
                $output .= number_format($i, 2) . "<br>";
            }
        }

        return $output;
    }
}
