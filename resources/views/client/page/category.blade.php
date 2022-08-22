@extends('client.layout.homeClient')
@section('contect')
    <!-- Page heading -->
	<div class="container p-t-4 p-b-40"></div>

	<!-- Post -->
	<section class="bg0 p-b-55">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-80">
					<div class="row">
						@foreach ($tin as $data)
						<div class="col-sm-6 p-r-25 p-r-15-sr991">
							<!-- Item latest -->	
								<div class="m-b-45">
									<a href="/detail/{{$data->id}}" class="wrap-pic-w hov1 trans-03">
										<img src="{{$data->urlHinh}}" alt="IMG">
									</a>

									<div class="p-t-16">
										<h5 class="p-b-5">
											<a href="/detail/{{$data->id}}" class="f1-m-3 cl2 hov-cl10 trans-03">
												{{$data->tieuDe}} 
											</a>
										</h5>

										<span class="cl8">
											<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
												{{$data->name}}
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												{{ $data->ngayDang}}
											</span>
										</span>
									</div>
								</div>								
							</div>
						@endforeach
					</div>

					<!-- Pagination -->
					<div class="flex-wr-s-c m-rl--7 p-t-15">
						{{-- <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active">1</a>
						<a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">2</a> --}}
					</div>
				</div>

				<div class="col-md-10 col-lg-4 p-b-80">
					<div class="p-l-10 p-rl-0-sr991">							
						<!-- Most Popular -->
						<div class="p-b-23">
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

						<!--  -->
						<div class="flex-c-s p-b-50">
							<a href="#">
								<img class="max-w-full" src="images/banner-02.jpg" alt="IMG">
							</a>
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