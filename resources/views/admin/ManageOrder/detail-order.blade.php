@extends('admin.layouts.master')
@section('content')
    <section class="section">
      <div class="section-header">
        <h1>CHI TIẾT THÔNG TIN ĐƠN HÀNG</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Manage Order</a></div>
          <div class="breadcrumb-item">List Orrder</div>
          <div class="breadcrumb-item">Detail Order</div>

        </div>
      </div>

      <div class="section-body">
         {{-- CODE YTB --}}
         <div class="py-3 py-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shawdow bg-white p-3">

                            <h4 class="text-primary">
                                <i class="fa fa-shopping-cart text-dark"></i> Chi tiết đơn hàng
                                <a href="#" class="btn btn-danger btn-sm float-end">Back</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    
      </div>
    </section>

@endsection
{{-- đẩy" nội dung vào một "stack" có tên là 'scripts' bên trang master --}}
@push('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush