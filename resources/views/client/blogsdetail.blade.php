@extends('client.layouts.master')

@section('content')
<section class="ls section_padding_top_130 section_padding_bottom_130 columns_padding_25">
				<div class="container">
					<div class="row">

						<div class="col-sm-10 col-sm-push-1">

							<div class="vertical-item content-padding with_shadow">
								<div class="entry-thumbnail item-media">
									<img src="images/gallery/01.jpg" alt="">
								</div>

								<div class="item-content">


									<header class="entry-header">

										<!-- .entry-meta -->

										<div class="entry-date small-text highlight">
											<a href="blog-right.html" rel="bookmark">
												<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                {{ $blog['created_at'] }}
												</time>
											</a>
										</div>

										<h1 class="entry-title">
											<a href="blog-single-full.html" rel="bookmark">{{ $blog['title'] }}</a>
										</h1>

										<hr class="divider_30_1">

									</header>
									<!-- .entry-header -->

									<div class="entry-content">
										<p>
                                        {!! $blog['content'] !!}
											</p>										
										

									</div>
									<!-- .entry-content -->


									<div class="author-meta side-item content-padding">

										<div class="row display_table_md">

											<div class="col-md-4 display_table_cell_md">
												<div class="item-media">
													<img src="images/face1.jpg" alt="">
												</div>
											</div>

											

										</div>
									</div>


									
									<!-- #respond -->

									
									<!-- #comments -->

								</div>

							</div>


						


						</div>
						<!--eof .col-sm-8 (main content)-->

					</div>
				</div>
			</section>

@endsection
