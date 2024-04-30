@extends('client.layouts.master')

@section('content')





<section class="ls section_padding_top_130 section_padding_bottom_100">
				<div class="container">

					<div class="row">
                   
						<div class="col-sm-12">
							<div class="cs intro_section blog_slider">
								<div class="flexslider" data-nav="false">
									<ul class="slides">
									
										
										
									</ul>
								</div>
								<!-- eof flexslider -->
							</div>
						</div>
					</div>


					<div class="row topmargin_60 bottommargin_60">
                    @foreach ($blogs as $blog)
						<div class="col-md-4 text-center">
							<article class="vertical-item content-padding post format-standard with_shadow">

								<div class="item-media entry-thumbnail">
									<img src="{{url('uploads/'.$blog['image'])}}" alt="">
								</div>

								<div class="item-content entry-content">
									<header class="entry-header">

										<div class="entry-date small-text highlight">
											<a href="{{route('blogs.show',$blog->id)}}" rel="bookmark">
												<time class="entry-date" datetime="{{ \Carbon\Carbon::parse($blog['created_at'])->toDateString() }}">
                                                {{ \Carbon\Carbon::parse($blog['created_at'])->toDateString() }}
												</time>
											</a>
										</div>

										<h4 class="entry-title">
											<a href="{{route('blogs.show',$blog->id)}}" rel="bookmark"> {{$blog['title']}}</a>
										</h4>

									</header>
									<!-- .entry-header -->

									<p class="fontsize_18"> {{$blog['short_content']}}</p>

								</div>
								<!-- .item-content.entry-content -->
							</article>
						</div>
                        @endforeach
					</div>

				
				</div>
			</section>
			
            <section id="appointment" class="ls section_padding_top_130 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
							<h2 class="section_header with_icon highlight">İletişime Geç</h2>
							<div class="fontsize_16">
								Tükenmişlik yaşıyorsanız formu doldurarak bize ulaşabilirsiniz.
							</div>

							<form class="contact-form row columns_margin_bottom_40 topmargin_60" method="POST" action="{{ route('test.form.show') }}">
                            @csrf
								<div class="col-sm-6">
									<div class="contact-form-name">
										<label for="name">Your Name
											<span class="required">*</span>
										</label>
										<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="İsim Soyisim">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="contact-form-email">
										<label for="email">Email 
											<span class="required">*</span>
										</label>
										<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="contact-form-subject">
										<label for="subject">Subject
											<span class="required">*</span>
										</label>
										<input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Konu Başlığı">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="contact-form-phone">
										<label for="phone">Phone
											<span class="required">*</span>
										</label>
										<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Telefon">
									</div>
								</div>
								
							
								<div class="col-sm-12">
									<div class="contact-form-message">
										<label for="message">Message</label>
										<textarea aria-required="true" rows="1" cols="45" name="message" id="message" class="form-control" placeholder="Mesaj"></textarea>
									</div>
								</div>

								<div class="col-sm-12">

									<div class="contact-form-submit topmargin_20">
									<button type="submit"  class="theme_button color1 with_shadow">Mesaj Gönder</button>
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
			</section>


@endsection