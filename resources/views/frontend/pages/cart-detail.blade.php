@extends('frontend.layouts.master')
@section('title')
MinHi || Cart Details
@endsection

@section('content')
<section id="wsus__breadcrumb">
    <div class="wsus_breadcrumb_overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>cart View</h4>
                    <ul>
                        <li><a href="#">home</a></li>
                        <li><a href="#">peoduct</a></li>
                        <li><a href="#">cart view</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============================
    BREADCRUMB END
==============================-->



<!--============================
    CART VIEW PAGE START
==============================-->
<section id="wsus__cart_view">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <div class="wsus__cart_list">
                    <div class="table-responsive">
                        <table>
                            <tbody>
                                <tr class="d-flex">
                                    <th class="wsus__pro_name" style="width:425px">
                                        Tên sản phẩm
                                    </th>

                                    <th class="wsus__pro_select">
                                        số lượng
                                    </th>

                                    <th class="wsus__pro_tk">
                                        giá
                                    </th>
                                    <th class="wsus__pro_tk">
                                        tổng tiền
                                    </th>

                                    <th class="wsus__pro_icon">
                                        <a href="#" class="common_btn clear_cart">Xóa giỏ hàng</a>
                                    </th> 
                                </tr>
                                @foreach( $cartItems as $item)
                                <tr class="d-flex">
                                    <td class="wsus__pro_name" style="width:425px">
                                        <p >{!! $item->name !!}</p>
                                    </td>


                                    <td class="wsus__pro_select">
                                        <div class="product_qty_wrapper" style="  display:flex;">
                                            <button class="btn btn-danger product-decrement" >-</button>
                                            <input readonly class="product-qty" style="width: 43px;
                                            height: 36px;
                                            padding-left: 5px;" type="text" min="1" max="100"
                                            data-rowid="{{ $item->rowId }}"
                                            value="{!! $item->qty !!}" />
                                            <button class="btn btn-success product-increment" >+</button>
                                        </div>
                                    </td> 

                                     <td class="wsus__pro_tk">
                                        <h6>{{ $item->price }}</h6>
                                    </td>
                                    <td class="wsus__pro_tk">
                                        <h6 id="{{ $item->rowId }}" >{{ $item->price*$item->qty }}</h6>
                                    </td>

                                    <td class="wsus__pro_icon">
                                        <a href="{{ route('cart.remove-product', $item->rowId) }}" class=""><i class="far fa-times"></i></a>
                                    </td> 
                                </tr>
                                    
                                @endforeach
                                @if (count($cartItems) === 0)
                                <tr class="d-flex">
                                    <td class="wsus__pro_icon" style="width: 100%">
                                        Chưa có sản phẩm nào trong giỏ hàng nha
                                    </td>
                                </tr>
                                    
                                @endif
                               
 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
           
            
            <div class="col-xl-3">
                <div class="wsus__cart_list_footer_button" id="sticky_sidebar">
                    <h6>Tổng tiền</h6>
                    <p>Tổng tiền: <span class="cart_subtotal">{{ $total }}</span>vnđ</p>


                   
                    <a class="common_btn mt-4 w-100 text-center" href="check_out.html">Thanh toán</a>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});   

// Khi click vào + số lượng
        $('.product-increment').on('click', function(){
            let input = $(this).siblings('.product-qty');
            let quantity = parseInt(input.val())+1;
            let rowId = input.data('rowid');
            input.val(quantity);
            $.ajax({
                url: "{{ route('cart.update-quantity') }}",
                method: 'POST',
                data: {
                    rowId: rowId,
                    quantity: quantity
                },
                success:function(data){
                    if(data.status==='success'){
                        let productId = '#'+rowId;
                        $(productId).text(data.product_total);

                        let subtotalElement = $('.cart_subtotal');
                        let currentSubtotal = parseFloat(subtotalElement.text());
                        let updatedSubtotal = currentSubtotal + data.product_price;
                        subtotalElement.text(updatedSubtotal);


                        toastr.success(data.message);
                    }else if(data.status === 'error'){
                        toastr.error(data.message);
                    }
                },
                error: function(data){

                }
            })
        })
// Khi click vào - số lượng
        $('.product-decrement').on('click', function(){
            let input = $(this).siblings('.product-qty');
            let quantity = parseInt(input.val())-1;
            let rowId = input.data('rowid');
            if(quantity < 1){
                quantity = 1;
            }
            input.val(quantity);

            $.ajax({
                url: "{{ route('cart.update-quantity') }}",
                method: 'POST',
                data: {
                    rowId: rowId,
                    quantity: quantity
                },
                success:function(data){
                    if(data.status==='success'){
                        let productId = '#'+rowId;
                        $(productId).text(data.product_total);

                        let subtotalElement = $('.cart_subtotal');
                        let currentSubtotal = parseFloat(subtotalElement.text());
                        let updatedSubtotal = currentSubtotal - data.product_price;
                        subtotalElement.text(updatedSubtotal);


                        toastr.success(data.message);
                    }else if(data.status === 'error'){
                        toastr.error(data.message);
                    }

                },
                error: function(data){

                }
            })
        })
// Xóa cart
        $('.clear_cart').on('click', function(e){
            e.preventDefault();
            Swal.fire({
          title: "Are you sure?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, delete it!"
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              type: 'get',  
              url: "{{ route('clear.cart') }}",
              success: function(data){
                if(data.status === 'success'){
                    window.location.reload();
                }
                
                
              },
              error: function(xhr, status,error){
                console.log(error);
              }
            })
         
  }
});
        })

        


      
    

    })
</script>
    
@endpush