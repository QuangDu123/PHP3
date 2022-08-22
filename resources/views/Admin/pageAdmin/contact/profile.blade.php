@extends('Admin.layoutAdmin.homeAdmin')
@section('contectAdmin')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-lg-3 col-md-4">
            <div class="ibox">
                <div class="ibox-body text-center">
                    <div class="m-t-20">
                        <img width="100%" height="100%" class="img-circle" src="/{{$user->urlHinh}}" />
                    </div>
                    <h5 class="font-strong m-b-10 m-t-10">{{$user->name}}</h5>
                    <div class="m-b-20 text-muted">@if ($user->vai_tro) Admin  @endif</div>
                    <div class="profile-social m-b-20">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-pinterest"></i></a>
                        <a href=""><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-9 col-md-8">
            <div class="ibox">
                <div class="ibox-body">
                    @if(session('alert'))
                        <section class='alert alert-success'>{{session('alert')}}</section>
                    @endif
                    <ul class="nav nav-tabs tabs-line">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab"><i class="ti-settings"></i> Profile</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                            <form action="/profileA/{{$user->id}}" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Họ và Tên</label>
                                    <input class="form-control" type="text" name="name"  value="{{$user->name}}">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email" value="{{$user->email}}">
                                </div>
                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <input class="form-control" type="file" name="urlHinh">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                @csrf
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .profile-social a {
            font-size: 16px;
            margin: 0 10px;
            color: #999;
        }

        .profile-social a:hover {
            color: #485b6f;
        }

        .profile-stat-count {
            font-size: 22px
        }
    </style>
</div>
@endsection