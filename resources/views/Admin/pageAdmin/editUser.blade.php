@extends('Admin.layoutAdmin.homeAdmin')
@section('contectAdmin')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md">
            <div class="ibox">
                        <h2><center>CHỈNH SỬA USER</center></h2>
                <div class="ibox-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên User</label>
                            <input class="form-control" type="text" name="name" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Hình ảnh</label>
                            <input class="form-control" type="file" name="urlHinh">
                            <img src="{{asset($user->urlHinh)}}" width="100px" height="100px" alt="Image">
                        </div>
                        <div class="form-group">
                            <label>Vai trò</label><br>
                            <select name="vaitro" class="form-control">
                                @if ($user->vai_tro == 0)
                                    <option value="0" selected="selected">Bạn đọc</option>
                                    <option value="1">Admin</option>
                                @else
                                    <option value="0">Bạn đọc</option>
                                    <option value="1" selected="selected">Admin</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info" >Submit</button>
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