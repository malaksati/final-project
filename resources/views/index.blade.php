@extends("layout.app")
@section("title")
Home Page
@endsection
@section("basic-section")
<section class="hero position-relative">
    @isset($message)
    <div class="container w-50">
        <div class="alert alert-info my-2">
            <strong>{{ $message }}</strong>
        </div>
    </div>
    @endisset
    @if(Auth::user())
    <div class="nots position-relative" style="width: 50%;">
        <a class="position-absolute btn btn-outline-warning bg-light my-2" href="#" id="col" style="margin-left: 2rem;z-index: 100"><i class="fa-2x fa-regular fa-bell text-warning"></i></a>
        @if (!$books->isEmpty())
        <div class="active notification position-absolute w-50 px-3 pt-3 d-flex gap-3 rounded-3" style="display: none; left: 2rem;
            top: 4rem;;z-index: 100; background-color: rgba(255, 255, 255, 0.822);">
            <ul class="noti">
                @foreach ($books as $book)
                    <li>
                        <p><strong> Booking {{ $book->id }} is {{ $book->status }}<strong></p>
                    </li>            
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    @endif
    <div class="hero-img position-relative" style="overflow:hidden;">
        <img style="filter: blur(1px); opacity: 0.99;" class="mw-100" src="{{ asset('assets/images/hero.png') }}" alt="">
    </div>
    <div class="content position-absolute top-50 start-50 translate-middle">
        <h1 class="text-center display-2">Best food for your tase</h1>
        <p class="text-center lh-lg">Discover delectable cuisine and unforgettable moments in our welcoming, culinary haven.</p>
        <div class="btns d-flex justify-content-center align-items-center">
            <a href="{{ url('/book') }}" class="btn btn-lg btn-danger rounded-pill">Book A Table</a>
            <a href="{{ url('/menu') }}" class="btn btn-lg btn-outline-dark rounded-pill">Explore Menu</a>
        </div>
    </div>
</section>
<section class="browse py-5">
    <div class="container">
    <h2 class="heading-section">Browse Our Menu</h2>
    <div class="boxes d-flex px-5" style="gap: 20px;">
        <div class="box border text-center p-4 rounded-3">
            <div class="image position-relative">
                <img class="position-relative" src="{{ asset('assets/images/bg-tea.svg') }}" alt="">
                <img class="position-absolute top-50 start-50 translate-middle" src="{{ asset('assets/images/tea.svg') }}" alt="">
            </div>
            <h4 class="py-2" style="font-weight: 600">Breakfast</h4>
            <p style="font-size: 14px">In the new era of technology we look in the future with certainty and pride for our life.</p>
            <a class="d-block color-red my-3 fw-bold" href="{{ url('/menu') }}">Explore Menu</a>
        </div>
        <div class="box border text-center p-4 rounded-3">
            <img src="{{ asset('assets/images/main-dish.svg') }}" alt="">
            <h4 class="py-2" style="font-weight: 600">Main Dishes</h4>
            <p style="font-size: 14px">In the new era of technology we look in the future with certainty and pride for our life.</p>
            <a class="d-block color-red my-3 fw-bold" href="{{ url('/menu') }}">Explore Menu</a>
        </div>
        <div class="box border text-center p-4 rounded-3">
            <img src="{{ asset('assets/images/drink.svg') }}" alt="">
            <h4 class="py-2" style="font-weight: 600">Drinks</h4>
            <p style="font-size: 14px">In the new era of technology we look in the future with certainty and pride for our life.</p>
            <a class="d-block color-red my-3 fw-bold" href="{{ url('/menu') }}">Explore Menu</a>
        </div>
        <div class="box border text-center p-4 rounded-3">
            <img src="{{ asset('assets/images/dessert.svg') }}" alt="">
            <h4 class="py-2" style="font-weight: 600">Desserts</h4>
            <p style="font-size: 14px">In the new era of technology we look in the future with certainty and pride for our life.</p>
            <a class="d-block color-red my-3 fw-bold" href="{{ url('/menu') }}">Explore Menu</a>
        </div>
    </div>
</div>
</section>
<section class="healthy py-5">
    <div class="container d-flex" style="gap: 6rem">
        <div class="images position-relative">
            <div class="image" style="width: 30rem; height: 31rem;">
                <img class="rounded-3" style="width: 27rem" src="{{ asset('assets/images/image 111.png') }}" alt="">
            </div>
            <div class="info p-4 position-absolute bottom-0 end-0 bg-dark text-light rounded-3" style="width: 70%">
                <h5 class="pb-2 px-3">Come and visit us</h5>
                <p style="font-size: 14px" class="my-2"><i class="fa fa-light fa-phone mx-3"></i>(414) 857 - 0107</p>
                <p style="font-size: 14px" class="mb-2"><i class="fa fa-light fa-envelope mx-3"></i>yummy@bistrobliss</p>
                <p style="font-size: 14px" class="mb-2"><i class="fa fa-light fa-location mx-3"></i>837 W. Marshall Lane Marshalltown, IA 50158, Los Angeles</p>
            </div>
        </div>
        <div class="content">
            <h2 class="heading-section">We provide healthy food for your family.</h2>
            <p class="my-3 fw-bold">Our story began with a vision to create a unique dining experience that merges fine dining, exceptional service, and a vibrant ambiance. Rooted in city's rich culinary culture, we aim to honor our local roots while infusing a global palate.</p>
            <p class="my-3">At place, we believe that dining is not just about food, but also about the overall experience. Our staff, renowned for their warmth and dedication, strives to make every visit an unforgettable event.</p>
            <a href="{{ url('/about') }}" class="btn btn-lg btn-outline-dark rounded-pill my-4">More About Us</a>
        </div>
    </div>
</section>
<section class="services py-5">
    <div class="container">
        <h2 class="heading-section">We also offer unique services for your events</h2>
        <div class="boxes d-flex justify-content-center" style="gap: 20px;">
            <div class="box border rounded-3">
                <img class="rounded-3" style="width: 17rem" src="{{ asset('assets/images/kebab-set-table 1.png') }}" alt="">
                <div class="py-3">
                    <h4 class="p-2" style="font-weight: 600">Caterings</h4>
                    <p class="pt-2 px-2" style="font-size: 14px">In the new era of technology we look in the future with certainty for life.</p>
                </div>
            </div>    
            <div class="box border rounded-3">
                <img class="rounded-3" style="width: 17rem" src="{{ asset('assets/images/charming-female-blowing-candles-birthday-cake-after-making-her-wish-party 1.png') }}" alt="">
                <div class="py-3">
                <h4 class="p-2" style="font-weight: 600">Birthdays</h4>
                <p class="pt-2 px-2" style="font-size: 14px">In the new era of technology we look in the future with certainty for life.</p>
            </div>
            </div>
            <div class="box border rounded-3">
                <div style="width: 17rem; height: 17.7rem;" class="rounded-3 image overflow-hidden">
                <img style="width: 20rem" src="{{ asset('assets/images/happy-man-wife-sunny-day 1.png') }}" alt="">
            </div>
                <div class="py-3">
                <h4 class="p-2" style="font-weight: 600">Weddings</h4>
                <p class="pt-2 px-2" style="font-size: 14px">In the new era of technology we look in the future with certainty for life.</p>
            </div>
            </div>
            <div class="box border rounded-3">
                <img class="rounded-3" style="width: 17rem" src="{{ asset('assets/images/group-friends-eating-restaurant 1.png') }}" alt="">
                <div class="py-3">
                <h4 class="p-2" style="font-weight: 600">Events</h4>
                <p class="pt-2 px-2" style="font-size: 14px">In the new era of technology we look in the future with certainty for life.</p>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection
