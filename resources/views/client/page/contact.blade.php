@extends('client.layout.homeClient')
@section('contect')
    <!-- Breadcrumb -->
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
			</div>
			<form action="/search" method="GET">
				<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
					<input class="f1-s-1 cl6 plh9 s-full p-l-30" type="text" name="keyword" placeholder="Search">
					<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
						<i class="zmdi zmdi-search"></i>
					</button>
				</div>
			</form>
		</div>
	</div>

	<!-- Page heading -->
	<div class="container p-t-4 p-b-40">
		<h2 class="f1-l-1 cl2">
			Liên Hệ
		</h2>
	</div>
	

	<!-- Content -->
	<section class="bg0 p-b-60">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-8 p-b-80">
					<div class="p-r-10 p-r-0-sr991">
						@if(session('alert'))
							<section class='alert alert-success'>{{session('alert')}}</section>
						@endif
						<form action="/contact" method="POST">
							<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="name" placeholder="Họ và tên" required>

							<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="email" name="email" placeholder="Email" required>

							<textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="noiDung" pattern="^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{5})+$" placeholder="Nội dung liên hệ" required></textarea>

							<button type="submit" class="size-a-20 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-20">
								Gửi
							</button>
							@csrf
						</form>
					</div>
				</div>
				
				<!-- Sidebar -->
				<div class="col-md-5 col-lg-4 p-b-80">
					<div class="p-l-10 p-rl-0-sr991">
						<!-- Popular Posts -->
						<div>
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Bài biết phổ biến
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