<footer class="page_footer cs main_color2 table_section section_padding_50 columns_padding_0">
				<div class="container">

					<div class="row">

						<div class="col-sm-4 col-sm-push-4 text-center">
							<a href="" class="logo big text-shadow">
								Psikolog
								<span class="small-text"></span>
							</a>
						</div>

						<div class="col-sm-4 col-sm-pull-4 text-center text-sm-left text-md-left">
							<div class="widget widget_nav_menu greylinks">

								<ul class="menu divided_content wide_divider">
                                <i class="icofont-ui-message"></i>
                                    <a href="mailto:{{$settings['e-mail']}}">{{$settings['e-mail']}}</a>

									<li>
                                    <i class="icofont-stock-mobile"></i>
                                    <a href="tel:{{$settings['phone']}}">{{$settings['phone']}}</a>
                                </li>

									
								</ul>

							</div>
						</div>

						<div class="col-sm-4 text-center text-sm-right text-md-right">
							<div class="widget widget_nav_menu greylinks">

								<ul class="menu divided_content wide_divider">
                                <li>
                                    <a href="/page/about">Hakkımızda</a>
                                </li>

                                <li>
                                    <a href="/page/blog">Bloglar</a>
                                </li>

								
								</ul>

							</div>
						</div>

					</div>
				</div>
			</footer>

			<section class="cs main_color2 page_copyright section_padding_15">
            <div class="copyright-area">
        <div class="container">
            <div class="copyright-item">
                <p>Copyright @
                    
                    <script>document.write(new Date().getFullYear())</script> <a href="https://hibootstrap.com/" target="_blank">innovaticacode</a>
                </p>
            </div>
        </div>
    </div>

			</section>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="{{ URL::to('/') }}/js/compressed.js"></script>
	<script src="{{ URL::to('/') }}/js/main.js"></script>
	<script src="{{ URL::to('/') }}/js/switcher.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
var successMessage = "{{ session('success') }}";
console.log(successMessage);
if (successMessage) {
    Toastify({
        text: successMessage,
        duration: 5000,
        gravity: 'bottom',
        position: 'center',
        backgroundColor: 'green',
        stopOnFocus: true,
    }).showToast();
}
</script>
</body>


<!-- Mirrored from html.modernwebtemplates.com/psychologist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2024 20:11:53 GMT -->
</html>