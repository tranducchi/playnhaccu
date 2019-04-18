@extends('front-end.app')
@section('content')
    <div class="col-lg-9 mb-2">
        <div class="container pl-2">
        
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home pr-1"></i>Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chuyên mục</li>
                    <li class="breadcrumb-item active" aria-current="page">Tiêu đề bài viết</li>
                </ol>
            </nav>
            <div class="article">
                <h1 class="text-center">Sau đây là bài Mình cũng nhau dừng chân </h1> 
                <span class="float-right pr-2">
                    <small>
                        <i class="fa fa-user pr-1"></i>Tác giả : <b>Admin</b>
                    </small>
                    /
                    <small>
                        <i class="fa fa-clock-o pr-1"></i>Ngày đăng : <b>06/03/2018</b>
                    </small>
                </span>
            </div>
            <div class="tag">
                <i class="fa fa-tags"></i>Tags : 
                <a href="">Cảm âm hay </a>,
                <a href="">Hay cảm âm </a>
            </div>
            <div class="related mt-3 ">
                <p>Bài viết liên quan :</p>
                <div class="row d-flex justify-content-between">
                    <div class="col-sm-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Mình cùng nhau đóng băng</a></h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-info btn-sm">Xem thêm <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Mình cùng nhau đóng băng</a></h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-info btn-sm">Xem thêm <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Mình cùng nhau đóng băng</a></h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-info btn-sm">Xem thêm <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment mt-3">
                <p><i class="fa fa-pencil pr-1"></i>Bình luận bài viết : </i></p>
                <textarea name="" class="form-control" placeholder="Nhận xét bài viết ..." id="" cols="30" rows="4"></textarea>
                <div class="d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-warning btn-sm mt-2"><i class="fa fa-paper-plane pr-1"></i>Bình luận</button>
                </div>
               
                <br/>
                <div class="list-comment">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-user pr-1"></i>Chí Trần
                            </div>
                            <div class="card-body">
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            
                        </div>
                        <div class="card ml-5">
                            <div class="card-header">
                                    <i class="fa fa-user pr-1"></i>Hưng Nguyễn
                                </div>
                                <div class="card-body">
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                
                            </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('sidebar-right')
    @include('front-end.sidebar-right')
@stop