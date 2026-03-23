@extends('layout.master')
@section('content')
  <body class=" position-absolute top-50 start-50 translate-middle mt-5">
    <form action="{{route('mob.updateTask',['id'=>$task->id])}}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label fw-bold fs-5">Edit Task</label>
        <textarea type="text" name="task" class="form-control  p-3 mb-5 bg-light rounded" id="exampleFormControlTextarea1">{{$task->task}}</textarea>
      </div>
      <div>
        <button type="submit" class="btn btn-primary fw-bold px-5 mx-5 shadow p-3 mb-5 rounded">Edit Task</button>
        <a href="{{route('mob.index')}}" class="btn btn-outline-secondary fw-bold  px-5 mx-5 shadow p-3 mb-5 rounded">Cancel</a>
    </div>
    </form>
  </body>
@endsection
