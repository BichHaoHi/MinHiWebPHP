


@extends('admin.layouts.master')
@section('content')
    <section class="section">
    

      <div class="section-body">

        
          <div class="col-12 ">
            <div class="card">
              <div class="card-header">
                <h4>Add Product</h4>
              </div>
              <div class="card-body">
                <form action="{{ route('manage_product.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Type</label>
                        <select name="type" id="" class="form-control">
                            <option value="sữa rửa mặt">Sửa rữa mặt</option>
                            <option value="kem chống nắng">Kem chống nắng</option>
                            <option value="nước tẩy trang">Nước tẩy trang</option>
                            <option value="nước tẩy trang">Serum</option>
                            <option value="nước tẩy trang">Kem dưỡng ẩm</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Provider</label>
                        <input type="text" class="form-control" name="provider" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Enable</label>
                        <select name="enable" id="" class="form-control">
                            <option value="1">enable</option>
                            <option value="0">disable</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Sex</label>
                        <select name="sex" id="" class="form-control">
                            <option value="M">M</option>
                            <option value="F">F</option>
                            <option value="M F">M F</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Skin_problem</label>
                        <input type="text" class="form-control" name="skin_problem" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Skin_Type</label>
                        <input type="text" class="form-control" name="skin_type" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" class="form-control" name="description" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Quantity</label>
                        <input type="text" class="form-control" name="quantity" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" class="form-control" name="price" value="">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
               
              </div>
              
            </div>
          </div>
        </div>
    
      
    </section>

@endsection
