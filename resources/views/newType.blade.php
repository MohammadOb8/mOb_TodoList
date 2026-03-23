@extends('layout.master')
@section('content')


<main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Type</h5>

              <!-- Horizontal Form -->
              <form action="{{ route('mob.addType') }}" method="post">
                @csrf
                <div class="row mb-3">
                  <label  class="col-form-label">New Type</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="type" name="type" required>
                  </div>
                </div>
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




