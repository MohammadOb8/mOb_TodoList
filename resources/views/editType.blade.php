@extends('layout.master')
@section('content')
  <body class=" position-absolute top-50 start-50 translate-middle mt-5">
    <form action="{{route('mob.updateType',['id'=>$type->id])}}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label fw-bold fs-5">Edit Type</label>
        <textarea type="text" name="type" class="form-control  p-3 mb-5 bg-light rounded" id="exampleFormControlTextarea1">{{$type->type}}</textarea>
      </div>
      <div>
        <button type="submit" class="btn btn-primary fw-bold px-5 mx-5 shadow p-3 mb-5 rounded">Edit Type</button>
        <a href="{{route('mob.indexType')}}" class="btn btn-outline-secondary fw-bold  px-5 mx-5 shadow p-3 mb-5 rounded">Cancel</a>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
@endsection
