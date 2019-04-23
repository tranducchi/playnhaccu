
<div class="col-lg-3 col-md-12 col-12">
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
               <h3><i class="fa fa-star text-danger pr-2" aria-hidden="true" style=""></i>Bài viết mới nhất</h3> 
            </div>
            <div class="card-body">
                @foreach ($new_post as $p)
                <div class="top-article">
                <a href="/post/{{$p->category->slug}}/{{$p->slug}}">{{$p->name}}</a>
                            <i class="fa fa-eye text-danger ">{{$p->views}} lượt xem</i>
                <i class="fa fa-user"><a href="#" class="text-secondary">{{$p->user->name}}</a></i>
                </div>
               @endforeach
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>
                    <i class="fa fa-star text-warning pr-2" aria-hidden="true" style=""></i>Bài viết được xem nhiều
                </h3>
               
            </div>
            <div class="card-body">
                @foreach ($new_hot as $n)
                    <div class="top-article">
                        <a href="">{{$n->name}}</a>
                        <i class="fa fa-eye text-danger ">{{$n->views}} lượt xem</i>
                        <i class="fa fa-user"><a href="" class="text-secondary">{{$n->user->name}}</a></i>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- End card -->
    </div>
</div>
