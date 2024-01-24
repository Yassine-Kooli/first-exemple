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
                    <h3>hello {{$profileData->name}} !</h3>
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
                <h3>Admin Change Password</h3>
                <br>
                <form method="post" action="{{ route('admin.update.password') }}" class="card-title">
                 
                  @csrf
                  <div class="mb-3">
                    <label for="name" class="form-label">Current Password</label>
                    <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" id="current_password">
                    @error('current__password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label">new Password</label>
                    <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="new_password">
                    @error('new_password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label">confirm Password</label>
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
                @if (session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
                @endif
            
              </div>
            </div>
        </div>
      </div>
    </div>
</div>


@endsection


















