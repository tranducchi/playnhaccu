@extends('./admin.master')
@section('title', 'Cập nhật bài viết')
@section('category', 'Bài viết')
@section('content')
<div class="box box-primary">
    <!-- /.box-header -->
    <br />
    <!-- form start -->
    <form role="form" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Tiêu bài viết : </label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tên bài viết">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tiêu đề SEO : </label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tiêu đề chuyên mục SEO">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mô tả bài viết : </label>
          <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Nhập mô tả cho chuyên mục"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Ảnh bài viết :  </label>
            <input type="file">
          </div>
        <div class="form-group">
          <label for="">Nội dung bài viết : </label>
          <input type="text" id="my-editor">
        </div>
       
        <div class="row">
          <div class="col-lg-3">
              <div class="form-group">
                  <label>Chọn chuyên mục : </label>
                  <select class="form-control">
                    <option selected="selected" value="0">Mặc định</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
              </div>
          </div>
          <div class="col-lg-6">
              <div class="form-group">
                  <label for="">Tags : </label>
                  <div class="form-inline">
                      <input type="text" class="form-control" placeholder="Tag bài viết" style="width:70%">
                      <button class="btn btn-primary"><i class="fa fa-tag"></i>Thêm</button>
                  </div>
                 
                </div>
          </div>
          <div class="col-lg-3">
              <div class="form-group">
                  <label for=""><i class="fa fa-eye" aria-hidden="true"></i>Trạng thái hiển thị : </label>
                    <select class="form-control">
                      <option selected="selected" value="0">Hiển thị</option>
                      <option>Ẩn</option>
                    </select>
                </div>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-repeat"></i> Cập nhật</button>
      </div>
    </form>
  </div>
  {{-- Add CkEditor --}}
  <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  <script>
    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
  </script>
  <script>
    CKEDITOR.replace('my-editor', options);
  </script>
  {{-- End CkEditor --}}
@stop