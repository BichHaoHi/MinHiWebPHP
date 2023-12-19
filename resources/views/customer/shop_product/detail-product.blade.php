@extends('frontend.layouts.master')
@section('content')
    <div>

       
        {{-- <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <p>Price: {{ $product->price }}</p> --}}
    </div>

    


    <!--==========================
    PRODUCT  REPORT MODAL VIEW
    ===========================-->
    <section class="product_popup_modal report_modal">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Report Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="far fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <form>
                                    <div class="wsus__single_input">
                                        <label>Subject</label>
                                        <input type="text" placeholder="Type Subject">
                                    </div>
                                    <div class="wsus__single_input">
                                        <label>email</label>
                                        <input type="email" placeholder="Type Email">
                                    </div>
                                    <div class="wsus__single_input">
                                        <label>Description</label>
                                        <textarea cols="3" rows="3"
                                            placeholder="Brief description of your issue"></textarea>
                                    </div>
                                    <div class="wsus__report_img">
                                        <div class="img_upload">
                                            <div class="gallery">
                                                <a class="cam" href="javascript:void(0)"><span><i
                                                            class="fas fa-image"></i></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="common_btn">submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
    PRODUCT REPORT MODAL VIEW 
    ===========================-->


    <!--==========================
      PRODUCT MODAL VIEW START
    ===========================-->
    <section class="product_popup_modal">
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="far fa-times"></i></button>
                        <div class="row">
                            <div class="col-xl-6 col-12 col-sm-10 col-md-8 col-lg-6 m-auto display">
                                <div class="wsus__quick_view_img">
                                    <a class="venobox wsus__pro_det_video" data-autoplay="true" data-vbtype="video"
                                        href="https://youtu.be/7m16dFI1AF8">
                                        <i class="fas fa-play"></i>
                                    </a>
                                    <div class="row modal_slider">
                                        <div class="col-xl-12">
                                            <div class="modal_slider_img">
                                                <img src="images/zoom1.jpg" alt="product" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="modal_slider_img">
                                                <img src="images/zoom2.jpg" alt="product" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="modal_slider_img">
                                                <img src="images/zoom3.jpg" alt="product" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="modal_slider_img">
                                                <img src="images/zoom4.jpg" alt="product" class="img-fluid w-100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="wsus__pro_details_text">
                                    <a class="title" href="#">Electronics Black Wrist Watch</a>
                                    <p class="wsus__stock_area"><span class="in_stock">in stock</span> (167 item)</p>
                                    <h4>135 000<del>185 000</del></h4>
                                    <p class="review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span>20 review</span>
                                    </p>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                   
                                    
                                    </div>
                                    <div class="wsus_pro__det_size">
                                        <h5>size :</h5>
                                        <ul>
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">XL</a></li>
                                        </ul>
                                    </div>
                                    <div class="wsus__quentity">
                                        <h5>quentity :</h5>
                                        <form class="select_number">
                                            <input class="number_area" type="text" min="1" max="100" value="1" />
                                        </form>
                                        <h3>$50.00</h3>
                                    </div>
                                    <div class="wsus__selectbox">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6">
                                                <h5 class="mb-2">select:</h5>
                                                <select class="select_2" name="state">
                                                    <option>default select</option>
                                                    <option>select 1</option>
                                                    <option>select 2</option>
                                                    <option>select 3</option>
                                                    <option>select 4</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <h5 class="mb-2">select:</h5>
                                                <select class="select_2" name="state">
                                                    <option>default select</option>
                                                    <option>select 1</option>
                                                    <option>select 2</option>
                                                    <option>select 3</option>
                                                    <option>select 4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="wsus__button_area">
                                        <li><a class="add_cart" href="#">add to cart</a></li>
                                        <li><a class="buy_now" href="#">buy now</a></li>
                                    
                                    </ul>
                                   
                                    <div class="wsus__pro_det_share">
                                        <h5>share :</h5>
                                        <ul class="d-flex">
                                            <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a class="whatsapp" href="#"><i class="fab fa-whatsapp"></i></a></li>
                                            <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                        <h4>Thông tin chi tiết sản phẩm</h4>
                        <ul>
                            <li><a href="#">Danh mục sản phẩm</a></li>
                            <li><a href="#">Thông tin chi tiết sản phẩm </a></li>
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
                                
                                    <ul class='exzoom_img_ul'>
                                        <li><img class="zoom ing-fluid w-100" src="{{ asset('images/product/' . $product->link_photo) }}" alt="product"></li>
                                        {{-- <li><img class="zoom ing-fluid w-100" src="{{ asset('images/product/' . $product->photo1) }}" alt="product"></li>
                                        <li><img class="zoom ing-fluid w-100" src="{{ asset('images/product/' . $product->photo2) }}" alt="product"></li>
                                        <li><img class="zoom ing-fluid w-100" src=" " alt="product"></li> --}}


                                        
                                    </ul>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-7 col-lg-7">
                        <div class="wsus__pro_details_text">
                            <h1 class="title">{{ $product->name }}</h1>
                            <h3 class="wsus__stock_area"><span class="in_stock">Số lượng còn: </span> {{ $product->quantity }}</h3>
                            <h4>{{ $product->price }} VNĐ <del>{{ $product->price_todel }} VNĐ</del></h4>
                            <p class="review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>20 review</span>
                            </p>
                               
                            <div class="wsus__selectbox">
                                <div class="row">
                                    <div class="col-xl-6 col-sm-6">
                                        <h5 class="mb-2">Loại da của bạn:</h5>
                                        <select class="select_2" name="state">
                                            <option>Da hỗn hợp</option>
                                            <option>Da khô</option>
                                            <option>Da dầu</option>
                                            <option>Da thiên khô</option>
                                            <option>Da thiên dầu</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6 col-sm-6">
                                        <h5 class="mb-2">Loại sản phẩm:</h5>
                                        <select class="select_2" name="state">
                                            <option>50ml - 100ml</option>
                                            <option>150ml</option>
                                            <option>200ml</option>
                                            <option>400ml</option>
                                            <option>500ml</option>
                                            
                                        </select>
                                    </div>

                                    
                                </div>
                            </div>
                            </div>
                            
                            <div class="wsus__quentity">
                                <h5>Số lượng đặt :</h5>
                                <form class="select_number">
                                    <input class="number_area" type="text" min="1" max="100" value="1" />
                                </form>
                            </div>
                            
                            <ul class="wsus__button_area">
                                <li><a class="add_cart" href="#">Thêm vào giỏ hàng</a></li>
                                <li><a class="buy_now" href="#">Mua ngay</a></li>
                               
                            </ul>
                            
                           
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
                                        aria-controls="pills-contact2" aria-selected="false">Đánh giá từ khách hàng</button>
                                </li>
                                
                            </ul>
                            <div class="tab-content" id="pills-tabContent4">
                                <div class="tab-pane fade  show active " id="pills-home22" role="tabpanel"
                                    aria-labelledby="pills-home-tab7">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="wsus__description_area">

                                                <h4>DÀNH CHO CÁC LOẠI DA: {{ $product->skin_type }}</h4>
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
                                                <p><span>Thương hiệu: </span> {{ $product->provider }}</p>
                                                <p><span>Xuất xứ thương hiệu: </span> NGHĨ LÀ NÊN THÊM BẢNG NCC ĐỂ HIỂN THỊ</p>
                                                <p><span>Thành phần: </span> THÊM THÔNG TIN THÀNH PHẦN VÀO MÔ TẢ: {{ $product->description }}</p>

                                                <p>
                                                    <span>Giới tính: </span>
                                                    @if($product->sex == 'Male')
                                                        Nam
                                                    @elseif($product->sex == 'Female')
                                                        Nam và Nữ
                                                    @endif
                                                </p>
                                               
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="wsus__pro_det_info">
                                                <h4>Thông tin nhà cung cấp</h4>
                                                <p><span>Tên NCC: </span> {{ $product->provider }} </p>
                                                <p><span>Mô tả: </span> Thêm thuộc tính để mô tả được tt NCC</p>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                        @if($feedbacks->count() > 0)
                                <div class="tab-pane fade" id="pills-contact2" role="tabpanel"
                                    aria-labelledby="pills-contact-tab2">
                                    <div class="wsus__pro_det_review">
                                        <div class="wsus__pro_det_review_single">
                                            <div class="row">
                                                <div class="col-xl-8 col-lg-7">
                                                    <div class="wsus__comment_area">
                                                        <h4>Phản hồi từ khách hàng<span>
                                                            {{ $totalComments }}
                                                        </span></h4>
                                @foreach($feedbacks as $feedback)
                                                        <div class="wsus__main_comment">
                                                            <div class="wsus__comment_img">
                                                                <img src="https://cdn2.iconfinder.com/data/icons/audio-16/96/user_avatar_profile_login_button_account_member-512.png" alt="user"
                                                                    class="img-fluid w-100">
                                                            </div>
                        
                        
                        
                                                            <div class="wsus__comment_text reply">
                                                                <h6>{{ $feedback->name }}<span>{{ $feedback->point }}<i
                                                                            class="fas fa-star"></i></span></h6>
                                                                <span>{{ $feedback->created_at}}</span>
                                                                <p>{{ $feedback->desc}}
                                                                </p>
                                                                <ul class="">
                                                                    <li><img src="images/headphone_1.jpg" alt="product"
                                                                            class="img-fluid w-100"></li>
                                                                    <li><img src="images/headphone_2.jpg" alt="product"
                                                                            class="img-fluid w-100"></li>
                                                                    <li><img src="images/kids_1.jpg" alt="product"
                                                                            class="img-fluid w-100"></li>
                                                                </ul>
                                                                <a href="#" data-bs-toggle="collapse"
                                                                    data-bs-target="#flush-collapsetwo">Trả lời</a>
                                                                <div class="accordion accordion-flush"
                                                                    id="accordionFlushExample2">
                                                                    <div class="accordion-item">
                                                                        <div id="flush-collapsetwo"
                                                                            class="accordion-collapse collapse"
                                                                            aria-labelledby="flush-collapsetwo"
                                                                            data-bs-parent="#accordionFlushExample">
                                                                            <div class="accordion-body">
                                                                                <form>
                                                                                    <div
                                                                                        class="wsus__riv_edit_single text_area">
                                                                                        <i class="far fa-edit"></i>
                                                                                        <textarea cols="3" rows="1"
                                                                                            placeholder="Your Text"></textarea>
                                                                                    </div>
                                                                                    <button type="submit"
                                                                                        class="common_btn">Gửi</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                @endforeach
                @else
                <p>Chưa có đánh giá nào cho sản phẩm này.</p>
                @endif

                                                        </div>
                                                        
                                                        <div id="pagination">
                                                            <nav aria-label="Page navigation example">
                                                                <ul class="pagination">
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#"
                                                                            aria-label="Previous">
                                                                            <i class="fas fa-chevron-left"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="page-item"><a
                                                                            class="page-link page_active" href="#">1</a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">2</a></li>
                                                                    {{-- <li class="page-item"><a class="page-link"
                                                                            href="#">3</a></li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">4</a></li>
                                                                    <li class="page-item"> --}}
                                                                        <a class="page-link" href="#" aria-label="Next">
                                                                            <i class="fas fa-chevron-right"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-xl-4 col-lg-5 mt-4 mt-lg-0"> --}}

                                                    <div class="col-xl-4 col-lg-5 mt-4">
                                                    <div class="wsus__post_comment rev_mar" id="sticky_sidebar3">
                                                        <h4>Viết đánh giá sản phẩm</h4>
                                                        <form method="post" action="{{ route('submitFeedback', ['product' => $product->id]) }}">
                                                            @csrf
                                                            <p class="rating">
                                                                <span>Chọn số sao : </span>
                                                                <i class="fas fa-star" data-star="1"></i>
                                                                <i class="fas fa-star" data-star="2"></i>
                                                                <i class="fas fa-star" data-star="3"></i>
                                                                <i class="fas fa-star" data-star="4"></i>
                                                                <i class="fas fa-star" data-star="5"></i>
                                                                <input type="hidden" name="stars" id="selectedStars" value="0">
                                                            </p>

                                                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                            <script>
                                                                $(document).ready(function() {
                                                                    $('.fa-star').on('click', function() {
                                                                        // Đặt tất cả sao về trạng thái không được chọn
                                                                        $('.fa-star').removeClass('selected');
                                                            
                                                                        // Đặt sao được chọn và các sao trước đó về trạng thái đã chọn
                                                                        $(this).addClass('selected');
                                                                        $(this).prevAll('.fa-star').addClass('selected');
                                                            
                                                                        // Lấy giá trị của số sao đã chọn và gán vào trường ẩn
                                                                        var selectedStars = $(this).data('star');
                                                                        $('#selectedStars').val(selectedStars);
                                                                    });
                                                                });
                                                            </script>


                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="wsus__single_com">
                                                                        <input type="text" name="name" placeholder="Name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-12">
                                                                    <div class="wsus__single_com">
                                                                        <input type="tel" name="phone" placeholder="Phone" pattern="[0-9]{10}" title="Enter a valid 10-digit phone number" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-12">
                                                                    <div class="col-xl-12">
                                                                        <div class="wsus__single_com">
                                                                            <textarea cols="3" rows="3"
                                                                                name="feedback"
                                                                                placeholder="Viết đánh giá"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                                                            <button class="common_btn" type="submit">GỬI
                                                                </button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact23" role="tabpanel"
                                    aria-labelledby="pills-contact-tab23">
                                    <div class="wsus__pro_det_comment">
                                        <div class="row">
                                            <div class="col-xl-7 col-lg-6">
                                                <div class="wsus__comment_area">
                                                    <h4>comment <span>03</span></h4>
                                                    <div class="wsus__main_comment">
                                                        <div class="wsus__comment_img">
                                                            <img src="images/dashboard_user.jpg" alt="user"
                                                                class="img-fluid w-100">
                                                        </div>
                                                        <div class="wsus__comment_text reply">
                                                            <h6>Shopnil mahadi <span>09 Jul 2021</span></h6>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Cupiditate sint molestiae eos? Officia, fuga eaque.</p>
                                                            <a href="#" data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapsetwo2">reply</a>
                                                            <div class="accordion accordion-flush"
                                                                id="accordionFlushExample2">
                                                                <div class="accordion-item">
                                                                    <div id="flush-collapsetwo2"
                                                                        class="accordion-collapse collapse"
                                                                        aria-labelledby="flush-collapsetwo"
                                                                        data-bs-parent="#accordionFlushExample">
                                                                        <div class="accordion-body">
                                                                            <form>
                                                                                <div
                                                                                    class="wsus__riv_edit_single text_area">
                                                                                    <i class="far fa-edit"></i>
                                                                                    <textarea cols="3" rows="1"
                                                                                        placeholder="Your Text"></textarea>
                                                                                </div>
                                                                                <button type="submit"
                                                                                    class="common_btn">submit</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wsus__main_comment wsus__com_reply">
                                                        <div class="wsus__comment_img">
                                                            <img src="images/ts-3.jpg" alt="user"
                                                                class="img-fluid w-100">
                                                        </div>
                                                        <div class="wsus__comment_text reply">
                                                            <h6>Smith jhon <span>09 Jul 2021</span></h6>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Cupiditate sint molestiae eos? Officia, fuga eaque.</p>
                                                            <a href="#" data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapsetwo">reply</a>
                                                            <div class="accordion accordion-flush"
                                                                id="accordionFlushExample">
                                                                <div class="accordion-item">
                                                                    <div id="flush-collapsetwo"
                                                                        class="accordion-collapse collapse"
                                                                        aria-labelledby="flush-collapsetwo"
                                                                        data-bs-parent="#accordionFlushExample">
                                                                        <div class="accordion-body">
                                                                            <form>
                                                                                <div
                                                                                    class="wsus__riv_edit_single text_area">
                                                                                    <i class="far fa-edit"></i>
                                                                                    <textarea cols="3" rows="1"
                                                                                        placeholder="Your Text"></textarea>
                                                                                </div>
                                                                                <button type="submit"
                                                                                    class="common_btn">submit</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wsus__main_comment">
                                                        <div class="wsus__comment_img">
                                                            <img src="images/team_1.jpg" alt="user"
                                                                class="img-fluid w-100">
                                                        </div>
                                                        <div class="wsus__comment_text reply">
                                                            <h6>Smith jhon <span>09 Jul 2021</span></h6>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Cupiditate sint molestiae eos? Officia, fuga eaque.</p>
                                                            <a href="#" data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapsetwo3">reply</a>
                                                            <div class="accordion accordion-flush"
                                                                id="accordionFlushExample3">
                                                                <div class="accordion-item">
                                                                    <div id="flush-collapsetwo3"
                                                                        class="accordion-collapse collapse"
                                                                        aria-labelledby="flush-collapsetwo"
                                                                        data-bs-parent="#accordionFlushExample">
                                                                        <div class="accordion-body">
                                                                            <form>
                                                                                <div
                                                                                    class="wsus__riv_edit_single text_area">
                                                                                    <i class="far fa-edit"></i>
                                                                                    <textarea cols="3" rows="1"
                                                                                        placeholder="Your Text"></textarea>
                                                                                </div>
                                                                                <button type="submit"
                                                                                    class="common_btn">submit</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="pagination">
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <i class="fas fa-chevron-left"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link page_active"
                                                                        href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">2</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">3</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">4</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <i class="fas fa-chevron-right"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-6 mt-4 mt-lg-0">
                                                <div class="wsus__post_comment" id="sticky_sidebar2">
                                                    <h4>post a comment</h4>
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="wsus__single_com">
                                                                    <input type="text" placeholder="Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="wsus__single_com">
                                                                    <input type="email" placeholder="Email">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="wsus__single_com">
                                                                    <textarea cols="3" rows="3"
                                                                        placeholder="Your Comment"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="common_btn" type="submit">post comment</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact239" role="tabpanel"
                                    aria-labelledby="pills-contact-tab239">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="wsus__contact_question">
                                                <h5>People usually ask these</h5>
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                                How can I cancel my order?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit.
                                                                    Voluptatum voluptas ea hic excepturi sit, sapiente
                                                                    optio
                                                                    deleniti pariatur. Dolorum in quos magni?
                                                                    Necessitatibus
                                                                    recusandae cupiditate iste expedita amet voluptatem
                                                                    laudantium.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                Why is my registration delayed?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit.
                                                                    Voluptatum voluptas ea hic excepturi sit, sapiente
                                                                    optio
                                                                    deleniti pariatur. Dolorum in quos magni?
                                                                    Necessitatibus
                                                                    recusandae cupiditate iste expedita amet voluptatem
                                                                    laudantium.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                What do I need to buy products?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit.
                                                                    Voluptatum voluptas ea hic excepturi sit, sapiente
                                                                    optio
                                                                    deleniti pariatur. Dolorum in quos magni?
                                                                    Necessitatibus
                                                                    recusandae cupiditate iste expedita amet voluptatem
                                                                    laudantium.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThreet1">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThreet1" aria-expanded="false"
                                                                aria-controls="collapseThreet1">
                                                                How can I track an order?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThreet1" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThreet1"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit.
                                                                    Voluptatum voluptas ea hic excepturi sit, sapiente
                                                                    optio
                                                                    deleniti pariatur. Dolorum in quos magni?
                                                                    Necessitatibus
                                                                    recusandae cupiditate iste expedita amet voluptatem
                                                                    laudantium.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThreet2">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThreet2" aria-expanded="false"
                                                                aria-controls="collapseThreet2">
                                                                How can I get money back?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThreet2" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThreet2"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit.
                                                                    Voluptatum voluptas ea hic excepturi sit, sapiente
                                                                    optio
                                                                    deleniti pariatur. Dolorum in quos magni?
                                                                    Necessitatibus
                                                                    recusandae cupiditate iste expedita amet voluptatem
                                                                    laudantium.</p>
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
    <section id="wsus__flash_sell">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__section_header">
                        <h3>Các sản phẩm tương tự</h3>
                        <a class="see_btn" href="#">see more <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row flash_sell_slider">
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__new">New</span>
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="product_details.html">
                            <img src="images/pro3.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/pro3_3.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">Electronics </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(133 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">hp 24" FHD monitore</a>
                            <p class="wsus__price">$159 <del>$200</del></p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__new">New</span>
                        <a class="wsus__pro_link" href="product_details.html">
                            <img src="images/pro4.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/pro4_4.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(17 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">men's casual fashion watch</a>
                            <p class="wsus__price">$159 <del>$200</del></p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="product_details.html">
                            <img src="images/pro9.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/pro9_9.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(120 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">men's fashion sholder bag</a>
                            <p class="wsus__price">$159 <del>$200</del></p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__new">New</span>
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="product_details.html">
                            <img src="images/pro2.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/pro2_2.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(72 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">men's casual shoes</a>
                            <p class="wsus__price">$159 <del>$200</del></p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="product_details.html">
                            <img src="images/pro4.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/pro4_4.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(17 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">men's casual fashion watch</a>
                            <p class="wsus__price">$159 <del>$200</del></p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--============================
        RELATED PRODUCT END
    ==============================-->




    <!--============================
        SCROLL BUTTON START
    ==============================-->
    <div class="wsus__scroll_btn">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!--============================
        SCROLL BUTTON  END
    ==============================-->


    <!--jquery library js-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <!--bootstrap js-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!--font-awesome js-->
    <script src="js/Font-Awesome.js"></script>
    <!--select2 js-->
    <script src="js/select2.min.js"></script>
    <!--slick slider js-->
    <script src="js/slick.min.js"></script>
    <!--simplyCountdown js-->
    <script src="js/simplyCountdown.js"></script>
    <!--product zoomer js-->
    <script src="js/jquery.exzoom.js"></script>
    <!--nice-number js-->
    <script src="js/jquery.nice-number.min.js"></script>
    <!--counter js-->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.min.js"></script>
    <!--add row js-->
    <script src="js/add_row_custon.js"></script>
    <!--multiple-image-video js-->
    <script src="js/multiple-image-video.js"></script>
    <!--sticky sidebar js-->
    <script src="js/sticky_sidebar.js"></script>
    <!--price ranger js-->
    <script src="js/ranger_jquery-ui.min.js"></script>
    <script src="js/ranger_slider.js"></script>
    <!--isotope js-->
    <script src="js/isotope.pkgd.min.js"></script>
    <!--venobox js-->
    <script src="js/venobox.min.js"></script>
    <!--classycountdown js-->
    <script src="js/jquery.classycountdown.js"></script>

    <!--main/custom js-->
    <script src="js/main.js"></script>
@endsection