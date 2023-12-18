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


class OrderDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addColumn('id', function ($model) {
            // Thêm nội dung tính toán cho cột STT
            return $model->id;
        })
            ->addColumn('action', function($query){
            })
            ->addColumn('enable', function($query){
                $button = '<label class="custom-switch">
                <input type="radio" name="option" value="1" class="custom-switch-input" checked>
                <span class="custom-switch-indicator"></span>
              </label>';
              return $button;

            })
            ->rawColumns(['icon', 'action', 'enable'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(DonHang $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
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

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
           
            Column::make('id')->title('ID Đơn hàng'), // đúng với tên trường cơ sở dữ liệu, là các trường cần lấy dữ liệu ra
            Column::make('name')->title('Tên KH'),
            Column::make('phone')->title('SĐT'),
            Column::make('date')->title('Ngày hóa đơn'),
            Column::make('status')->title('Trạng thái đơn hàng'),
            Column::make('total')->title('Tổng tiền hóa đơn'),
            Column::make('enable')->title('Hoạt động') // view or xóa
            
            
            ->exportable(false)
            ->printable(false)
            ->width(100)
            ->addClass('text-center')
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'ListOrder_' . date('YmdHis');
    }
}

