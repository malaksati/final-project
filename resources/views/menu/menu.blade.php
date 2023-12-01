@extends("layout.app")
@section("title")
Menu Page
@endsection
@section("basic-section")
<section class="header text-center p-5">
    <div class="container">
    <h1 class="heading-section my-3" style="font-size: 60px">Our Menu</h1>
    <p class="p-section lh-lg m-auto" style="width: 30rem;">We consider all the drivers of change gives you the components you need to change to create a truly happens.</p>
    <div class="cards d-flex gap-3 py-5 flex-wrap justify-content-center">
        @foreach ($items as $item)
        <div class="box border text-center rounded-3" style="width: 16rem;">
            <div class="image rounded-3 overflow-hidden" style="width: 16rem;">
                <img class="rounded-3" style="width: 16rem;" src="{{ $item->image }}" alt="">
            </div>
            <div class="content p-3">
            <p class="color-red fw-bold m-1">$ {{ $item->price }}</p>
            <h4 class="py-1 fw-bold" style="font-size: 18px;">{{ $item->name }}</h4>
            <p style="font-size: 14px">{{ $item->description }}</p>
            <div>
                @if(Auth::user() && Auth::user()->role == 'admin')
                <a href="{{ url("/items/update", $item->id) }}" class="btn btn-success">Edit</a>
                <a href="{{ url("/items/delete", $item->id) }}" class="btn btn-danger">Delete</a>
                @endif
            </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</section>
<section class="brands py-5 bg-light">
    <div class="container d-flex" style="gap: 40px;">
        <div class="content px-3 w-50">
            <h2 class="heading-section m-0 mb-3">You can order through apps</h2>
            <p class="m-auto text-center" style="width: 20rem;">Lorem ipsum dolor sit amet consectetur adipiscing elit enim bibendum sed et aliquet aliquet risus tempor semper.</p>
        </div>
        <div class="images d-flex flex-column gap-3">
            <div style="gap: 2.5rem" class="barnd d-flex justify-content-center">
                <img style="width: 10rem" src="{{ asset('assets/images/brand/1.png') }}" alt="">
                <img style="width: 10rem" src="{{ asset('assets/images/brand/2.png') }}" alt="">
                <img style="width: 10rem" src="{{ asset('assets/images/brand/3.png') }}" alt="">
            </div>
            <div style="gap: 5rem" class="barnd d-flex justify-content-center">
                <img style="width: 10rem" src="{{ asset('assets/images/brand/7.png') }}" alt="">
                <img style="width: 10rem" src="{{ asset('assets/images/brand/8.png') }}" alt="">
                <img style="width: 10rem" src="{{ asset('assets/images/brand/9.png') }}" alt="">
            </div>
            <div style="gap: 2.5rem" class="barnd d-flex justify-content-center">
                <img style="width: 10rem" src="{{ asset('assets/images/brand/4.png') }}" alt="">
                <img style="width: 10rem" src="{{ asset('assets/images/brand/5.png') }}" alt="">
                <img style="width: 10rem" src="{{ asset('assets/images/brand/6.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection