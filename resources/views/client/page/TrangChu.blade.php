@extends('client.layout.homeClient')
@section('contect')
<!-- Headline -->
    <div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
				<span class="text-uppercase cl2 p-r-8">
					Trending Now:
				</span>

				<span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
					@foreach ($popular as $item)
						<span class="dis-inline-block slide100-txt-item animated visible-false">
							{{$item->tieuDe}}
						</span>
					@endforeach
				</span>
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
		
	<!-- Feature post -->
	<section class="bg0">
		<div class="container">
			<div class="row m-rl--1">
				@foreach ($a1 as $a1)
				<div class="col-md-6 p-rl-1 p-b-2">
					<div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url({{$a1->urlHinh}});">
						<a href="/detail/{{$a1->id}}" class="dis-block how1-child1 trans-03"></a>
						<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
							<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
								{{$a1->name}}
							</a>

							<h3 class="how1-child2 m-t-14 m-b-10">
								<a href="/detail/{{$a1->id}}" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
									{{$item->tieuDe}}
								</a>
							</h3>

							<span class="how1-child2">
								<span class="f1-s-4 cl11">
									{{$a1->ten}}
								</span>

								<span class="f1-s-3 cl11 m-rl-3">
									-
								</span>

								<span class="f1-s-3 cl11">
									{{$item->ngayDang}}
								</span>
							</span>
						</div>
					</div>
				</div>				
				@endforeach

				<div class="col-md-6 p-rl-1">
					<div class="row m-rl--1">
						@foreach ($a2 as $a2)
							<div class="col-12 p-rl-1 p-b-2"> 						
								<div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url({{$a2->urlHinh}});">
									<a href="/detail/{{$a2->id}}" class="dis-block how1-child1 trans-03"></a>

									<div class="flex-col-e-s s-full p-rl-25 p-tb-24">
										<a href="/detail/{{$a2->id}}" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
											{{$a2->name}}
										</a>

										<h3 class="how1-child2 m-t-14">
											<a href="/detail/{{$a2->id}}" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
												{{$a2->tieuDe}}
											</a>
										</h3>
									</div>
								</div>
							</div>					
						@endforeach

						@foreach ($a3 as $a3)
						<div class="col-sm-6 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url({{$a3->urlHinh}});">
								<a href="/detail/{{$a3->id}}" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
									<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										{{$a3->name}}
									</a>

									<h3 class="how1-child2 m-t-14">
										<a href="/detail/{{$a3->id}}" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
											{{$a3->tieuDe}}
										</a>
									</h3>
								</div>
							</div>
						</div>
						@endforeach

						@foreach ($a4 as $a4)
							<div class="col-sm-6 p-rl-1 p-b-2">
								<div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url({{$a4->urlHinh}});">
									<a href="/detail/{{$a4->id}}" class="dis-block how1-child1 trans-03"></a>

									<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
										<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
											{{$a4->name}}
										</a>

										<h3 class="how1-child2 m-t-14">
											<a href="/detail/{{$a4->id}}" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
												{{$a4->tieuDe}}
											</a>
										</h3>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Latest -->
	<section class="bg0 p-t-60 p-b-35">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-20">
					<div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
						<h3 class="f1-m-2 cl3 tab01-title">
							Tin
						</h3>
					</div>

					<div class="row p-t-35">

						@foreach ($tin as $tinHome)
						<div class="col-sm-6 p-r-25 p-r-15-sr991">
							<!-- Item latest -->	
							<div class="m-b-45">
								<a href="/detail/{{$tinHome->id}}" class="wrap-pic-w hov1 trans-03">
									<img src="<?=asset($tinHome->urlHinh)?>" alt="IMG">
								</a>

								<div class="p-t-16">
									<h5 class="p-b-5">
										<a href="/detail/{{$tinHome->id}}" class="f1-m-3 cl2 hov-cl10 trans-03">
											{{$tinHome->tieuDe}} 
										</a>
									</h5>

									<span class="cl8">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											{{$tinHome->name}}
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											{{ $tinHome->ngayDang}}
										</span>
									</span>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>

				<div class="col-md-10 col-lg-4">
					<div class="p-l-10 p-rl-0-sr991 p-b-20">
						<!-- Video -->
						<div>
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Thể loại tin 
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
						<div class="p-b-55">
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