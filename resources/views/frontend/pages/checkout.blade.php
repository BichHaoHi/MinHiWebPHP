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
                                        <select class="select_2" name="state" id="province">
                                            <option value="">Thành phố</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <div class="wsus__check_single_form">
                                        <select class="select_2" name="state" id="district">
                                            <option value="">Tỉnh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <div class="wsus__check_single_form">
                                        <select class="select_2" name="state" id="ward">
                                            <option value="">Phường</option>
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
                            <p class="wsus__product">Phương thức thanh toán</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="COD"
                                    value="COD" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Thanh toán khi nhận hàng
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="wallet"
                                    value="MOMO">
                                <label class="form-check-label" for="exampleRadios2" name = "payUrl" >
                                    Ví điện tử 
                                </label>
                            </div>
                            <div class="wsus__order_details_summery">
                                <p><b>total:</b> <span class="total">{{ $total }}</span> vnđ</p>
                            </div>
                            
                            <button name="payUrl"  id="submitCheckoutForm" class="common_btn">Đặt hàng</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
let result;
const host = "https://provinces.open-api.vn/api/";
var callAPI = (api) => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data, "province");
        });
}
callAPI('https://provinces.open-api.vn/api/?depth=1');
var callApiDistrict = (api) => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data.districts, "district");
        });
}
var callApiWard = (api) => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data.wards, "ward");
        });
}

var renderData = (array, select) => {
    let row = ' <option disable value="">chọn</option>';
    array.forEach(element => {
        row += `<option value="${element.code}">${element.name}</option>`
    });
    document.querySelector("#" + select).innerHTML = row
}

$("#province").change(() => {
    callApiDistrict(host + "p/" + $("#province").val() + "?depth=2");
    printResult();
});
$("#district").change(() => {
    callApiWard(host + "d/" + $("#district").val() + "?depth=2");
    printResult();
});
$("#ward").change(() => {
    printResult();
})

var printResult = () => {
    if ($("#district").val() != "" && $("#province").val() != "" &&
        $("#ward").val() != "") {
        result =$("#province option:selected").text() +
            " , " + $("#district option:selected").text() + " , " +
            $("#ward option:selected").text();
        // $("#result").text(result)
    }

}

    $(document).ready(function(){
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
}); 
        $('#submitCheckoutForm').on('click', function(e){
        if($("input[name='exampleRadios']:checked").val() === 'COD'){
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
                     ten: $('#ten').val(),
                     sdt: $('#sodienthoai').val(),
                     total: $('.total').text(),
                     address: $('#diachi').val() + ", " + result,
                     paymentMethod: $("input[name='exampleRadios']:checked").val()
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
        }else{
            console.log('momo nè');
            $.ajax({
                url: "{{ route('customer.checkout.form-submit') }}",
                method: 'POST',
                data: {
                     ten: $('#ten').val(),
                     sdt: $('#sodienthoai').val(),
                     total: $('.total').text(),
                     address: $('#diachi').val() + ", " + result,
                     paymentMethod: $("input[name='exampleRadios']:checked").val()
                      },
                success:function(data){
                    if(data.status === 'success')
                    {
                        // window.location.href = data.redirect_url;
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