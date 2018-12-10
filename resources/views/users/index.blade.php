@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users List</div>
                <a class="btn btn-info text-white btn-sm" href="{{route('users.create')}}">Create New User</a>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th><b>Name</b></th>
                                <th><b>Email</b></th>
                                <th><b>Action</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><a class="btn btn-info text-white btn-sm" href="{{route('users.edit', ['id'=>$user->id])}}">Edit</a>
                                        <form onsubmit="return confirm('Delete this user permanently?')" class="d-inline" action="{{route('users.destroy', ['id'=>$user->id])}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
