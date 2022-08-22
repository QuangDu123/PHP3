@extends('Admin.layoutAdmin.homeAdmin')
@section('contectAdmin')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md">
            <div class="ibox">
                        <h2><center>THÊM TAGS CHO BÀI VIẾT</center></h2>
                <div class="ibox-body">
                    <form action="/admin/addTags" method="POST">
                        <div class="form-group">
                            <label>Nôi dung</label>
                            <input name="noiDung" class="form-control" type="text" placeholder="Nội dung tags">
                        </div>
                        <div class="form-group">
                            <label>Tin được gắn tags</label><br>
                            <select name="idTin" class="form-control">
                                @foreach ($tin as $item)
                                <option value="{{$item->id}}">{{$item->tieuDe}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ẩn/Hiện Tags</label><br>
                            <select name="anHien" class="form-control">
                                <option value="1">Hiện</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>
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