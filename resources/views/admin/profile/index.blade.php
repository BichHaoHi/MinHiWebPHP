@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Profile</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Profile</div>
      </div>
    </div>
    <div class="section-body">
      <h2 class="section-title">Hi, Admin!</h2>
     

      <div class="row mt-sm-4">
            {{-- <div class="col-12 col-md-12 col-lg-5">
            <div class="card profile-widget">
                <div class="profile-widget-header">                     
                <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                <div class="profile-widget-items">
                    <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Posts</div>
                    <div class="profile-widget-item-value">187</div>
                    </div>
                    <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Followers</div>
                    <div class="profile-widget-item-value">6,8K</div>
                    </div>
                    <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Following</div>
                    <div class="profile-widget-item-value">2,1K</div>
                    </div>
                </div>
                </div>
                <div class="profile-widget-description">
                <div class="profile-widget-name">Ujang Maman <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Web Developer</div></div>
                Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.
                </div>
                <div class="card-footer text-center">
                <div class="font-weight-bold mb-2">Follow Ujang On</div>
                <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="btn btn-social-icon btn-github mr-1">
                    <i class="fab fa-github"></i>
                </a>
                <a href="#" class="btn btn-social-icon btn-instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                </div>
            </div>
            </div> --}}
        <div class="col-12 col-md-12 col-lg-7">
          <div class="card">
            <form method="post" class="needs-validation" novalidate="" action="{{ route('admin.profile.update') }}">
              @csrf
              <div class="card-header">
                <h4>Edit Profile</h4>
              </div>
              <div class="card-body">
                  <div class="row">                               
                    <div class="form-group col-md-6 col-12">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" required="">
                    </div>
                  </div>
                  <div class="row">                               
                    <div class="form-group col-md-6 col-12">
                      <label>Address *</label>
                      <input type="text" name="address" class="form-control" value="{{ Auth::user()->address }}" required="">
                    </div>
                  </div>
                  <div class="row">                               
                    <div class="form-group col-md-6 col-12">
                      <label>Phone *</label>
                      <input type="tel" name="phone" class="form-control" value="{{ Auth::user()->phone }}" required="">
                    </div>
                  </div>
                  <div class="row">                               
                    <div class="form-group col-md-6 col-12">
                      <label>PostCode</label>
                      <input type="text" class="form-control" value="064303002139" required="">
                    </div>
                  </div>
                  <div class="row">                               
                    <div class="form-group col-md-6 col-12">
                      <label>Birthday</label>
                      <input type="text" class="form-control" value="2003-11-09" required="">
                    </div>
                  </div>
                  <div class="row">                               
                    <div class="form-group col-md-6 col-12">
                      <label>Email</label>
                      <input type="text" name="email" class="form-control" value="csk@gmail.com" readonly required="">
                    </div>
                  </div>
                   
                  
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Save Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection