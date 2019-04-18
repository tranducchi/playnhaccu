<div class="col-sm-12" >
        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
        <thead>
          <tr role="row">
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">STT</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên chuyên mục</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Mô tả</th>
            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-sort="ascending">Sửa</th>
            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-sort="ascending">Xóa</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($cat as $c)
          <tr role="row" class="odd">
            <td class="">{{$c->id}}</td>
            <td class="">{{$c->name}}</td>
            <td class="">{{$c->description}}</td>
              <td class="sorting_1"><a href="/admin/category/{{$c->slug}}/edit" class="btn btn-warning  btn-sm"><i class="fa fa-pencil"></i></a></td>
              <td class="sorting_1"><a href="/admin/category/{{$c->slug}}" class="btn btn-danger  btn-sm"><i class="fa fa-trash-o"></i>
            </a></td>
          </tr>
        @endforeach
      </tbody>
     
      </table>
    </div>