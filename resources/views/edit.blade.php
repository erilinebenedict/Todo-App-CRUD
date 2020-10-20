@extends('layouts.app')
@section('content')

<div class="jumbotron " style="margin-top: 100px;">
        <h3 style="text-align: center">edit your details</h3>

                <form method="post" action="{{ route('todo.update', $todo->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$todo->name}}" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your todo name with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="Description" value="{{$todo->description}}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
    </div>


@endsection