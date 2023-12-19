<?php

namespace App\DataTables;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use App\Models\DonHang;
use App\Models\CTHD;



class DetailOrderDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))// $query tạo và thực hiện các truy vấn SQL đối với cơ sở dữ liệu.
        ->addColumn('id', function ($model) {//$model Là một hàm callback, trong đó $model là mỗi dòng dữ liệu trong kết quả truy vấn. 

            // Thêm nội dung tính toán cho cột STT
            return $model->id;
        })
            ->addColumn('enable', function($query){
                $detailBtn = "<a href='".route('order_detail', $query->id)."' class='btn btn-primary'>Tổng thiền</a>";

              return $detailBtn;

            })
//             ->addColumn('total', function ($model) {
//                 // Thêm nội dung tính toán cho cột STT
//                 $hoaDon = HoaDon::find($hoaDonId);
// $products = $hoaDon->products;

// foreach ($products as $product) {
//     echo $product->name; // Lấy giá trị của cột 'name' trong bảng 'products'
//     echo $product->pivot->quantity; // Lấy giá trị của cột 'quantity' trong bảng trung gian 'cthd'
//     echo $product->pivot->price; // Lấy giá trị của cột 'price' trong bảng trung gian 'cthd'
    
            // })}
            ->rawColumns(['icon', 'action', 'enable'])
            ->setRowId('id');
    }
        

    
    public function query(DonHang $model): QueryBuilder
    {
        return $model->newQuery();
    }

    
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('cus-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

   
    public function getColumns(): array
    {
        return [
           
            Column::make('idProduct')->title('ID Sản phẩm'), // đúng với tên trường cơ sở dữ liệu, là các trường cần lấy dữ liệu ra
            Column::make('products->link_photo')->title('Ảnh sản phẩm'),
            Column::make('products->name')->title('Tên sản phẩm'),
            Column::make('quantity')->title('Số lượng mua'),
            Column::make('price')->title('Giá sản phẩm'),
            Column::make('total')->title('Thành tiền')
            
            
            ->exportable(false)
            ->printable(false)
            ->width(100)
            ->addClass('text-center')
        ];
    }

    
    protected function filename(): string
    {
        return 'Order_' . date('YmdHis');
    }
}

