@extends("layout.app")
@section("title")
Book A Table
@endsection
@section("basic-section")
<section class="book-page py-5 bg-light">
    <div class="container">
        <h1 class="heading-section my-3" style="font-size: 60px">Book A Table</h1>
        <p class="p-section lh-lg m-auto text-center" style="width: 30rem;">We consider all the drivers of change gives you the components you need to change to create a truly happens.</p>
        <form method="POST" action="{{ url('/book/table') }}" enctype="multipart/form-data" class="mx-auto my-5 w-50" style="background-color: #fff">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="container rounded-3 p-5">
                <div class="d-flex gap-3 my-3">
                    <div class="w-50">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control rounded-pill" name="date">
                    </div>
                    <div class="w-50">
                        <label class="form-label">Time</label>
                        <input type="time" class="form-control rounded-pill" name="time">
                    </div>
                </div>
                <div class="d-flex gap-3 my-3">
                    <div class="w-50">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control rounded-pill" name="name" placeholder="Enter your name">
                    </div>
                    <div class="w-50">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control rounded-pill" name="phone" placeholder="x-xxx-xxx-xxxx">
                    </div>
                </div>
                <div class="my-3">
                    <label class="form-label">Total Person</label>
                    <select class="form-select rounded-pill" name="total">
                        <option value="1">1 Person</option>
                        <option value="2">2 Persons</option>
                        <option value="3">3 Persons</option>
                        <option value="4">4 Persons</option>
                        <option value="5">5 Persons</option>
                        <option value="6">6 Persons</option>
                    </select>
                </div>
                <div class="d-grid my-3">
                    <input type="submit" class="btn btn-danger rounded-pill" value="Book A Table">
                </div>
            </div>
        </form>
    </div>
</section>
@endsection