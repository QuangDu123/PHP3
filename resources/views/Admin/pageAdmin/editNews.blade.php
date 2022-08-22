@extends('Admin.layoutAdmin.homeAdmin')
@section('contectAdmin')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md">
            <div class="ibox">
                    <h2><center>SỬA BÀI VIẾT</center></h2>
                <div class="ibox-body">
                    <form action="#" method="POST" enctype="multipart/form-data"> 
                        <div class="form-group">
                            <label>Tiêu đề bài viết</label>
                            <input name="tieuDe" class="form-control" type="text" value="{{$t->tieuDe}}">
                        </div>
                        <div class="form-group">
                            <label>Nội dung ngắn</label>
                            <input name="tomTat" class="form-control" type="text" value="{{$t->tomTat}}">
                        </div>
                        <div class="form-group">
                            <label>Nội dung bài viết</label>
                            <textarea name="noiDung" id="editor" class="form-control" rows="3">{{$t->noiDung}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Hình ảnh</label>
                            <input name="urlHinh" class="form-control" type="file">
                            <img src="{{asset($t->urlHinh)}}" width="100px" height="100px" alt="Image">
                        </div>
                        <div class="form-group">
                            <label>Loại tin</label><br>
                            <select name="idLT" class="form-control">
                                @foreach ($lt as $lt)
                                <option value="{{$lt->id}}" @if ($lt->id == $t->idLT) selected  
                                @endif>{{$lt->ten}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ẩn/Hiện loại tin</label><br>
                            <select name="anHien" class="form-control">
                                @if ($t->anHien == 0)
                                    <option value="0" selected="selected">Ẩn</option>
                                    <option value="1">Hiện</option>
                                @else
                                    <option value="0">Ẩn</option>
                                    <option value="1" selected="selected">Hiện</option>
                                @endif
                            </select>
                        </div>
                        
                        {{-- <div class="form-group">
                            <label>Tin nổi bậc</label><br>
                            <select name="anHien" class="form-control">
                                <option value="0">Ẩn</option>
                            </select>
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