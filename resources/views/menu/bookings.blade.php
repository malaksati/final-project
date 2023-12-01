@extends('layout.app')
@section('title')
    My Bookings
@endsection
@section('basic-section')
<section>
    <div class="container">
        <h1 class="heading-section my-3">My Bookings</h1>
<div class="table-responsive">
    <table class="table caption-top">
        <caption>List of My Booking</caption>
        <thead class="table-light">
          <tr>
            <th scope="col">Booking</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Total Person</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($books as $book)
            <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->date}}</td>
                <td>{{$book->time}}</td>
                <td>{{$book->name}}</td>
                <td>{{$book->phone}}</td>
                <td>{{$book->total}}</td>
                <td>{{$book->status}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
</div>
</section>
@endsection