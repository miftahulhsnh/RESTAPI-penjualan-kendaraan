<?php

namespace App\Repository;

use App\Models\Mobil;
use App\Models\Motor;
// use App\Models\User;
use App\Interfaces\KendaraanRepositoryInterface;

class KendaraanRepository implements KendaraanRepositoryInterface
{
    public function getAllKendaraan()
    {
        $mobil = Mobil::all();
        $motor = Motor::all();

        return ['mobil' => $mobil, 'motor' => $motor];
    }
    public function getMobil()
    {
        $mobil = Mobil::all();
        return $mobil;
    }
    public function getMotor()
    {
        $motor = Motor::all();
        return $motor;
    }
}
