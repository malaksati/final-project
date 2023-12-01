@extends("layout.app")
@section("title")
About Us
@endsection
@section("basic-section")
<section class="healthy py-5">
    <div class="container d-flex" style="gap: 6rem">
        <div class="images position-relative">
            <div class="image" style="width: 30rem; height: 31rem;">
                <img class="rounded-3" style="width: 27rem" src="{{ asset('assets/images/about-img.png') }}" alt="">
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
        </div>
    </div>
</section>
<section class="video my-5 position-relative">
    <div>
        <img class="w-100" src="{{ asset('assets/images/BG.png') }}" alt="">
    </div>
    <div class="container w-50 m-auto position-absolute top-50 start-50 translate-middle">
        <img style="cursor: pointer;" class="d-flex m-auto" src="{{ asset('assets/images/Play.svg') }}" alt="">
        <h2 class="text-light heading-section">Feel the authentic & original taste from us</h2>
    </div>
</section>
<section class="features py-3">
    <div class="container px-5">
        <div class="boxes d-flex" style="gap: 20px;">
            <div class="box d-flex gap-3">
                <img class="rounded-3" style="width: 5rem" src="{{ asset('assets/images/restaurant-menu 1.svg') }}" alt="">
                <div>
                    <p class="p-2" style="font-weight: 600">Multi Cuisine</p>
                    <p class="pt-2 px-2" style="font-size: 14px">In the new era of technology we look in the future with certainty for life.</p>
                </div>
            </div>    
            <div class="box d-flex gap-3">
                <img class="rounded-3" style="width: 5rem" src="{{ asset('assets/images/easy.svg') }}" alt="">
                <div>
                    <p class="p-2" style="font-weight: 600">Easy To Order</p>
                    <p class="p-2" style="font-size: 14px">In the new era of technology we look in the future with certainty for life.</p>
                </div>
            </div>
            <div class="box d-flex gap-3">
                <img style="width: 5rem" src="{{ asset('assets/images/timer 1.svg') }}" alt="">
                <div>
                    <p class="p-2" style="font-weight: 600">Fast Delivery</p>
                    <p class="p-2" style="font-size: 14px">In the new era of technology we look in the future with certainty for life.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="info py-5 bg-light">
    <div class="container d-flex" style="gap: 40px;">
        <div class="content" style="width: 55%;">
            <h2 class="heading-section text-start mt-1">A little information for our valuable guest</h2>
            <p style="font-size: 14px;">At place, we believe that dining is not just about food, but also about the overall experience. Our staff, renowned for their warmth and dedication, strives to make every visit an unforgettable event.</p>
            <div class="boxes d-flex gap-3 flex-wrap align-items-center">
                <div class="box py-3 text-center rounded-3" style="width: 45%;background-color: white">
                    <h3 class="heading-section m-1">3</h3>
                    <p>Locations</p>
                </div>
                <div class="box py-3 text-center rounded-3" style="width: 45%;background-color: white">
                    <h3 class="heading-section m-1">1995</h3>
                    <p>Founded</p>
                </div>
                <div class="box py-3 text-center rounded-3" style="width: 45%;background-color: white">
                    <h3 class="heading-section m-1">65+</h3>
                    <p>Staff Members</p>
                </div>
                <div class="box py-3 text-center rounded-3" style="width: 45%;background-color: white">
                    <h3 class="heading-section m-1">100%</h3>
                    <p>Satisfied Customers</p>
                </div>
            </div>
        </div>
        <div class="image overflow-hidden" style="width: 45%;">
            <img style="width: 90%;" class="rounded-3" src="{{ asset('assets/images/info-about.png') }}" alt="">
        </div>
    </div>
</section>
<section class="test py-5">
    <div class="container">
        <h2 class="heading-section">What Our Customers Say</h2>
        <div class="boxes py-4 d-flex gap-3">
            <div class="box bg-light rounded-3 p-4 py-5">
                <h3 class="color-red" style="font-size: 1.5rem;">“The best restaurant”</h3>
                <p class="py-2" style="font-size: 14px;">Last night, we dined at place and were simply blown away. From the moment we stepped in, we were enveloped in an inviting atmosphere and greeted with warm smiles.</p>
                <div class="d-flex gap-3 border-top pt-4 align-items-center">
                    <div class="image">
                        <img src="{{asset('assets/images/test1.svg')}}" alt="">
                    </div>
                    <div style="font-size: 14px">
                        <h4 style="font-size: 14px" class="fw-bold my-1">Sophire Robson</h4>
                        <p>Los Angeles, CA</p>
                    </div>
                </div>
            </div>
            <div class="box bg-light rounded-3 p-4 py-5">
                <h3 class="color-red" style="font-size: 1.5rem;">“Simply delicious”</h3>
                <p class="py-2" style="font-size: 14px;">Place exceeded my expectations on all fronts. The ambiance was cozy and relaxed, making it a perfect venue for our anniversary dinner. Each dish was prepared and beautifully presented.</p>
                <div class="d-flex gap-3 border-top pt-4 align-items-center">
                    <div class="image">
                        <img src="{{asset('assets/images/test2.svg')}}" alt="">
                    </div>
                    <div style="font-size: 14px">
                        <h4 style="font-size: 14px" class="fw-bold my-1">Matt Cannon</h4>
                        <p>San Diego, CA</p>
                    </div>
                </div>
            </div>
            <div class="box bg-light rounded-3 p-4 py-5">
                <h3 class="color-red" style="font-size: 1.5rem;">“One of a kind restaurant”</h3>
                <p class="py-2" style="font-size: 14px;">The culinary experience at place is first to none. The atmosphere is vibrant, the food - nothing short of extraordinary. The food was the highlight of our evening. Highly recommended.</p>
                <div class="d-flex gap-3 border-top pt-4 align-items-center">
                    <div class="image">
                        <img src="{{asset('assets/images/test3.svg')}}" alt="">
                    </div>
                    <div style="font-size: 14px">
                        <h4 style="font-size: 14px" class="fw-bold my-1">Andy Smith</h4>
                        <p>San Francisco, CA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection