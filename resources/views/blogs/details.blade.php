@extends("layout.app")
@section("title")
Blog Details Page
@endsection
@section("basic-section")
<section class="header details bg-light text-center py-5">
    <div class="container">
        <h1 class="heading-section m-auto my-3" style="width: 50rem; font-size: 60px">{{ $article->title }}</h1>
        <img class="rounded-3" src="{{ $article->image }}" alt="photo">
        <div class="info py-5 text-start">
            <h3 class="fw-bold">What do you need to prepare a home-made burger?</h3>
            <p class="pb-5">{{ $article->description }}</p>
            <h3 class="fw-bold">What are the right ingredients to make it delicious?</h3>
            <p class="pb-5">Proin faucibus nec mauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas nisi in consequat. Fusce sodales augue a accumsa Cras sollicitudin, le ligula, porttitor eu, consequat vitae, eleifend ac, enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit lobortis arcu enim urna adipiscing praesent velit viverra sit semper lorem eu cursus ve of all hendrerit elementum morbi curabitur etiam nibh justo, lorem aliquet donec sed sit mi dignissim at ante massa mattis magna sit amet purus gravida quis blandit turpis..</p>
        </div>
    </div>
</section>
<section class="read-more py-5">
    <h1 class="heading-section my-3" style="font-size: 60px">Read More Articles</h1>
    <p class="p-section lh-lg m-auto text-center" style="width: 40rem;">We consider all the drivers of change gives you the components you need to change to create a truly happens.</p>
    <div class="cards d-flex gap-3 py-5 flex-wrap justify-content-center">
        @foreach ($blogs as $blog)
        <div class="box border rounded-3" style="width: 16rem;">
            <div class="image rounded-3 overflow-hidden" style="width: 16rem;">
                <img class="rounded-3" style="width: 16rem;" src="{{ $blog->image }}" alt="">
            </div>
            <div class="content p-3 text-start">
                <div class="d-flex justify-content-between">
                    <p class="text-secondry" style="font-size: 14px">{{ $blog->change_date }}</p>
                    <a href="{{ url('/blogs/details', $blog->id) }}" class="btn color-red">Details</a>
                </div>
                <h4 class="py-1" style="font-size: 18px;">{{ $blog->title }}</h4>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
