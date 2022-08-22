@extends('client.layout.homeClient')
@section('contect')
<!-- Breadcrumb -->

<!-- Content -->
<section class="bg0 p-b-140 p-t-10">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-30">
                <div class="p-r-10 p-r-0-sr991">
                    <!-- Blog Detail -->

                    <div class="p-b-70">
                        <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
                            {{$ctTin->tieuDe}}
                        </h3>

                        <div class="flex-wr-s-s p-b-40">
                            <span class="f1-s-3 cl8 m-r-15">
                                <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                    {{$ctTin->name}}
                                </a>

                                <span class="m-rl-3">-</span>

                                <span>
                                    {{ $ctTin->ngayDang }}
                                </span>
                                <span class="m-rl-3">-</span>
                                <span class="f1-s-3 cl8 m-r-15">
                                    {{$ctTin->xem}} Views
                                </span>
                            </span>

                            <a href="#" class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
                                {{-- {{$countBL[0]}} Comment --}}
                            </a>
                        </div>

                        <div class="wrap-pic-max-w p-b-30">
                            <img src="/{{$ctTin->urlHinh}}" alt="IMG">
                        </div>

                        <p class="f1-s-11 cl6 p-b-25">
                            {!!$ctTin->noiDung!!}
                        </p>

                        <!-- Tag -->
                        <div class="flex-s-s p-t-12 p-b-15">
                            <span class="f1-s-12 cl5 m-r-8">
                                Tags:
                            </span>

                            <div class="flex-wr-s-s size-w-0">
                                @foreach ($tagsNews as $item)
                                    <a href="/newsofTags/{{$item->id}}" class="f1-s-12 cl8 hov-link1 m-r-15">
                                        {{$item->noiDung}}
                                    </a>
								@endforeach
                            </div>
                        </div>

                        <!-- Share -->
                        <div class="flex-s-s">
                            <span class="f1-s-12 cl5 p-t-1 m-r-15">
                                Share:
                            </span>

                            <div class="flex-wr-s-s size-w-0">
                                <a href="#"
                                    class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-facebook-f m-r-7"></i>
                                    Facebook
                                </a>

                                <a href="#"
                                    class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-twitter m-r-7"></i>
                                    Twitter
                                </a>

                                <a href="#"
                                    class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-google-plus-g m-r-7"></i>
                                    Google+
                                </a>

                                <a href="#"
                                    class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-pinterest-p m-r-7"></i>
                                    Pinterest
                                </a>
                            </div>
                        </div>
                    
                        {{-- list BL --}}
                        <div class="comment-block">
                            <h3 class="f1-l-4 cl3 p-b-12">
                                <span>Bình luận bài viết</span>   
                            </h3>
                            <div class="comment-wrapper">
                                @foreach ($listBL as $item)
                                <div class="comment-item">
                                    <div class="comment-item-top">
                                        <div class="comment-item-avata">
                                            <img src="xjasxjami.jpg " alt="">
                                        </div>
                                        <div class="comment-item-names">
                                            <img style="width: 30px;" src="<?=asset($item->hinh)?>" />
                                            <span>{{$item->hoTen}}</span> - <span>{{$item->ngayDang}}</span>
                                        </div>
                                    </div>
                                    <div  class="comment-item-content">
                                        <big style="margin-left: 50px">{{$item->noiDung}}</big>
                                    </div>
                                    <div style="margin-left: 30px" class="comment-item-tl">
                                        <span>Thích</span>
                                        <span>Trả lời</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @if (Auth::check())
                        <!-- Leave a comment -->
                        <div>
                            <h4 class="f1-l-4 cl3 p-b-12">
                                Để lại một bình luận
                            </h4>

                            <form action="/postbl/{{$ctTin->id}}" method="post">
                                <textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20"
                                    name="noiDung" placeholder="Viết bình luận..."></textarea>
                                {{-- <input class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-5 p-tb-14" type="text"
                                    name="hoten"> --}}
                                        <button type="submit" name="btn"
                                            class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10">
                                            Gửi bình luận
                                        </button> 
                                @csrf
                            </form>
                        </div>
                    @else
                        <a style="padding-top: 6px" href="/login" type="button" class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10">
                            Đăng nhập để bình luận bài viết
                        </a>
                        
                    @endif
                </div>
            </div>

            <!-- Sidebar -->
                <div class="col-md-10 col-lg-4 p-b-30">
                    <div class="p-l-10 p-rl-0-sr991 p-t-70">
                        <!-- Category -->
                            <div class="p-b-60">
                                <div class="how2 how2-cl4 flex-s-c">
                                    <h3 class="f1-m-2 cl3 tab01-title">
                                        Thể Loại
                                    </h3>
                                </div>
                                <ul class="p-t-35">
                                    <?php 
                                        $stt = 1;	
                                    ?>
                                    @foreach ($ltin as $a)
                                    <li class="flex-wr-sb-s p-b-22">
                                        <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                            {{$stt++}}
                                        </div>

                                        <a href="/newsofCT/{{$a->id}}" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                            {{$a->ten}}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            

                        <!-- Popular Posts -->
                            <div class="p-b-30">
                                <div class="how2 how2-cl4 flex-s-c">
                                    <h3 class="f1-m-2 cl3 tab01-title">
                                        Bài viết phổ biến
                                    </h3>
                                </div>
                                <ul class="p-t-35">
                                    @foreach ($popular as $item)
                                        <li class="flex-wr-sb-s p-b-30">
                                            <a href="/detail/{{$item->id}}" class="size-w-10 wrap-pic-w hov1 trans-03">
                                                <img src="/{{$item->urlHinh}}" alt="IMG">
                                            </a>

                                            <div class="size-w-11">
                                                <h6 class="p-b-4">
                                                    <a href="/detail/{{$item->id}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$item->tieuDe}}
                                                    </a>
                                                </h6>

                                                <span class="cl8 txt-center p-b-24">
                                                    <a href="/newsofCT/{{$item->idLT}}" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        {{$item->ten}}
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        {{$item->ngayDang}}
                                                    </span>
                                                </span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        <!-- Tag -->
                            <div>
                                <div class="how2 how2-cl4 flex-s-c m-b-30">
                                    <h3 class="f1-m-2 cl3 tab01-title">
                                        Tags
                                    </h3>
                                </div>

                                <div class="flex-wr-s-s m-rl--5">
                                    @foreach ($tags as $item)
                                        <a href="/newsofTags/{{$item->id}}" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                            {{$item->noiDung}}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        
                    </div>
                </div>
        </div>
    </div>
</section>
@endsection