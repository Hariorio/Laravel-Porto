<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoalPertama extends Controller
{
    public function GetSoalPertama(Request $request)
    {
        $colors = ['blue', 'green', 'yellow', 'red'];

        $multiples = [
            2 => [],
            3 => [],
            4 => [],
            5 => []
        ];

        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                $multiples[2][] = $i;
            }
            if ($i % 3 == 0) {
                $multiples[3][] = $i;
            }
            if ($i % 4 == 0) {
                $multiples[4][] = $i;
            }
            if ($i % 5 == 0) {
                $multiples[5][] = $i;
            }
        }

        $data = [
            ["NIK" => "1022334", "Nama" => "Hilda"],
            ["NIK" => "1212343", "Nama" => "Nana"],
            ["NIK" => "1098668", "Nama" => "Roger"],
            ["NIK" => "1152671", "Nama" => "Kimmy"],
            ["NIK" => "1269378", "Nama" => "Angela"],
            ["NIK" => "1166378", "Nama" => "Natan"],
            ["NIK" => "1244567", "Nama" => "Carmilla"]
        ];

        $groups = [];

        foreach ($data as $person) {
            $nikPrefix = substr($person['NIK'], 0, 2);
            if (!isset($groups[$nikPrefix])) {
                $groups[$nikPrefix] = [];
            }
            $groups[$nikPrefix][] = $person;
        }

        ksort($groups);

        $viewData = [
            'colors' => $colors,
            'multiples' => $multiples,
            'groups' => $groups,
        ];

        return view('get-data', $viewData);
    }
}


