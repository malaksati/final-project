@extends("layout.app")
@section("title")
Blogs Page
@endsection
@section("basic-section")
<section class="header text-center p-5">
    <div class="container">
    <h1 class="heading-section my-3" style="font-size: 60px">Our Blog & Articles</h1>
    <p class="p-section lh-lg m-auto" style="width: 30rem;">We consider all the drivers of change gives you the components you need to change to create a truly happens.</p>
    <div class="cards d-flex gap-3 py-5 flex-wrap justify-content-center">
        @foreach ($blogs as $blog)
        <div class="box border rounded-3" style="width: 16rem;">
            <div class="image rounded-3 overflow-hidden" style="width: 16rem;">
                <img class="rounded-3" style="width: 16rem;" src="{{ $blog->image }}" alt="">
            </div>
            <div class="content p-3 text-start">
                <div class="d-flex justify-content-between">
                    <p class="py-2 text-secondry" style="font-size: 14px">{{ $blog->change_date }}</p>
                    <a href="{{ url('/blogs/details', $blog->id) }}" class="btn color-red px-0">Details</a>
                </div>
                <h4 class="m-0 py-1" style="font-size: 18px;">{{ $blog->title }}</h4>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</section>
@endsection