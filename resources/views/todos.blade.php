@extends('layout')

@section('content')
        <div class="row">

                <div class="col-lg-6 col-lg-offset-3">

                        <form action="/create/todo" method="post">

                                {{--{{ csrf_field()             Asi dijo el vato--}}
                                
                                @csrf
                        <input name="todo" type="text" class="font-control input-lg" placeholder="Create a new todo">
                </form>
                </div>
        </div>
<hr> 
        @foreach($todos as $todo)
{{ $todo -> todo}} 
<a href="{{ route('todo.delete',['id' => $todo->id ]) }}" class="btn btn-danger"> X </a>
<a href="{{ route('todo.update',['id' => $todo->id ]) }}" class="btn btn-info btn-xs"> Update </a>


        @if (!$todo->completed)
                <a href="{{ route('todo.completed' , [ 'id' =>$todo->id ]) }}" class="btn btn-xs btn-success">Mark as completed</a>
        @else
        
        <span class="text-succes">Completed</span>
        @endif

                <hr>
        @endforeach


@stop
                