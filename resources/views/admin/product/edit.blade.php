@extends('admin.layouts.master')
@section('content')
    <section class="section">
    

      <div class="section-body">

        
          <div class="col-12 ">
            <div class="card">
              <div class="card-header">
                <h4>Update Product</h4>
              </div>
              <div class="card-body">
                <form action="{{ route('manage_product.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="">Enable</label>
                      <select name="enable" id="" class="form-control">
                        <option value="M">0</option>
                        <option value="F">1</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea type="text" class="form-control" name="description" >{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Quantity</label>
                        <input type="text" class="form-control" name="quantity" value="{{ $product->quantity }}">
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
               
              </div>
              
            </div>
          </div>
        </div>
    
      
    </section>

@endsection
