@extends('layout.master')

@section('content')
    <table class="table table-striped border">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Task</th>
            <th scope="col">Type</th>
          </tr>
        </thead>
        <tbody class="align-middle ">
            @foreach ($tasks as $task)

            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>
                    <div>
                    @if ($task->completed)
                        <del><h6 class="mb-0 text-sm">{{$task->task}}</h6></del>
                    @else
                        <h6 class="mb-0 text-sm">{{$task->task}}</h6>
                    @endif
                </div>
            </td>
            <td>
                <div>
                    @foreach ($task->types as $type)


                    <a class="text-decoration-none text-dark " href="{{route('mob.typeTasks',['id'=>$type->id])}}">
                        <span class="mb-0 text-sm fw-bold">{{$type->type}}</span>
                    </a>
                </div>
                @endforeach
            </td>
            <td class="text-center">
                @if (!$task->completed)
                    <a href="{{route('mob.completed',['id'=>$task->id])}}" class="btn btn-success fw-bold mx-4 "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                        <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0"/>
                        <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708"/>
                      </svg> Mark as Done</a>
                <td>
                    <a href="{{route('mob.editTask',['id'=>$task->id])}}" class="btn border-0 text-info fw-bold mx-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                      </svg> Edit</a>
                </td>
                @else
                    <a href="{{route('mob.undo',['id'=>$task->id])}}" class="btn btn-outline-warning fw-bold mx-4 px-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"/>
                        <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"/>
                      </svg> Undo</a>
                    <td>
                        <a href="{{route('mob.editTask',['id'=>$task->id])}}" class="btn border-0 disabled text-secondary fw-bold mx-4 "  tabindex="-1" role="button" aria-disabled="true" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                          </svg> Edit</a>
                    </td>
                @endif
            </td>
            <td class="text-center">
                <a href="{{route('mob.delete',['id'=>$task->id])}}" class="text-danger fw-bold mx-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                </svg></a>
            </td>
        </tr>
        @endforeach
        </tbody>
      </table>
    <a href="{{route('mob.newTask')}}" class="btn btn-primary btn-lg position-fixed bottom-0 end-0 m-5 px-3 rounded-circle">
        <i class="fas fa-plus"></i>
    </a>
    <a href="{{route('mob.newType')}}" class="btn btn-info btn-lg position-fixed bottom-0 start-0 m-5 px-3 rounded-circle">
        <i class="fas fa-plus"></i>
    </a>
@endsection

