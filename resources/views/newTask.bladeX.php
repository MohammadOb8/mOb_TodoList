@extends('layout.master')
@section('content')
  <body class="position-absolute top-50 start-50 translate-middle mt-5">
    <form action="{{ route('mob.addTask') }}" method="post">
      @csrf
      <div class="form-group">
          <label for="task">Task</label>
          <input type="text" class="form-control" id="task" name="task" required>
      </div>
      <div class="form-group">
          <label for="types">Types</label><br>
          @foreach($types as $type)
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="type_id[]" value="{{ $type->id }}">
                  <label class="form-check-label">{{ $type->type }}</label>
              </div>
          @endforeach
      </div>
      <button type="submit" class="btn btn-primary">Add Task</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
@endsection
