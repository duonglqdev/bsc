<section class="home__banner block_slider dots-white block_slider-show-1">
	<!-- video -->
	<div
		class="w-full relative after:absolute after:w-3/4 after:top-0 after:left-0 after:bg-gradient-banner after:h-full after:pointer-events-none h-full block_slider-item">
		<video id="video-banner" class="object-cover w-full" autoplay="" muted="" playsinline=""
			loop=""
			src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/video-banner.mp4"></video>
		<div class="absolute w-full h-full inset-0">
			<div class="container relative z-10 h-full">
				<div class="flex flex-col h-full justify-center">
					<div class="lg:py-14 py-10 ">
						<h2
							class="uppercase text-white xl:text-[50px] lg:text-4xl text-3xl mb-6 font-extrabold !leading-tight">
							<p>
								Tại sao
							</p>
							<p>
								Chọn chúng tôi
							</p>
						</h2>
						<p class="text-2xl font-bold text-white mb-8">
							Chuyên nghiệp - Uy tín - Nền tảng vững vàng
						</p>
						<a href=""
							class="inline-block lg:px-7 px-5 lg:py-[15px] py-3 rounded-md bg-yellow-100 text-black font-semibold relative transition-all duration-500 after:absolute after:h-full after:w-0 after:top-0 after:left-0 after:bg-green after:transition-all after:duration-500 after:opacity-0 after:rounded-md hover:after:w-full hover:after:opacity-100 hover:text-white leading-none">
							<span
								class="inline-flex items-center gap-x-3 relative z-10"><?php echo svg( 'arrow-btn', '20' ) ?>Bắt đầu hành trình</span>
						</a>

					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- ảnh -->
	<div class="w-full block_slider-item">
		<a href="">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner.png" alt=""
				class="w-full h-full object-cover">
		</a>
	</div>
</section>