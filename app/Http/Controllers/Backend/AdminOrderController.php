<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\OrderDataTable;
use App\Models\DonHang;


class AdminOrderController extends Controller
{
    //
    public function index( OrderDataTable $dataTable )
    {
        return $dataTable->render('admin.ManageOrder.index');
    }
    // public function detail(){
    //     $order = DonHang:all();
    //     return view("admin.ManageOrder.detail-order", ['products' => $products]);
    // }
    public function detail(){
        return view('admin.ManageOrder.detail-order');
    }
}