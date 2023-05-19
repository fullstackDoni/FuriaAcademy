@extends('layouts.adm')
@section('da','eq')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Аты</th>
            <th scope="col">Сипаттама</th>
            <th scope="col">Өшіру</th>
        </tr>
        </thead>
        <tbody>
        @for($i=0;$i<count($video);$i++)
            <tr>
                <th scope="row">{{$i+1}}</th>
                <td>{{$video[$i]->name}}</td>
                <td>{{$video[$i]->description}}</td>
            </tr>
        @endfor
        </tbody>
    </table>
@endsection
