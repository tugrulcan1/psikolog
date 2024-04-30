<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from html.modernwebtemplates.com/psychologist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2024 20:11:53 GMT -->
<head>
	<title>Psikolog Kübra Coşkun</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="{{ URL::to('/') }}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/css/animations.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/css/fonts.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/css/main.css" class="color-switcher-link">
	<script src="{{ URL::to('/') }}/js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->


	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<section class="page_topline cs table_section table_section_md columns_padding_0">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 text-center text-md-left">
							

						</div>

						<div class="col-md-6 text-center divided_content">

							<div>
								<div class="media small-teaser">
									<div class="media-left">
										<i class="fa fa-user highlight fontsize_16"></i>
									</div>
									<div class="media-body">
                                    <i class="icofont-stock-mobile"></i>
                                    <a href="tel:{{$settings['phone']}}">Telefon: {{$settings['phone']}}</a>

									</div>
								</div>
							</div>

							<div>
								<div class="media small-teaser">
									<div class="media-left">
										<i class="fa fa-map-marker highlight fontsize_16"></i>
									</div>
									<div class="media-body">
                                    {{$settings['adress']}}
									</div>
								</div>
							</div>

							<div>
								<div class="media small-teaser">
									<div class="media-left">
										<i class="fa fa-envelope highlight fontsize_16"></i>
									</div>
									<div class="media-body">
                                    <i class="icofont-ui-message"></i>
                                    <a href="mailto:{{$settings['e-mail']}}">{{$settings['e-mail']}}</a>
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-3 text-center text-md-right bottommargin_0">
							<a href="#appointment" class="theme_button color1 margin_0">İletişime Geç</a>
						</div>

					</div>
				</div>
			</section>

			<header class="page_header header_white table_section columns_padding_0 toggler-xs-right">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4 col-sm-5">
							<a href"" class="logo">
							Psk. Kübra Coşkun
							</a>
							<!-- header toggler -->
							<span class="toggle_menu visible-xs">
								<span></span>
							</span>
						</div>
						<div class="col-md-5 col-sm-2 text-center">
							<!-- main nav start -->
							<nav class="mainmenu_wrapper">
								<ul class="mainmenu nav sf-menu">
                                @foreach ($menu as $key => $menuItem)

									<li class="active">
                                    <a href="{{ $menuItem['href'] }}" class="nav-link @if (isset($menuItem['children']) && count($menuItem['children']) > 0) dropdown-toggle  @endif active"> {{ $menuItem['text'] }}</a>

									
									</li>
                                @endforeach
						
								</ul>
							</nav>
							<!-- eof main nav -->
							<span class="toggle_menu hidden-xs">
								<span></span>
							</span>
						</div>
						<div class="col-md-3 col-sm-5 text-right hidden-xs lightgreylinks">
							<div class="page_social_icons divided_content">
								 @foreach ($socialMediaIcons as $social_media_icon)
								<span>
									<a class="social-icon soc-{{$social_media_icon['name']}}" href="{{$social_media_icon['url']}}" title="{{$social_media_icon['name']}}"></a>
								</span>
								@endforeach
								
							</div>
						</div>
					</div>
				</div>
			</header>



		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

</body>


<!-- Mirrored from html.modernwebtemplates.com/psychologist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2024 20:11:53 GMT -->
</html>