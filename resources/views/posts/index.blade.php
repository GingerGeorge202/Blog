@extends('layouts.layout',['title'=>'Головна сторінка'])
    @section('content')
    <div class="row text-center mx-auto">
        <div class="col mx-auto">
            @if(isset($_GET['search']))
                @if(count($posts)>0)
                    @if(count($posts)==1)
                        <h2>Результатів по запиту <?=$_GET['search']?></h2>
                        <p class="lead">Усього знайдено {{count($posts)}} пост</p>
                    @elseif(count($posts)>1 && count($posts)<5)
                        <h2>Результатів по запиту '<?=$_GET['search']?>'</h2>
                        <p class="lead">Усього знайдено {{count($posts)}} поста</p>
                    @else
                        <h2>Результатів по запиту <?=$_GET['search']?></h2>
                        <p class="lead">Усього знайдено {{count($posts)}} постів</p>
                    @endif
                @else
                    <h2>По запиту <?=$_GET['search']?> не знайдено постів</h2>
                    <a href="{{route('post.index')}}" class="btn btn-outline-primary">Показати усі пости</a>
                @endif
            @endif
        </div>
    </div>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-6">
            <div class="card">
                <div class="card-header"><h2>{{$post->short_title}}</h2></div>
                <div class="card-body">
                    <div class="card-img" style="background-image: url({{$post->img ?? asset('img/3.jpg')}})" ></div>
                    <div class="card-author">Автор: {{$post->name}}</div>
                    <a href="{{route('post.show',$post->post_id)}}" class="btn btn-outline-primary">Проглянути пост</a>
                </div>
            </div>
        </div>
            @endforeach
    </div>
    @if(!isset($_GET['search']))
    {{$posts->links()}}
        @endif
@endsection
