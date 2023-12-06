@extends('layout.app')
@section('title')
    Update Profile
@endsection
@section('basic-section')
<section class="update-profile">
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-4">
                <img class="w-50 rounded" src="{{ asset($user->image) }}" alt="photo">
                <form action="{{ url('profile/update-profile/edit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $user->id }}" name="id" />
                    <div class="mb-3">
                        <label class="form-label my-3 mx-1">Choose a Photo Profile: </label>
                        <input type="file" class="form-control" name="image" />
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-danger" value="Update">
                    </div>
                </form>
            </div>
            <div class="col-lg-5">
                <h2 class="mb-5 text-danger">{{ $user->username }}</h2>
                <div class="row">
                    <form method="POST" action="{{ url('profile/update-profile/edit') }}">
                        @csrf
                        <input type="hidden" value="{{ $user->id }}" name="id">
                        <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6" id="info-label">
                            <label class="mb-3 form-label w-100">Age</label>
                            <label class="my-3 form-label w-100">Email</label>
                            <label class="my-3 form-label w-100">Gender</label>
                            <label class="my-3 form-label w-100">Address</label>
                            <label class="my-3 form-label w-100">Phone</label>
                            <label class="my-3 form-label w-100">Birthdate</label>
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-6" id="infoo">
                            <input type="number" class="form-control mb-3" name="age" value="{{ $user->age }}" />
                            <input type="email" class="form-control mb-3" name="email" value="{{ $user->email }}" />
                            <select class="form-select mb-3" name="gender">
                                <option value="NA">NA</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                            <input type="text" class="form-control mb-3" name="address" value="{{ $user->address }}">
                            <input type="text" class="form-control mb-3" name="phone" value="{{ $user->phone }}" />
                            <input type="date" class="form-control mb-3" name="birthdate" value="{{ $user->birthdate }}" />
                        </div>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-danger" value="Update">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <h3 class="mb-3">Change Password:</h3>
                <form action="{{ url('profile/update-profile/edit/pass') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $user->id }}" name="id" />
                    <div class="mb-3">
                        <label class="form-label my-3 mx-1">Old Password: </label>
                        <input type="password" class="form-control" name="old-pass" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label my-3 mx-1">New Password: </label>
                        <input type="password" class="form-control" name="new-pass" />
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-danger" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection