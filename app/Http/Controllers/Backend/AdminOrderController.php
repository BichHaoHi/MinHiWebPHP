<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\CustomerDataTable;

class AdminOrderController extends Controller
{
    //
    public function index( CustomerDataTable $dataTable )
    {
        return $dataTable->render('admin.ManageOrder.index');
    }
}