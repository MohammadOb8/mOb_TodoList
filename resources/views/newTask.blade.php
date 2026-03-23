@extends('layout.master')
@section('content')

<main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Task</h5>

              <!-- Horizontal Form -->
              <form action="{{ route('mob.addTask',['id'=>$type->id]) }}" method="post">
                @csrf
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-form-label">New Task</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="task" name="task" required>
                  </div>
                </div>
                @foreach($types as $type)
                <div class="row mb-3">
                    <div class="pl-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type_id" value="{{ $type->id }}">
                            <label class="form-check-label">
                                {{ $type->type }}
                            </label>
                        </div>
                    </div>
                </div>
            @endforeach
                <div class="text-center">
                    <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

      </div>
    </section>

  </main><!-- End #main -->


@endsection
