@extends('front-end.app')
@section('content')

    <div class="col-lg-9 mb-2">
            @foreach ($tag as $t)
            @endforeach
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="fa fa-home pr-1"></i>Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tag</li>
                </ol>
            </nav>

            <div class="list-article">
               
                    @foreach ($t->articles as $v)
                    <div class="article">
                        <a href="">{{$v->title}}</a>
                    -   <small class="">Đăng bởi : <b>{{$v->user->name}}</b></small>
                        <p>{{$v->description}}</p>
                        <hr>
                    </div>
                    @endforeach
              
                <div class="row justify-content-md-center">
                </div>
            </div>
    </div>
  
@stop
@section('sidebar-right')
    @include('front-end.sidebar-right')
@stop