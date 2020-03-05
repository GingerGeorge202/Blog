@extends('layouts.layout',['title'=>'Створити новий пост'])
@section('content')
    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Створити пост</h3>
        @include('posts.parts.form')
        <input type="submit" value="Створити пост" class="btn-outline-success btn">
    </form>
@endsection
