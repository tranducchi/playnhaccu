
@extends('front-end.app')
@section('content')
    <div class="col-lg-9 mb-2">
        <div class="container">
            @foreach ($article as $a)
                
     
                @section('title', $a->title)
                @section('description', $a->description)
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="fa fa-home pr-1"></i>Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$a->category->name}}</li>
                    <li class="breadcrumb-item active" aria-current="page">{{$a->name}}</li>
                </ol>
            </nav>
            <div class="article">
                <h1 class="text-center">{{$a->title}}</h1> 
                <span class="d-flex justify-content-between pt-2 pb-2">
                    <div class="info-1">
                        <small>
                            <i class="fa fa-eye pr-1"></i>Lượt xem : <b>{{$a->views}}</b>
                        </small>
                    </div>
                    <div class="info-2 d-none d-sm-block">
                            <small>
                            <i class="fa fa-user pr-1"></i>Tác giả : <b>{{$a->user->name}}</b>
                            </small>
                            /
                            <small>
                                <i class="fa fa-clock-o pr-1"></i>Ngày đăng : <b>{{$a->created_at->toDateString()}}</b>
                            </small>
                    </div>
                 
                </span>
                {!!$a->body!!}
            </div>
            <div class="tag">
                <i class="fa fa-tags"></i>Tags : 
                @foreach ($a->tags as $t)
                   
                <a href="/tag/{{$t->slug}}" class="badge badge-secondary">{{$t->name}}</a>
                @endforeach
            </div>
            <div class="related mt-3 ">
                <p>Bài viết liên quan :</p>
                <div class="row d-flex justify-content-between">
                    @foreach ($related as $r)
                        <div class="col-sm-12 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="/images/{{$a->image}}" alt="">
                                    <h5 class="card-title"><a href="/post/{{$r->category->slug}}/{{$r->slug}}">{{$r->title}}</a></h5>
                                    <div class="icon d-flex justify-content-between">
                                        <div class="view">
                                            <i class="fa fa-eye"></i>
                                            {{$r->views}}
                                        </div>
                                        <div class="category">
                                            <i class="fa fa-folder"></i>
                                            {{$a->category->name}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="comment mt-3">
                @if(Auth::check())
                    @if ($errors->any())
                        <div class="alert alert-danger">
                        
                                @foreach ($errors->all() as $error)
                                {{ $error }}
                                @endforeach
                        
                        </div>
                
                    
                    @endif
                    <p><i class="fa fa-pencil pr-1"></i>Bình luận bài viết : </i></p>
                    <form action="/comment" method="post">
                        @csrf
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="article_id" value="{{$a->id}}">
                        <textarea name="content" class="form-control" placeholder="Nhận xét bài viết ..." id="" cols="30" rows="4"></textarea>
                        <div class="d-flex flex-row-reverse">
                                <button type="submit" class="btn btn-warning btn-sm mt-2"><i class="fa fa-paper-plane pr-1"></i>Bình luận</button>
                        </div>
                    </form>
                    @else
                        {!!"<div class='alert alert-warning text-center'>Đăng nhập để bình luận bài viết</div>"!!}
                    @endif
                <br/>
                @if($a->comments->count() > 0)
                    
                        <div class="list-comment">
                                @foreach ($a->comments as $c)
                                    <div class="card mb-2">
                                        <div class="card-header">
                                            <i class="fa fa-user pr-1"></i>{{$c->user->name}}
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">{{$c->content}}</p>
                                        </div>  
                                    </div>
                                @endforeach
                        </div>
                   
                @endif
            </div>
            @endforeach
        </div>
    </div>
@stop
@section('sidebar-right')
    @include('front-end.sidebar-right')
@stop