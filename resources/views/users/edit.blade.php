@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User</div>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="card-body">
                   <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.update', ['id'=>$user->id])}}" method="POST">
                        @csrf
                        <input type="hidden" value="PUT" name="_method">
                        <label for="name">Name</label>
                        <input value="{{$user->name}}" class="form-control" placeholder="Full Name" type="text" name="name" id="name"/>
                        <br>
                        <label for="username">Email</label>
                        <input value="{{$user->email}}" class="form-control" placeholder="Email" type="text" name="email" id="email"/>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Save"/>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
