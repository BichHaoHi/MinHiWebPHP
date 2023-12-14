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
use App\Models\User;


class CustomerDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addColumn('id', function () {
            // Thêm nội dung tính toán cho cột STT
            static $counter = 0;
            return ++$counter;
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
    public function query(User $model): QueryBuilder
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
           
            Column::make('id')->title('STT'), // đúng với tên trường cơ sở dữ liệu, là các trường cần lấy dữ liệu ra
            Column::make('name')->title('Tên KH'),
            Column::make('adress')->title('Địa chỉ'),
            Column::make('phone')->title('SĐT'),
            Column::make('postcode')->title('Mã bưu chính'),
            Column::make('email')->title('Email'),
            Column::make('birthday')->title('Ngày sinh'),
            Column::make('total')->title('Tổng đơn'),
            Column::make('enable')->title('Trạng thái'),
            Column::make('role')->title('Quyền'),
            Column::make('create_at')->title('Ngày tạo TK')
            
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
        return 'Users_' . date('YmdHis');
    }
}

