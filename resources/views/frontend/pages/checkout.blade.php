@extends('frontend.layouts.master')
@section('title')
MinHi || Checkout
@endsection
@section('content')
    <!--============================
        BREADCRUMB START
    ==============================-->
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>check out</h4>
                        <ul>
                            <li><a href="{{ route('home') }}">home</a></li>
                            <li><a href="#">check out</a></li>
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
        CHECK OUT PAGE START
    ==============================-->
    <section id="wsus__cart_view">
        <div class="container">
            <form class="wsus__checkout_form">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="wsus__check_form">
                            <h5>chi tiết đơn hàng </h5>
                            <div class="row">
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <div class="wsus__check_single_form">
                                        <input id="ten" type="text" placeholder="Tên" value="{{ $user->name }}">
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <div class="wsus__check_single_form">
                                        <select class="select_2" name="state">
                                            <option value="AL">Tỉnh</option>
                                            <option value="">dhaka</option>
                                            <option value="">barisal</option>
                                            <option value="">khulna</option>
                                            <option value="">rajshahi</option>
                                            <option value="">bogura</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <div class="wsus__check_single_form">
                                        <select class="select_2" name="state">
                                            <option value="AL">Thành phố</option>
                                            <option value="">dhaka</option>
                                            <option value="">barisal</option>
                                            <option value="">khulna</option>
                                            <option value="">rajshahi</option>
                                            <option value="">bogura</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <div class="wsus__check_single_form">
                                        <input id="diachi" type="text" placeholder="Địa chỉ nhà">
                                    </div>
                                </div>
                               
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <div class="wsus__check_single_form">
                                        <input minlength="10" maxlength="10" id="sodienthoai" type="text" placeholder="Số điện thoại người nhận hàng">
                                    </div>
                                </div>
                             
                            
                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <div class="wsus__check_single_form">
                                        <h5>Ghi chú cho người bán</h5>
                                        <textarea cols="3" rows="4"
                                            placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="wsus__order_details" id="sticky_sidebar">
                            {{-- <p class="wsus__product">Phương thức thanh toán</p> --}}
                            {{-- <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="COD"
                                    value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Thanh toán khi nhận hàng
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="wallet"
                                    value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Ví điện tử PayPal
                                </label>
                            </div> --}}
                            <div class="wsus__order_details_summery">
                                <p><b>total:</b> <span class="total">{{ $total }}</span> vnđ</p>
                            </div>
                            
                            <a href="#" id="submitCheckoutForm" class="common_btn">Đặt hàng</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    
    <!--============================
        CHECK OUT PAGE END
    ==============================-->

@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
}); 
        $('#submitCheckoutForm').on('click', function(e){
        e.preventDefault();
        if($('#ten').val() == ""){
            toastr.error('Vui lòng điền tên người nhận hàng');
        }
        else if( $('#diachi').val()==""){
            toastr.error('Vui lòng điền địa chỉ nhận hàng');
        }
        else if( $('#sodienthoai').val()==""){
            toastr.error('Vui lòng điền số điện thoại');
        }
        else if($('#sodienthoai').val().length !=10){
            toastr.error('Số điện thoại không hợp lệ');
        }
        else{
            $.ajax({
            url: "{{ route('customer.checkout.form-submit') }}",
            method: 'POST',
            data: {
                 sdt: $('#sodienthoai').val(),
                 total: $('.total').text()
                 },
            success:function(data){
                if(data.status === 'success')
                {
                    window.location.href = data.redirect_url;
                }        
                },
                error: function(data){

                }

        })

        }
        

    })

    })
    
</script>
    
@endpush
