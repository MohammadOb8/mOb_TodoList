@extends('layout.master')
@section('content')
  <body class="container pt-5">
    <div class="mt-4">
        <h4 class="fw-bold">{{$typeName}}</h4>
    </div>
    <table class="table table-striped border">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Tasks</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody class="align-middle">
            <tr>
                @foreach ($tasks as $task)
                <td>
                    {{$loop->iteration}}
                </td>
                <td>
                    <h6>{{ $task->task }}</h6>
                </td>
                <td>
                    @if($task->completed)
                    <h6 class="text-success fw-bold">Completed</h6>
                    @else
                    <h6 class="text-danger fw-bold">Not Completed</h6>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>

      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
@endsection
