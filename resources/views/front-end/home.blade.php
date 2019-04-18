@extends('front-end.app')
@section('sidebar-left')
    @include('front-end.sidebar-left')
@stop
@section('content')
<div class="col-lg-6 col-md-12 col-12">
    <div class="card">
        <div class="card-header bg-info border border-info text-white">
        <i class="fa fa-music" style="font-size:19px; padding-right:10px" aria-hidden="true"></i>
            Danh sách bài viết
        </div>
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
            <div class="article pb-3 pt-3 border-bottom">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="">
                            <img src="https://toidicodedao.files.wordpress.com/2018/07/web-development.jpg?w=672&h=372&crop=1" class="img-fluid" alt="">
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
       <!-- Paginate -->
       <div class="row justify-content-md-center mt-3">
               
               <div class="paginate">
                   <nav aria-label="Page navigation example">
                       <ul class="pagination">
                           <li class="page-item">
                           <a class="page-link" href="#" aria-label="Previous">
                               <span aria-hidden="true">&laquo;</span>
                               <span class="sr-only">Previous</span>
                           </a>
                           </li>
                           <li class="page-item"><a class="page-link" href="#">1</a></li>
                           <li class="page-item"><a class="page-link" href="#">2</a></li>
                           <li class="page-item"><a class="page-link" href="#">3</a></li>
                           <li class="page-item">
                           <a class="page-link" href="#" aria-label="Next">
                               <span aria-hidden="true">&raquo;</span>
                               <span class="sr-only">Next</span>
                           </a>
                           </li>
                       </ul>
                   </nav>
               </div>
           </div>
</div>
@stop
@section('sidebar-right')
    @include('front-end.sidebar-right')
@stop
