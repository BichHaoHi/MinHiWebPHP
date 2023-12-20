<?php

namespace App\Http\Controllers\Frontend;
use App\DataTables\UserOrderDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

    class UserOrderController extends Controller
    {
        //
        public function index(UserOrderDataTable $dataTable){
            return $dataTable->render('frontend.dashboard.order.index');

        }
    }
