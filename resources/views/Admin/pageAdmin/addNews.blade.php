@extends('Admin.layoutAdmin.homeAdmin')
@section('contectAdmin')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md">
            <div class="ibox">
                        <h2><center>THÊM BÀI VIẾT</center></h2>
                <div class="ibox-body">
                    <form action="/admin/addNews" method="POST" enctype="multipart/form-data"> 
                        <div class="form-group">
                            <label>Tiêu đề bài viết</label>
                            <input name="tieuDe" class="form-control" type="text" placeholder="Tiêu đề bài viết">
                        </div>
                        <div class="form-group">
                            <label>Nội dung ngắn</label>
                            <input name="tomTat" class="form-control" type="text" placeholder="Nội dung ngắn">
                        </div>
                        <div class="form-group">
                            <label>Nội dung bài viết</label>
                            <textarea name="noiDung" id="editor" class="form-control" rows="10" cols="80" placeholder="Nội dung bài viết"></textarea>
                            {{-- <script> 
                                CKEDITOR.replace('editor');
                            </script> --}}
                        </div>
                        <div class="form-group">
                            <label class="form-label">Hình ảnh</label>
                            <input name="urlHinh" class="form-control" type="file">
                        </div>
                        <div class="form-group">
                            <label>Loại tin</label><br>
                            <select name="idLT" class="form-control">
                                @foreach ($lt as $lt)
                                <option value="{{$lt->id}}">{{$lt->ten}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ẩn/Hiện loại tin</label><br>
                            <select name="anHien" class="form-control">
                                <option value="1" selected="selected">Hiện</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>
                        {{-- <div class="form-group">
                            <label class="form-label">Tags</label>
                            <input name="tags" class="form-control" type="text" placeholder="Thêm tags(các tags cách nhau bằng dấu(,)">
                        </div> --}}
                        <div class="form-group">
                            <button class="btn btn-info" type="submit">Submit</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
</div>
@if(session('alert'))
    <section class='alert alert-success'>{{session('alert')}}</section>
@endif
@endsection
