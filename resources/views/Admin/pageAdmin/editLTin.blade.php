@extends('Admin.layoutAdmin.homeAdmin')
@section('contectAdmin')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md">
            <div class="ibox">
                        <h2><center>CHỈNH SỬA LOẠI TIN</center></h2>
                <div class="ibox-body">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label>Tên loại tin</label>
                            <input name="tenLTin" class="form-control" type="text" value="{{$data->ten}}">
                        </div>
                        <div class="form-group">
                            <label>Ẩn/Hiện loại tin</label>
                            <select name="anHien" class="form-control">
                                @if ($data->anHien == 0)
                                    <option value="0" selected="selected">Ẩn</option>
                                    <option value="1">Hiện</option>
                                @else
                                    <option value="0">Ẩn</option>
                                    <option value="1" selected="selected">Hiện</option>
                                @endif
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