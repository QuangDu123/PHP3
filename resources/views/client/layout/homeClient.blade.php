<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tin Tức New</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->

</head>

<body class="animsition">
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/62f613d837898912e962943c/1ga8jr2bm';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								Cần Thơ, Việt Nam
							</span>

							<img class="m-b-1 m-rl-8" src="/images/icons/icon-night.png" alt="IMG">
						</span>
					</div>
					
					<div class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>
						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>
						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</div>
				</div>
			</div>

			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->		
				<div class="logo-mobile">
					<a href="/"><img src="/images/icons/logo-01.png" alt="IMG-LOGO"></a>
				</div>

				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>

			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">
					<li class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								Cần Thơ, Việt Nam
							</span>

							<img class="m-b-1 m-rl-8" src="/mages/icons/icon-night.png" alt="IMG">
						</span>
					</li>

					<li class="left-topbar">
						<a href="/singup" class="left-topbar-item">Sing up</a>
						<a href="/login" class="left-topbar-item">Log in</a>
					</li>

					<li class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>
						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>
						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</li>
				</ul>

				<ul class="main-menu-m">
					<a class="mega-menu-active" href="/">Home</a>					
					<li class="mega-menu-active">
						<a href="/category">Tin tức</a>
						<ul class="sub-menu-m">
							<?php
							$ltin =	Illuminate\Support\Facades\DB::table('loaitin')->where('anHien', '=', 1)->get();
							?>
							@foreach ($ltin as $a)
							<li><a href="/newsofCT/{{$a->id}}">{{$a->ten}}</a></li>
							@endforeach
						</ul>
						<span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>
					<li><a class="main-menu-active" href="/about">Giới thiệu</a></li>
					<li><a class="main-menu-active" href="/contact">Liên hệ</a></li>
				</ul>
			</div>
			
			<!--  -->
			<div class="wrap-logo container">
				<!-- Logo desktop -->		
				<div class="logo">
					<a href="/"><img src="/images/icons/logo-01.png" alt="LOGO"></a>
				</div>	

				<!-- Banner -->
				<div class="banner-header">
					<a href="#"><img src="/images/banner-01.jpg" alt="IMG"></a>
				</div>
			</div>	
			
			<!--  -->
			<div class="wrap-main-nav">
				<div class="main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">
						<a class="logo-stick" href="/">
							<img src="/images/icons/logo-01.png" alt="LOGO">
						</a>
						<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
							<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
								<ul class="main-menu">
									<a class="main-menu-active" href="/">Home</a>
							
									<li class="mega-menu-active">
										<a href="/category">Tin tức</a>
										<ul class="sub-menu">
											<?php
											$ltin =	Illuminate\Support\Facades\DB::table('loaitin')->where('anHien', '=', 1)->get();
											?>
											@foreach ($ltin as $a)
											<li><a href="/newsofCT/{{$a->id}}">{{$a->ten}}</a></li>
											@endforeach
										</ul>
									</li>
									<a class="main-menu-active" href="/about">Giới thiệu</a>
							
									<a class="main-menu-active" href="/contact">Liên hệ</a>
								</ul>
							</div>
							{{-- --------------------------------------- --}}
							@if (Auth::check()) 
								@if (Auth::User()->vai_tro == 0)
									<ul class="nav navbar-toolbar">
										<li class="dropdown dropdown-user">
											<a class="nav-link dropdown-toggle link" data-toggle="dropdown">
												<img style="width: 30px;" src="<?=asset(Auth::User()->urlHinh)?>" />
												<span></span><?=Auth::User()->name?>
											</a>
											<ul class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="/profile/{{Auth::User()->id}}"><i class="fa fa-user"></i>&ensp;Thông tin cá nhân</a>
												<a class="dropdown-item" href="/logout"><i class="fa fa-power-off"></i>&ensp;Đăng xuất</a>
											</ul>
										</li>
									</ul>
								@else
								<ul class="nav navbar-toolbar">
									<li class="dropdown dropdown-user">
										<a class="nav-link dropdown-toggle link" data-toggle="dropdown">
											<img style="width: 30px;" src="<?=asset(Auth::User()->urlHinh)?>" />
											<span></span><?=Auth::User()->name?>
										</a>
										<ul class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="/admin"><i class="fa fa-cog"></i>&ensp;Quản trị</a>
											<a class="dropdown-item" href="/profile/{{Auth::User()->id}}"><i class="fa fa-user"></i>&ensp;Thông tin cá nhân</a>
											<a class="dropdown-item" href="/logout"><i class="fa fa-power-off"></i>&ensp;Đăng xuất</a>
										</ul>
									</li>
								</ul>
								@endif
							@else
								<li class="mega-menu-active">
									<a href="/register" class="left-topbar-item">Sing up</a>
									<a href="/login" class="left-topbar-item">Log in</a>
								</li>
							@endif									
						</div>
					</nav>
				</div>
			</div>	
		</div>
	</header>
    {{--Chèn nội dung  --}}
    @yield('contect')
	<!-- Footer -->
	<footer>
		<div class="bg2 p-t-40 p-b-25">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 p-b-20">
						<div class="size-h-3 flex-s-c">
							<a href="index.html">
								<img class="max-s-full" src="/images/icons/logo-02.png" alt="LOGO">
							</a>
						</div>

						<div>
							<p class="f1-s-1 cl11 p-b-16">
								MagNews là website truyền tải tin tức nhanh chóng và chính xác
								Nơi bạn có thể chia sẻ, bày tỏ cảm xúc đến với mọi người xung quanh và cả trên Thế Giới
							</p>

							<p class="f1-s-1 cl11 p-b-16">
								Holine: 0912345678
							</p>

							<div class="p-t-15">
								<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-facebook-f"></span>
								</a>

								<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-twitter"></span>
								</a>
								<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-youtube"></span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-lg-4 p-b-20">
						<div class="size-h-3 flex-s-c">
							<h5 class="f1-m-7 cl0">
								Bài viết phổ biến
							</h5>
						</div>

						<ul>
							<?php
								$popular = Illuminate\Support\Facades\DB::select('SELECT tin.xem, tin.id, tin.idLT, tin.tieuDe,tin.tomTat, tin.urlHinh, tin.ngayDang,loaitin.ten
								FROM tin, loaitin WHERE tin.idLT=loaitin.id AND tin.anHien = 1 ORDER BY xem DESC LIMIT 3');
								?>
							@foreach ($popular as $item)
								<li class="flex-wr-sb-s p-b-20">
									<a href="/detail/{{$item->id}}" class="size-w-4 wrap-pic-w hov1 trans-03">
										<img src="/{{$item->urlHinh}}" alt="IMG">
									</a>

									<div class="size-w-5">
										<h6 class="p-b-5">
											<a href="/detail/{{$item->id}}" class="f1-s-5 cl11 hov-cl10 trans-03">
												{{$item->tieuDe}}
											</a>
										</h6>

										<span class="f1-s-3 cl6">
											{{$item->ngayDang}}
										</span>
									</div>
								</li>
							@endforeach
						</ul>
					</div>

					<div class="col-sm-6 col-lg-4 p-b-20">
						<div class="size-h-3 flex-s-c">
							<h5 class="f1-m-7 cl0">
								Thể loại tin 
							</h5>
						</div>

						<ul class="m-t--12">
							<?php 
									$stt = 1;	
								?>
								@foreach ($ltin as $a)
									<li class="how-bor1 p-rl-5 p-tb-10">
										<a href="/newsofCT/{{$a->id}}" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
											{{$a->ten}}
										</a>
									</li>
								@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div> 
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="video-mo-01">
					<iframe src="/https://www.youtube.com/embed/wJnBTPUQS5A?rel=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->	
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/bootstrap/js/popper.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/js/main.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>

</body>
</html>