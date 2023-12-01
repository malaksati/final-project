@extends('layout.app')
@section('title')
Profile
@endsection
@section('basic-section')
<section class="profile">
        <div class="container">
            <div class="row my-5">
                <div class="row">
                    <div class="col">
                        <h1 class="heading-section fs-1 mt-0">Welcome to Your Profile</h1>
                    </div>
                    <div class="col">
                        <a href="{{ url('profile/update', $user->id) }}" class="btn btn-outline-dark my-1">Update Profile</a>
                        <a href="{{ url('bookings') }}" class="btn btn-outline-dark my-1">My Bookings</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4">
                    <img class="w-75 rounded" src="{{ asset($user->image) }}" alt="photo">
                </div>
                <div class="col-lg-5 col-sm-8 col-md-8">
                    <h2 class="mb-5 color-red">{{ $user->username }}</h2>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <h5 class="mb-3">Age</h5>
                                    <h5 class="mb-3">Email</h5>
                                    <h5 class="mb-5">Gender</h5>
                                    <h5 class="mb-3">Address</h5>
                                    <h5 class="mb-3">Phone</h5>
                                    <h5 class="mb-5">Birthdate</h5>
                                </div>
                                <div class="col col-md-6 color-red col-sm-6">
                                    <h5 class="mb-3">{{ $user->age }}</h5>
                                    <h5 class="mb-3">{{ $user->email }}</h5>
                                    <h5 class="mb-5">{{ $user->gender }}</h5>
                                    <h5 class="mb-3">{{ $user->address }}</h5>
                                    <h5 class="mb-3">{{ $user->phone }}</h5>
                                    <h5 class="mb-3">{{ $user->birthdate }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection