@extends('layout.master')
@section('content')
  <body class="container pt-5">
    <table class="table table-striped border">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Type</th>
          </tr>
        </thead>
        <tbody class="align-middle">
            @foreach ($types as $type)
            <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>
                <div>
                    <a class="text-decoration-none text-dark " href="{{route('mob.typeTasks',['id'=>$type->id])}}">
                        <h6 class="mb-0 text-sm">{{$type->type}}</h6>
                    </a>
                </div>
            </td>

            <td>
                <a href="{{route('mob.editType',['id'=>$type->id])}}" class="btn fw-bold text-info"  tabindex="-1" role="button" aria-disabled="true" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                    </svg> Edit
                </a>
            </td>
            <td>
                <a href="{{route('mob.deleteType',['id'=>$type->id])}}" class="btn btn-outline-danger fw-bold "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                    </svg>
                </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    <a href="{{route('mob.newType')}}" class="btn btn-primary btn-lg position-fixed bottom-0 end-0 m-5 px-3 rounded-circle">
        <i class="fas fa-plus"></i>
    </a>

@endsection
