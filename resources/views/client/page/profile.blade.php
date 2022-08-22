@extends('client.layout.homeClient')
@section('contect')
    <div class="container">
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="ibox">
                            <div class="ibox-body text-center">
                                <div class="m-t-20">
                                    <img style="border-radius: 50%" width="100%" height="100%" class="img-circle" src="/{{$user->urlHinh}}" />
                                </div>
                                <div class="m-b-20 text-muted">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-9 col-md-8">
                        <div class="col-md-7 col-lg-8 p-b-80">
                            <div style="margin-top: 20px" class="p-r-10 p-r-0-sr991">
                                @if(session('alert'))
                                    <section class='alert alert-success'>{{session('alert')}}</section>
                                @endif
                                <form action="/profile/{{$user->id}}" method="POST" enctype="multipart/form-data">
                                    <input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="name" value="{{$user->name}}">
        
                                    <input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="email" name="email" value="{{$user->email}}">
                                    
                                    <input style="padding-top: 10px" class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="file" name="urlHinh">
        
                                    <button type="submit" class="size-a-20 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-20">
                                        Send
                                    </button>
                                    @csrf
                                </form>
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
        </div>
@endsection