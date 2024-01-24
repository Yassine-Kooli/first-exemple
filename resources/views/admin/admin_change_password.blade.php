@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">

    <div class="row profile-body">
      <!-- left wrapper start -->
      <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
        <div class="card rounded">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="card-body">
                    <h3>{{$profileData->name}}</h3>
                </div>
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
                     
                          <button type="submit" class="btn btn-primary me-2">Submit</button>
                      </form>
                </div>
          </div>
        </div>
      </div>
    </div>
</div>


@endsection


















