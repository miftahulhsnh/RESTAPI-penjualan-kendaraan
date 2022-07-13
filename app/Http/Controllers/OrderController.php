<?php

namespace App\Http\Controllers;

use App\Repository\OrderRepository;
use App\Interfaces\OrderRepositoryInterface;
use App\Models\Motor;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    protected $user;
    private orderRepositoryInterface $orderRepository;
    public function __construct(orderRepositoryInterface $orderRepository)
    {
        $this->middleware('auth:api');
        $this->user = $this->guard()->user();
        $this->orderRepository = $orderRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function laporan()
    {
        $laporan = $this->orderRepository->laporanPenjualan();
        return response()->json($laporan->toArray());
    }

    public function jual(Request $request)
    {
        $orderDetails = $request->only([
            '_id',
            'soldout'
        ]);

        return response()->json([
            'data' => $this->kendaraanRepository->jual($orderDetails)
        ]);
    }

    public function guard()
    {
        return Auth::guard();
    }
}
