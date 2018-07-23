<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="csrf_token()">
    <title>Cộng đồng sáo trúc Việt Nam</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="header">
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/">Cộng đồng sáo</a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <div class="menu">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><i class="fa fa-microphone" aria-hidden="true"></i>Cảm âm hay</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#"><i class="fa fa-folder-open" aria-hidden="true"></i>Beat sáo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-question" aria-hidden="true"></i>Hỏi đáp sáo trúc</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-plus" aria-hidden="true"></i>Đăng bài viết</a>
                            </li>
                        </ul>
                    </div>
                <!-- End Menu -->
                    <div class="search">
                        <form class="form-inline my-2 my-lg-0" method="post" action="">
                            <input class="form-control mr-sm-2" type="search" placeholder="Tìm cảm âm" aria-label="Search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- End Search -->
                    
                
                </div>
            </div>
            <!-- End container -->
        </nav>
      
        <!-- End nav -->
    </div>
    <!-- End Header -->

    <!-- Main content -->
    <div id="main-content" class="container-fluid mt-5 pt-5">
            <div class="row">
            <!-- Sidebar left -->
                <div class="col-lg-3 col-md-12 col-12">
                    <div class="container">
                        <div class="card mb-4">
                            <div class="card-header">
                               <h3><i class="fa fa-star text-danger pr-2" aria-hidden="true" style=""></i>Top cảm âm hay trong tuần</h3> 
                            </div>
                            <div class="card-body">
                               <div class="top-article">
                                   <a href="">Có em trong đời - Châu Khải Phong</a>
                                        <i class="fa fa-eye text-danger ">120 lượt xem</i>
                                        <i class="fa fa-user">.<a href="" class="text-secondary">Chi Tran</a></i>
                               </div>
                               <div class="top-article">
                                   <a href="">Châu Việt Cường - Đời dân chơi</a>
                                   <i class="fa fa-eye text-danger ">1 lượt xem</i>
                                   <i class="fa fa-user">.<a href="" class="text-secondary">Mr.Adam</a></i>
                               </div>
                               <div class="top-article">
                                   <a href="">See you again - Messi</a>
                                   <i class="fa fa-eye text-danger ">1 lượt xem</i>
                                   <i class="fa fa-user">.<a href="" class="text-secondary">Marco</a></i>
                               </div>
                               
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3>
                                    <i class="fa fa-star text-warning pr-2" aria-hidden="true" style=""></i>Cảm âm hot được xem nhiều
                                </h3>
                               
                            </div>
                            <div class="card-body">
                               <div class="top-article">
                                   <a href="">Có em trong đời co duoc hay khong la do ban - Châu Khải Phong</a>
                                   <i class="fa fa-eye text-danger ">120 lượt xem</i>
                                   <i class="fa fa-user"><a href="" class="text-secondary">Chi Tran</a></i>
                               </div>
                               <div class="top-article">
                                   <a href="">Châu Việt Cường - Đời dân chơi</a>
                                   <i class="fa fa-eye text-danger ">10 lượt xem</i>
                                   <i class="fa fa-user"><a href="" class="text-secondary">Hoang Anh</a></i>
                               </div>
                               <div class="top-article">
                                   <a href="">Châu Việt Cường - Đời dân chơi</a>
                                   <i class="fa fa-eye text-danger ">10 lượt xem</i>
                                   <i class="fa fa-user"><a href="" class="text-secondary">Mao Meo</a></i>
                               </div>
                            </div>
                        </div>
                        <!-- End card -->
                    </div>
                </div>

                <!-- End sidebar left -->
                
                <!-- Content -->
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
                     <!-- Paginate -->
                    <div class="paginate">
                        <div class="col-lg-6 offset-lg-3 ">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- End Paginate -->
                    </div>
                </div>
                <!-- End Content -->

                <!-- Sidebar right -->
                <div class="col-lg-3 col-md-12 col-12">
                    <div class="login text-center mb-3">
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-4">UserName</label>
                                        <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Nhập tài khoản">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Password</label>
                                        <div class="col-sm-8">
                                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <a href="" class="btn btn-primary btn-sm">Đăng nhập</a>
                                        <a href="" class="btn btn-success btn-sm">Đăng kí</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Fanpages -->
                    <div class="fanpage mb-4">
                        <div class="card">
                       
                                <div class="card-header bg-info text-white border border-info">
                                    <i class="fa fa-thumbs-up"></i>Like Fanpage 
                                </div>
                       
                                <div class="card-body">
                                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcamamsaohay%2F&tabs=timeline&width=265px&height=400px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=173828703486140" width="265px" height="400px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                </div>
                        </div>
                      
                        <!-- End Cart -->
                    </div>
             
                   <!-- End Fanpage -->
                
                   <!-- Categories -->
                   <div class="categories">
                        <ul class="list-group">
                            <li class="list-group-item active bg-info border border-info"><i class="fa fa-bars pr-2" aria-hidden="true"></i>Chuyên mục</li>
                            <li class="list-group-item">
                                <h4><a href="" class="nav-link"><i class="fa fa-chevron-right pr-2"></i>Cảm âm nhạc trẻ</a></h4>
                            </li>
                            <li class="list-group-item">
                            <h4><a href="" class="nav-link"><i class="fa fa-chevron-right pr-2"></i>Beat A4</a></h4>
                            </li>
                            <li class="list-group-item">
                            <h4><a href="" class="nav-link"><i class="fa fa-chevron-right pr-2"></i>Beat C5</a></h4>
                            </li>
                            <li class="list-group-item">
                            <h4><a href="" class="nav-link"><i class="fa fa-chevron-right pr-2"></i>Beat sáo bầu</a></h4> 
                            </li>
                        </ul>   
                   </div>
                    <!-- End categories -->
                </div>
            </div>
            <!-- End row -->
    </div>
    <!-- End Main Content -->
    <!-- Footer  -->
    <div class="container-fluid bg-secondary mt-5 text-center text-white footer">
        <p>Copyright &copy; : <a href="">Cộng đồng sáo Việt</a></p>
    </div>
    <!-- End footer -->







    <!-- Link script -->
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>