@extends('client.layout.homeClient')
@section('contect')
<!-- Breadcrumb -->
<div class="container">
    <div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
        <div class="f2-s-1 p-r-30 m-tb-6">
            
        </div>

        <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
            <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
            <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
                <i class="zmdi zmdi-search"></i>
            </button>
        </div>
    </div>
</div>

<!-- Page heading -->
<div class="container p-t-4 p-b-35">
    <h2 class="f1-l-1 cl2">
        About Us
    </h2>
</div>

<!-- Content -->
<section class="bg0 p-b-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-8 p-b-30">
                <div class="p-r-10 p-r-0-sr991">
                    <p class="f1-s-11 cl6 p-b-25">
                        Curabitur volutpat bibendum molestie. Vestibulum ornare gravida semper. Aliquam a dui suscipit, fringilla metus id, maximus leo. Vivamus sapien arcu, mollis eu pharetra vitae, condimentum in orci. Integer eu sodales dolor. Maecenas elementum arcu eu convallis rhoncus. Donec tortor sapien, euismod a faucibus eget, porttitor quis libero. 
                    </p>

                    <p class="f1-s-11 cl6 p-b-25">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat.
                    </p>

                    <p class="f1-s-11 cl6 p-b-25">
                        Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate
                    </p>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="col-md-5 col-lg-4 p-b-30">
                <div class="p-l-10 p-rl-0-sr991 p-t-5">
                    <!-- Popular Posts -->
                    <div>
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Bài viết phổ biến
                            </h3>
                        </div>

                        <ul class="p-t-35">
                            @foreach ($popular as $item)
                                <li class="flex-wr-sb-s p-b-30">
                                    <a href="/detail/{{$item->id}}" class="size-w-10 wrap-pic-w hov1 trans-03">
                                        <img src="{{$item->urlHinh}}" alt="IMG">
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
                                                {{ $item->ngayDang}}
                                            </span>
                                        </span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection