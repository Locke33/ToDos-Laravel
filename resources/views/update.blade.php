@extends('layout')

@section('content')
        <div class="row">

                <div class="col-lg-12">

                        <form action="{{ route('todo.save', ['id' => $todo->id]  ) }}" method="post">

                                {{--{{ csrf_field()             Asi dijo el vato--}}
                                
                                @csrf
                        <input name="todo" type="text" class="font-control input-lg" value="{{ $todo->todo }} " placeholder="Create a new todo">
                </form>
                </div>
        </div>
<hr> 
       

@stop
