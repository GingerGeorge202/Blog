@extends('layouts.layout',['title'=>"Редагувати пост №$post->post_id"])
@section('content')
    <form action="{{route('post.update',$post->post_id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <h3>Редагувати пост</h3>
        @include('posts.parts.form')
        <input type="submit" value="Редагувати пост" class="btn-outline-success btn">
    </form>
@endsection
