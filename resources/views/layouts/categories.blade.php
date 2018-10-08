@extends('layouts.app')
@section('content')
    <div class="col-lg-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categories Name</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-body">
                    <div class="article pb-3 pt-3 border-bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                    <a href="">
                                        <img src="https://www.technotification.com/wp-content/uploads/2018/04/most-in-demand-programming-languages-2018.jpg" class="img-fluid" alt="">
                                    </a>  
                                </div>
                                <div class="col-lg-8">
                                    <h4><a href="http://">Cảm âm làng tôi xanh - Ngô Thừa Ân</a></h4>
                                    <p class="pt-2 pb-2 mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita doloribus delectus enim molestiae, atque deserunt unde, reperferendis deserunt?</p>
                                    <div class="icon">
                                        <div class="row">
                                        
                                            <div class="col-lg-3 col-4">
                                                <a href=""><i class="fa fa-user"></i>Chí Trần</a>
                                            </div>
                                            <div class="col-lg-3 col-0">
                                                <a href=""><i class="fa fa-folder"></i>Nhạc trẻ</a>
                                            </div>
                                            <div class="col-lg-3 col-4">
                                                <a href=""><i class="fa fa-comment"></i>Comment</a>
                                            </div>
                                            <div class="col-lg-3 col-4">
                                                <i class="fa fa-eye">1000</i>
                                            </div>
                                        </div>
                                        <!-- End row -->
                                    </div>
                                    <!-- End icon -->
                                    <a href="" class="btn btn-info btn-sm">Xem thêm<i class="fa fa-chevron-circle-right pl-2"></i></a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
    </div>
   
@stop