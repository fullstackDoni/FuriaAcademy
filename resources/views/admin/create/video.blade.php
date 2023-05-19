@extends('layouts.adm')
@section('a','eq')
@section('content')
    <form action="{{route('admin.video.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Тілдің аты</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Сипаттама</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="description">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Сурет</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="image">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Видеосы</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="video">
        </div>
        <div class="mb-3">
            <button class="btn-outline-success">Қосу</button>
        </div>
    </form>
@endsection
