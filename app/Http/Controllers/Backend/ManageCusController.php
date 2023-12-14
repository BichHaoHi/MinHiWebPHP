<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\CustomerDataTable;

class ManageCusController extends Controller
{
    //
    public function index( CustomerDataTable $dataTable )
    {
        //
        return $dataTable->render('admin.ManageCus.index'); // View --> admin --> ManageCus --> index là link View
    }
}
