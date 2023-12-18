@extends('admin.layouts.master')
@section('content')
    <section class="section">
      <div class="section-header">
        <h1>Table</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Components</a></div>
          <div class="breadcrumb-item">Table</div>
        </div>
      </div>

      <div class="section-body">
        <div class="row">
          <div class="col-12 ">
            <div class="card">
              <div class="card-header">
                <h4>All Products</h4>
                <div class="card-header-action">
                    <a href="{{route('manage_product.create')}}" class="btn btn-primary">Create New</a>
                </div>
              </div>
              <div class="card-body">
                {{-- sử dụng DataTables để render bảng dữ liệu --}}
                {{$dataTable->table()}}
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

