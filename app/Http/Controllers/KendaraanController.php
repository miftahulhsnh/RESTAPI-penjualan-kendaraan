<?php

namespace App\Http\Controllers;


use App\Repository\KendaraanRepository;
use App\Interfaces\KendaraanRepositoryInterface;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    private KendaraanRepositoryInterface $kendaraanRepository;

    public function __construct(KendaraanRepositoryInterface $kendaraanRepository)
    {
        $this->kendaraanRepository = $kendaraanRepository;
    }

    public function index()
    {
        $kendaraan = $this->kendaraanRepository->getAllKendaraan();
        return response()->json($kendaraan->toArray());
    }

    public function getMobil()
    {
        $mobil = $this->kendaraanRepository->getMobil();
        return response()->json($mobil->toArray());
    }

    public function getMotor()
    {
        $motor = $this->kendaraanRepository->getmotor();
        return response()->json($motor->toArray());
    }
}
