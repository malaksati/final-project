@extends("layout.app")
@section("title")
Dashboard
@endsection
@section('basic-section')
<section class="dash-btns">
    <div class="container">
        <h1 class="heading-section my-3">Admin Dashboard</h1>
        <div class="d-felx flex-column py-5 w-50">
            <div class="d-flex py-3 justify-content-between border-bottom">
                <h3 class="colo-red">Create Item</h3>
                <a href="{{ url('/items/create') }}" class="btn btn-outline-danger rounded-pill border-2 fw-medium">Create Item</a>
            </div>
            <div class="d-flex py-3 justify-content-between border-bottom">
                <h3 class="colo-red">Delete an Item</h3>
                <a href="{{ url('/menu') }}" class="btn btn-outline-danger rounded-pill border-2 fw-medium">Menu</a>
            </div>
            <div class="d-flex py-3 justify-content-between border-bottom">
                <h3 class="colo-red">Edit an Item</h3>
                <a href="{{ url('/menu') }}" class="btn btn-outline-danger rounded-pill border-2 fw-medium">Menu</a>
            </div>
            <div class="d-flex py-3 justify-content-between border-bottom">
                <h3 class="colo-red">Create Blog</h3>
                <a href="{{ url('/blogs/create') }}" class="btn btn-outline-danger rounded-pill border-2 fw-medium">Create Blog</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table caption-top">
                <caption>List of Booking</caption>
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
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
                        <td>
                            <a class="btn btn-success" href="{{ url('/booking/status', [$status='Accepted',$book->id]) }}">Accept</a>
                            <a class="btn btn-danger" href="{{ url('/booking/status', [$status='Rejected',$book->id]) }}">Reject</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <canvas class="py-5" id="myChart"></canvas>
    </div>
</section>
<script>
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['All Users', 'Admin users', 'Non-Admin Users'],
        datasets: [{
          label: 'Users Information',
          data: [{{ $all_users }}, {{ $admin_users }}, {{ $non_admin_users }}],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
@endsection