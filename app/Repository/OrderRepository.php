<?php

namespace App\Repository;


use App\Models\Mobil;
use App\Models\Motor;
use App\Models\User;
use App\Models\Order;
use App\Interfaces\OrderRepositoryInterface;
use Illuminate\Support\Facades\DB;

class OrderRepository
{
    public function laporanPenjualan()
    {
        $getLaporan = DB::table('order')
            ->join('mobil', 'kendaraan_id', '=', 'mobil.kendaraan_id')
            ->join('motor', 'kendaraan_id', '=', 'mobil.kendaraan_id')
            ->get();

        return $getLaporan;
    }

    public function order($orderDetails)
    {
        $id = $orderDetails['_id'];
        $sold = $orderDetails['soldout'];
        $penjualan = Motor::find($id);
        if ($sold == True) {
            return response()->json(['message' => "Stock Empty"]);
        } else {
            $penjualan->save();
            if ($penjualan->save()) {
                Order::create([
                    'order_by' => auth()->id(),
                    'kendaraan_id' => $penjualan->_id,

                ]);
            }
            return $penjualan;
        }
    }
}
