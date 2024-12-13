<?php
$time_cache = get_sub_field( 'time_cache' ) ?: 300;
$array_data = array(
	"maxitem" => "5",
	"lang" => pll_current_language(),
	'index' => 1
);
$response = get_data_with_cache( 'GetTopNews', $array_data, $time_cache );
if ( $response )
{
	?>
	<section
		class="home_news bg-white font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'my-[77px]' : 'mt-[50px] mb-[70px]' ?>"
		<?php if ( get_sub_field( 'id_class' ) )
		{ ?> id="<?php echo get_sub_field( 'id_class' ) ?>"
		<?php } ?>>
		<div class="container">
			<?php if ( get_sub_field( 'title' ) )
			{ ?>
				<h2 class="heading-title 2xl:mb-12 mb-8 wow fadeIn" data-wow-duration="2s">
					<?php the_sub_field( 'title' ) ?>
				</h2>
			<?php } ?>
			<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) : ?>
				<div class="grid grid-cols-5 gap-5">
					<?php
					$i = 0;
					foreach ( $response->d as $news )
					{
						$i++;
						if ( $i == 1 )
						{ ?>
							<div class="md:col-span-3 col-span-full">
								<div class="group">
									<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
										class="block relative w-full pt-[52%] mb-6 overflow-hidden rounded-[10px]">
										<img loading="lazy" src="<?php echo bsc_set_thumbnail( $news, 'large' ) ?>"
											alt="<?php echo htmlspecialchars( $news->title ) ?>"
											class="absolute w-full h-full inset-0 object-cover  transition-all duration-500 hover:scale-110">
									</a>
									<h3
										class="lg:text-[22px] text-lg font-bold mb-[12px] transition-all duration-500 group-hover:text-green">
										<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
											class="line-clamp-3"><?php echo htmlspecialchars( $news->title ) ?></a>
									</h3>
									<div class="mb-4 line-clamp-2">
										<?php echo htmlspecialchars( $news->description ) ?>
									</div>
									<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
										class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:scale-105">
										<?php echo svg( 'arrow-btn', '20', '20' ) ?>
										<?php _e( 'Xem chi tiết', 'bsc' ) ?>
									</a>
								</div>
							</div>
						<?php }
						break;
					} ?>
					<div class="md:col-span-2 col-span-full">
						<ul class="space-y-4">
							<?php
							$i = 0;
							foreach ( $response->d as $news )
							{
								$i++;
								if ( $i > 1 )
								{ ?>
									<li class="lg:p-6 p-4 bg-[#F5FCFF] rounded-lg group">
										<h3
											class="text-lg font-bold mb-3 transition-all duration-500 group-hover:text-green">
											<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
												class="line-clamp-2">
												<?php echo htmlspecialchars( $news->title ) ?>
											</a>
										</h3>
										<p class="line-clamp-1">
											<?php echo htmlspecialchars( $news->description ) ?>
										</p>
									</li>
									<?php
								}
							}
							?>
						</ul>
					</div>
				</div>
			<?php else : ?>
				<div class="block_slider-show-1 -mx-2 block_sameheight"
					data-flickity='{ "draggable": true,"wrapAround": true,"imagesLoaded": true,"prevNextButtons": false, "pageDots": true, "cellAlign": "left","contain": true, "autoPlay":3000}'>
					<?php
					$i = 0;
					foreach ( $response->d as $news )
					{
						$i++;
						?>
						<div class="w-full block_slider-item pb-3 px-2 sameheight_item">
							<div class="group shadow-base rounded-bl-[10px] rounded-br-[10px]">
								<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
									class="block relative w-full pt-[52%] overflow-hidden rounded-[10px]">
									<img loading="lazy" src="<?php echo bsc_set_thumbnail( $news, 'large' ) ?>"
										alt="<?php echo htmlspecialchars( $news->title ) ?>"
										class="absolute w-full h-full inset-0 object-cover  transition-all duration-500 hover:scale-110">
								</a>
								<div class="p-4 rounded-bl-[10px] rounded-br-[10px]">
									<!-- @todo: Thêm ngày cho bài viết -->
									<div class="flex items-center gap-2 mb-2 text-xs">
										<?php echo svg( 'date', '18', '18' ) ?>
										Ngày 26/06/2024
									</div>
									<h3
										class="text-xs font-bold transition-all duration-500 group-hover:text-green">
										<a href="<?php echo slug_news( htmlspecialchars( $news->newsid ), htmlspecialchars( $news->title ) ); ?>"
											class="line-clamp-2"><?php echo htmlspecialchars( $news->title ) ?></a>
									</h3>
								</div>


							</div>
						</div>
						<?php
					}
					?>
				</div>
			<?php endif; ?>
		</div>
	</section>
	<?php
}
?>
