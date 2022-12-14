<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin-layout.layout')
@section('title','film-create new')
@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 style="text-align: center;">TẠO PHIM MỚI</h4>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @if ($message = Session::get('loi'))
                    <div class="alert alert-info alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    <form role="form" action="{{url('admin/film/createPost')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tên Phim</label>
                                <input type="text" class="form-control" id="film_title" name="film_title"
                                    placeholder="Nhập tên phim" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Poster Phim</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="film_poster" name="film_poster" required>
                                        <label class="custom-file-label" for="image">Chọn ảnh poster</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Thể loại:</label>
                                <div class="custom-control custom-checkbox">
                                @foreach ($cat as $item)
                                <input type="checkbox" name="film_cat[]" value="{{$item->cat_name}}" >{{$item->cat_name}}<br>
                                @endforeach
                                </div> 
                                
                            </div>
                            <div class="form-group">
                                <label>Hình thức :</label> <br> 
                                <div class="custom-control custom-radio"> 
                                <input name="film_form" type="radio" value="0" />Phim truyền hình <br>
                                <input name="film_form"  type="radio" value="1" />Phim chiếu rạp 
                                </div>                         
                            </div>
                            
                            <div class="form-group">
                                <label>Đạo diễn Phim</label>
                                <input type="text" class="form-control" id="film_director" name="film_director"
                                    placeholder="Nhập tên đạo diễn">
                            </div>
                            <div class="form-group">
                                <label>Nam diễn viên chính</label>
                                <input type="text" class="form-control" id="film_actor" name="film_actor"
                                    placeholder="Nhập tên Nam diễn viên chính">
                            </div>
                            <div class="form-group">
                                <label>Nữ diễn viên chính</label>
                                <input type="text" class="form-control" id="film_actress" name="film_actress"
                                    placeholder="Nhập tên Nữ diễn viên chính">
                            </div>
                            <div class="form-group">
                                <label >Số tập</label>
                                <input type="text" class="form-control" id="film_episode" name="film_episode" placeholder="1" min="1" required>
                            </div>
                            <div class="form-group">
                                <label >Thời Lượng</label>
                                <input type="text" class="form-control" id="film_runtime" name="film_runtime" placeholder="45 phút" required>
                            </div>
                            <div class="form-group">
                                <label>Năm phát hành</label>
                                <input type="number" class="form-control" id="film_release_year" name="film_release_year"
                                    placeholder="Nhập Năm phát hành" required>
                            </div>
                            <div class="form-group">
                                <label>Quốc gia</label>                        
                                    <select class="form-control select" id="film_nation" name="film_nation" required>
                                      <option selected="selected">Âu-Mỹ</option>
                                      @foreach ($nation as $item)
                                      <option>{{$item->nation_name}}</option>
                                      @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Tóm tắt</label>
                                <textarea class="form-control" rows="6" name="film_synopsis"
                                    placeholder="Nhập nội dung tóm tắt phim" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>ID Trailer:</label>
                                <input type="text" class="form-control" id="film_trailer" name="film_trailer"
                                    placeholder="Nhúng ID trailer phim" required>
                                <p>VD:  link youtube:   https://www.youtube.com/watch?v=<b style="color:red">gmRKv7n2If8</b><br>-->ID trailer:<b style="color:red">gmRKv7n2If8</b></p>
                            </div>
                            
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-danger">Tạo phim</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection
@section('script-section')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
@endsection