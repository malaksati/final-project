@extends("layout.app")
@section("title")
Contact Us
@endsection
@section("basic-section")
<section class="contact-page py-5 bg-light">
    <div class="container">
        <h1 class="heading-section my-3" style="font-size: 60px">Contact Us</h1>
        <p class="p-section lh-lg m-auto text-center" style="width: 30rem;">We consider all the drivers of change gives you the components you need to change to create a truly happens.</p>
        <form method="POST" action="{{ url('/contact/message') }}" enctype="multipart/form-data" class="mx-auto my-5 w-50" style="background-color: #fff">
            @csrf
            <div class="container rounded-3 p-5">
                <div class="d-flex gap-3 my-3">
                    <div class="w-50">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control rounded-pill" name="name" placeholder="Enter your name">
                    </div>
                    <div class="w-50">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control rounded-pill" name="email" placeholder="Enter your email">
                    </div>
                </div>
                <div class="my-3">
                        <label class="form-label">Subject</label>
                        <input type="text" class="form-control rounded-pill" name="subject" placeholder="Write a subject">
                </div>
                <div class="my-3">
                    <label class="form-label">Message</label>
                    <textarea name="message" class="form-control rounded-3" style="height: 150px;" placeholder="Write your message" ></textarea>
                </div>
                <div class="d-grid my-3">
                    <input type="submit" class="btn btn-danger rounded-pill" value="Send">
                </div>
            </div>
        </form>
    </div>
</section>
<section class="contact-info p-5">
    <div class="container d-flex w-50 m-auto" style="gap: 20px;">
        <div style="width: calc(100%/3);">
            <p class="fw-bold">Call Us:</p>
            <p class="color-red fw-bold">+1-234-567-8900</p>
        </div>
        <div style="width: calc(100%/3);">
            <p class="fw-bold">Hours:</p>
            <p style="font-size: 14px">Mon-Fri: 11am - 8pm<br/>Sat, Sun: 9am - 10pm</p>
        </div>
        <div style="width: calc(100%/3);">
            <p class="fw-bold">Our Location:</p>
            <p style="font-size: 14px">123 Bridge Street Nowhere Land, LA 12345 United States</p>
        </div>
    </div>
</section>
@endsection