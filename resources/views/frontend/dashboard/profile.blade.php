@extends('frontend.dashboard.layouts.master')
@section('content')
<section id="wsus__dashboard">
    <div class="container-fluid">
    @include('frontend.dashboard.layouts.sidebar')

      <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
          <div class="dashboard_content mt-2 mt-md-0">
            <h3><i class="far fa-user"></i> profile</h3>
            <div class="wsus__dashboard_profile">
              <div class="wsus__dash_pro_area">
                <h4>Information</h4>
                <form action="{{ route('customer.profile.update') }}" method="POST" >
                    @csrf
                    @method('PUT')
                        <div class="col-xl-6 col-md-6">
                          <div class="wsus__dash_pro_single">
                            <i class="fas fa-user-tie"></i>
                            <input type="text" placeholder="Name" name="name" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="col-xl-6 col-md-6">
                          <div class="wsus__dash_pro_single">
                            <i class="fas fa-user-tie"></i>
                            <input type="text" placeholder="Address" name="address"  value="{{ Auth::user()->address }}">
                          </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                          <div class="wsus__dash_pro_single">
                            <i class="fa-solid fa-phone-flip"></i>
                            <input type="text" placeholder="Phone" name="phone"  value="{{ Auth::user()->phone }}">
                          </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                          <div class="wsus__dash_pro_single">
                            <i class="fal fa-envelope-open"></i>
                            <input type="email" placeholder="Email" readonly  value="{{ Auth::user()->email }}">
                          </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="wsus__dash_pro_single">
                              <i class="fal fa-envelope-open"></i>
                              <input type="text" placeholder="PostCode" name="postcode"  value="{{ Auth::user()->postcode }}">
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="wsus__dash_pro_single">
                              <i class="fal fa-envelope-open"></i>
                              <input type="date" placeholder="Birthday" name="birthday"  value="{{ Auth::user()->birthday }}">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <button class="common_btn mb-4 mt-2" type="submit">upload</button>
                        </div>
                </form>

                    <div class="wsus__dash_pass_change mt-2">
                      <form action="{{ route('customer.profile.update.password') }}" method="POST">
                        @csrf
                          <div class="row">
                            <h4>Update Password</h4>
                            <div class="col-xl-4 col-md-6">
                              <div class="wsus__dash_pro_single">
                                <i class="fas fa-unlock-alt"></i>
                                <input type="password" placeholder="Current Pass" name="current_password">
                              </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                              <div class="wsus__dash_pro_single">
                                <i class="fas fa-unlock-alt"></i>
                                <input type="password" placeholder="New Pass" name="new_password">
                              </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                              <div class="wsus__dash_pro_single">
                                <i class="fas fa-unlock-alt"></i>
                                <input type="password" placeholder="Confirm Pass" name="password_confirmation">
                              </div>
                            </div>
                            <div class="col-xl-12">
                              <button class="common_btn" type="submit">upload</button>
                            </div>
                          </div>
                      </form>
                    </div>
                  </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection