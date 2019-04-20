<div class="col-lg-3 col-md-12 col-12">
    <div class="login text-center mb-3">
        <a class="btn btn-info text-white" href="#"><i class="fa fa-user pr-1"></i>Đăng nhập</a>
        hoặc
        <a class="btn btn-warning text-black" href="#"><i class="fa fa-pencil pr-1"></i>Đăng kí</a>
    </div>
    <!-- Fanpages -->
    <div class="fanpage mb-4 d-lg-none d-xl-block">
        <div class="card">
       
                <div class="card-header bg-info text-white border border-info">
                    <i class="fa fa-thumbs-up"></i>Like Fanpage 
                </div>
       
                <div class="card-body p-0 pt-2">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcamamsaohay%2F&tabs&width=300&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=173828703486140" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
        </div>
      
        <!-- End Cart -->
    </div>

   <!-- End Fanpage -->

   <!-- Categories -->
   <div class="categories">
        <ul class="list-group">
            <li class="list-group-item active bg-info border border-info">
                <i class="fa fa-tags pr-2 text-white"></i>Tags</li>
            
            @foreach ($tag as $t)
                <li class="list-group-item">
                    <h4><a href="/tag/{{$t->slug}}" class="nav-link"><i class="fa fa-chevron-right pr-2"></i>{{$t->name}}</a></h4> 
                </li> 
            @endforeach
            
          
        </ul>   
   </div>
    <!-- End categories -->
</div>