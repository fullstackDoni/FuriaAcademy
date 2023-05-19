@extends('layouts.adm')
@section('da','eq')
@section('content')
    <form action="{{route('admin.users.search')}}" method="GET">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
        </div>
        <input type="text" name="search" class="form-control" placeholder="Іздеу"><br>
        <button class="btn btn-success" type="submit">Search</button>
    </form>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
        </tr>
        </thead>
        <tbody>
        @for($i=0;$i<count($users);$i++)
        <tr>
            <th scope="row">{{$i+1}}</th>
            <td>{{$users[$i]->name}}</td>
            <td>{{$users[$i]->email}}</td>
            <td>{{$users[$i]->role->name}}</td>
        </tr>
        @endfor
        </tbody>
    </table>
@endsection
