@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">

    <div class="row profile-body">
      <!-- left wrapper start -->
      <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
        <div class="card rounded">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <img class="wd-70 rounded-circle" src="{{ (!empty($profileData->photo)) ? asset('uploads/admin_images/'.$profileData->photo) : asset('uploads/user_image.jpg') }}" alt="profile">

                 <div class="card-body">
                 <h3>{{$profileData->name}}</h3>
                 </div>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">User Name:</label>
              <p class="text-muted">{{$profileData->name}}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
              <p class="text-muted">{{$profileData->phone}}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
              <p class="text-muted">{{$profileData->email}}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Adress:</label>
              <p class="text-muted">{{$profileData->adress}}</p>
            </div>
            <div class="mt-3 d-flex social-links">
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="github"></i>
              </a>
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="twitter"></i>
              </a>
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="col-md-9 col-xl-9 middle-wrapper">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">

               <h3>Edit Admin Profile</h3>
              <br>

                    <form method="post" action="{{ route('admin.profile.store') }}" class="card-title" enctype="multipart/form-data">
                         @csrf
                      <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputUsername1" autocomplete="off" value="{{$profileData->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" autocomplete="off" value="{{$profileData->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Photo</label>
                            <input class="form-control" name="photo" type="file" id="image">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Phone</label>
                          <input type="text" name="phone" class="form-control" id="exampleInputPhone1" autocomplete="off" value="{{$profileData->phone}}">
                      </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Address</label>
                            <input type="text" name="adress" class="form-control" id="exampleInputAdress1" autocomplete="off" value="{{$profileData->adress}}">
                        </div>
                          <button type="submit" class="btn btn-primary me-2">Submit</button>
                      </form>
                </div>
          </div>
        </div>
      </div>
    </div>
</div>


@endsection


















