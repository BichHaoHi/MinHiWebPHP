@extends('frontend.layouts.master')
@section('content')
    
    <!--==========================
      PRODUCT MODAL VIEW START
    ===========================-->
  
    <!--==========================
      PRODUCT MODAL VIEW END
    ===========================-->


    <!--============================
        BREADCRUMB START
    ==============================-->
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>products details</h4>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        BREADCRUMB END
    ==============================-->


    <!--============================
        PRODUCT DETAILS START
    ==============================-->
    <section id="wsus__product_details">
        <div class="container">
            <div class="wsus__details_bg">
                <div class="row">
                    <div class="col-xl-4 col-md-5 col-lg-5">
                        <div id="sticky_pro_zoom">
                            <div class="exzoom hidden" id="exzoom">
                                <div class="exzoom_img_box">
                                    <a class="venobox wsus__pro_det_video" data-autoplay="true" data-vbtype="video"
                                        href="https://www.youtube.com/watch?v=ebfXWwgjDPI">
                                        <i class="fas fa-play"></i>
                                    </a>
                                    <ul class='exzoom_img_ul'>
                                        <li><img class="zoom ing-fluid w-100" src="{{ asset($product->link_photo) }}" alt="product"></li>
    
                                    </ul>
                                </div>
                                <div class="exzoom_nav"></div>
                                <p class="exzoom_btn">
                                    <a href="javascript:void(0);" class="exzoom_prev_btn"> <i
                                            class="far fa-chevron-left"></i> </a>
                                    <a href="javascript:void(0);" class="exzoom_next_btn"> <i
                                            class="far fa-chevron-right"></i> </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-7 col-lg-7">
                        <div class="wsus__pro_details_text">
                            <a class="title" href="#">{{ $product->type }} {{ $product->name }}</a>
                            <p class="wsus__stock_area"><span class="in_stock">Có sẵn</span> {{$product->quantity}} sản ph</p>
                            <h4>{{ $product->price }} đ<del>đ60.00</del></h4>
                            <p class="review">
                                <span>20 review</span>
                            </p>
                          
                            <form class="shopping-cart-form">
                                <div class="wsus__selectbox">
                                    <div class="row">
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    </div>
                                </div>
                                <div class="wsus__quentity">
                                    <h5>Số lượng mua :</h5>
                                    <div class="select_number">
                                        <input class="number_area" name="qty" type="text" min="1" max="100" value="1" />
                                    </div>
                                </div>
                                
                                <ul class="wsus__button_area">
                                    {{-- gửi 1 ajax request đến 1 specify route --}}
                                    <li><button type="submit" class="add_cart" href="#" >Thêm vào giỏ hàng</button></li>
                                </ul>
                            </form>
                            <p class="brand_model"><span>Nhà cung cấp :</span>{{ $product->provider }}</p>
                            <div class="wsus__pro_det_share">
                                <h5>share :</h5>
                                <ul class="d-flex">
                                    <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="whatsapp" href="#"><i class="fab fa-whatsapp"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            {{-- <a class="wsus__pro_report" href="#" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"><i class="fal fa-comment-alt-smile"></i> Report incorrect
                                product information.</a> --}}
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-12 mt-md-5 mt-lg-0">
                        <div class="wsus_pro_det_sidebar" id="sticky_sidebar">
                            <ul>
                                <li>
                                    <span><i class="fal fa-truck"></i></span>
                                    <div class="text">
                                        <h4>Return Available</h4>
                                        <!-- <p>Lorem Ipsum is simply dummy text of the printing</p> -->
                                    </div>
                                </li>
                                <li>
                                    <span><i class="far fa-shield-check"></i></span>
                                    <div class="text">
                                        <h4>Secure Payment</h4>
                                        <!-- <p>Lorem Ipsum is simply dummy text of the printing</p> -->
                                    </div>
                                </li>
                                <li>
                                    <span><i class="fal fa-envelope-open-dollar"></i></span>
                                    <div class="text">
                                        <h4>Warranty Available</h4>
                                        <!-- <p>Lorem Ipsum is simply dummy text of the printing</p> -->
                                    </div>
                                </li>
                            </ul>
                            {{-- <div class="wsus__det_sidebar_banner">
                                <img src="images/blog_1.jpg" alt="banner" class="img-fluid w-100">
                                <div class="wsus__det_sidebar_banner_text_overlay">
                                    <div class="wsus__det_sidebar_banner_text">
                                        <p>Black Friday Sale</p>
                                        <h4>Up To 70% Off</h4>
                                        <a href="#" class="common_btn">shope now</a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__pro_det_description">
                        <div class="wsus__details_bg">
                            <ul class="nav nav-pills mb-3" id="pills-tab3" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab7" data-bs-toggle="pill"
                                        data-bs-target="#pills-home22" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Đặc trị các vấn đề da</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab7" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile22" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Thông tin sản phẩm</button> 
                                        {{-- chứa mô tả, loại sản phẩm  --}}
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab2" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact2" type="button" role="tab"
                                        aria-controls="pills-contact2" aria-selected="false" style="font-size: 14px">Đánh giá từ khách hàng</button>
                                </li>
                                
                            </ul>
                            <div class="tab-content" id="pills-tabContent4">
                                <div class="tab-pane fade  show active " id="pills-home22" role="tabpanel"
                                    aria-labelledby="pills-home-tab7">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="wsus__description_area">
                                                <p>DÀNH CHO CÁC LOẠI DA: {{ $product->skin_type }}</p>
                                                <p>ĐẶC TRỊ CÁC VẤN ĐỀ DA: {{ $product->skin_problem }}</p>
                                            
                                        
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile22" role="tabpanel"
                                    aria-labelledby="pills-profile-tab7">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 mb-4 mb-lg-0">
                                            <div class="wsus__pro_det_info">
                                                <h4>Mô tả sản phẩm</h4>
                                                <p><span>Nhà cung cấp: {{ $product->provider }} </span></p>
                                                <p><span>Mô tả: </span> {{ $product->description }}</p>

                                                <p>
                                                    <span>Giới tính: {{ $product->sex }}</span>
                                                    
                                                </p>
                                               
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--============================
        PRODUCT DETAILS END
    ==============================-->


    <!--============================
        RELATED PRODUCT START
    ==============================-->
    
    <!--============================
        RELATED PRODUCT END
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
            $('.shopping-cart-form').on('submit', function(e){
                e.preventDefault();            
                let formData = $(this).serialize();
                console.log(formData);
                $.ajax({
                    method: 'POST',
                    data: formData,
                    url: "{{route('add-to-cart')}}",
                    success: function(data){
                        if(data.status=== 'success')
                        {
                            getCartCount();
                            toastr.success(data.message);
                        }else if(data.status === 'error')
                        {
                            toastr.error(data.message);
                        }
                    },
                    error: function(data){

                    }
                })
            })

            function getCartCount(){
                $.ajax({
                    method: 'GET',
                    url: "{{route('cart-count')}}",
                    success: function(data){
                        $('#cart-count').text(data);

                    },
                    error: function(data){

                    }
                })

            }
    })     
    </script>
@endpush



