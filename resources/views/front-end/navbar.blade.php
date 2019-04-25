<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand position-relative" href="/"><i class="fa fa-play-circle" aria-hidden="true"></i>nhaccu.com</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="menu">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">    
                        <li class="nav-item active">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"  href="#"><i class="fa fa-folder-open" aria-hidden="true"></i>Nhạc cụ</a>
                                <div class="dropdown-menu">
                                    @foreach ($cat as $c)
                                        @if($c->parent_id == 0)
                                        <a class="dropdown-item" href="/category/{{$c->slug}}">{{$c->name}}</a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </li>
                        <li class="nav-item active">
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"  href="#"><i class="fa fa-microphone" aria-hidden="true"></i>Beat Nhạc</a>
                                    <div class="dropdown-menu">
                                        @foreach ($cat as $c)
                                            @if($c->parent_id == 0)
                                            <a class="dropdown-item" href="/beat/{{$c->slug}}">{{$c->name}}</a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                               
                            </li>
                          
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i>Bài giảng hướng dẫn</a>
                        </li>
                        @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-pencil" aria-hidden="true"></i>Đăng bài viết</a>
                        </li>
                        @endif
                        <div class="search  d-none d-lg-block">
                            <form class="form-inline my-2 my-lg-0" method="post" action="">
                                <input class="form-control mr-sm-2" name="key" id="key" type="search" placeholder="Tìm gì cũng có :v">
                                <button type="submit"><i class="fa fa-search"></i></button>
                                @csrf
                            
                                        
                            </form>
                        </div>
                        <!-- End Search -->
                        
                    
                    </ul>
                    
                </div>
            <!-- End Menu -->
            </div>
        </div>
        <!-- End container -->
    </nav>
   
    <!-- End nav -->
</header>
<div id="countryList" class="d-none d-lg-block">
</div>
<div id="hienthi" class="d-block d-lg-none">
    <input type="text" class="form-control" name="key-mobile" id="key-mobile" placeholder="Tìm gì cũng có :v">
    @csrf
    <i class="fa fa-search"></i>
    <div id="show-search">

    </div>
</div>
<script>
    $(document).ready(function(){
    
        $('#key').keydown(function(){ // ua bi gi dau ak?
            var query = $(this).val();
            if(query != '')
            {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                url:"{{ route('autocomplete.fetch') }}",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                $('#countryList').fadeIn();  
                        $('#countryList').html(data);
                        console.log(query);
                }
                });
            }
        });
    
        $(document).on('click', '#key li', function(){  
            $('#key').val($(this).text());  
            $('#countryList').fadeOut();  
        });
        // mobile
        $('#key-mobile').keyup(function(){ 
            var query = $(this).val();
            if(query != '')
            {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                url:"{{ route('autocomplete.fetch') }}",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                $('#show-search').fadeIn();  
                        $('#show-search').html(data);
                }
                });
            }
        });
        $('body').click(function(){
            $('#countryList').fadeIn("fast", function(){        
                $("#countryList").fadeOut(500);
            });
        });
        $(document).on('click', '#key-mobile li', function(){  
            $('#key-mobile').val($(this).text());  
            $('#show-search').fadeOut();  
        });
    });
</script>