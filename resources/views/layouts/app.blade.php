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
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
</head>
<body>
    {{-- Navbar --}}
    @include('layouts.navbar')
    <!-- End NavBar -->

    <!-- Main content -->
    <div id="main-content" class="container-fluid mt-5 pt-5">
            <div class="row">
                <!-- Sidebar left -->
                @yield('sidebar-left')
                <!-- End sidebar left -->
                <!-- Content -->
                @yield('content')
                <!-- End Content -->
                <!-- Sidebar right -->
                @yield('sidebar-right')
            </div>
            <!-- End row -->
    </div>
    <!-- End Main Content -->
    <!-- Footer  -->
    @include('layouts.footer')
    <!-- End footer -->
    <!-- Modal -->
        <!-- Login -->
        <!-- Modal -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user pr-1"></i>Đăng nhập</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Tài khoản</label>
                        <input type="text" class="form-control" placeholder="Nhập tên tài khoản">
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input type="password" class="form-control" placeholder="Điền mật khẩu">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times pr-1"></i>Đóng</button>
                    <button type="button" class="btn btn-info"><i class="fa fa-sign-in pr-1"></i>Đăng nhập</button>
                </div>
                </div>
            </div>
        </div>
        <!-- End login -->
        <!-- Register -->
        <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-pencil pr-1"></i>Đăng kí</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Họ tên </label>
                            <input type="text" class="form-control" placeholder="Nhập đầy đủ họ tên">
                        </div>
                        <div class="form-group">
                            <label for="">Tài khoản</label>
                            <input type="text" class="form-control" placeholder="Nhập tên tài khoản">
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" class="form-control" placeholder="Điền mật khẩu ...">
                        </div>
                        <div class="form-group">
                            <label for="">Xác nhận mật khẩu</label>
                            <input type="password" class="form-control" placeholder="Nhập lại mật khẩu">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times pr-1"></i>Đóng</button>
                        <button type="button" class="btn btn-warning"><i class="fa fa-pencil pr-1"></i>Đăng kí</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- Link script -->
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>