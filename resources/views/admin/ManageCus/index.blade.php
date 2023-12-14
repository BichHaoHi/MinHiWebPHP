@extends('admin.layouts.master')
@section('content')
    <section class="section">
      <div class="section-header">
        <h1>Khách hàng là thượng đế</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Manage Customer</a></div>
          <div class="breadcrumb-item">List Customer</div>
        </div>
      </div>

      <div class="section-body">
       

        <div class="row">
          <div class="col-12 ">
            <div class="card">
              <div class="card-header">
                <h4>List Customer</h4>
                {{-- <div class="card-header-action">
                    <a href="#" class="btn btn-primary"></a>
                </div> --}}
              </div>
              <div class="card-body">
                {{-- <table id="cus-table" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                        <th>STT</th>
                        <th>Tên</th>
                      </tr>
                  </thead>
                  
                </table> --}}
                {{ $dataTable->table() }}
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