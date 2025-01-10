<?php
$thanh_phos = get_terms( array(
	'taxonomy' => 'thanh-pho',
	'hide_empty' => false,
	'parent' => 0,
) );
if ( ! empty( $thanh_phos ) && ! is_wp_error( $thanh_phos ) ) :
	?>
	<section
		class="bg-[#EBF4FA]  list_chuyen_gia <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'py-4' : 'py-[12px]' ?>"
		<?php if ( get_sub_field( 'id_class' ) ) { ?> id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
		<div class="container">
			<ul class="flex justify-center <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'gap-10' : 'gap-4' ?>">
				<?php
				$i = 0;
				foreach ( $thanh_phos as $thanh_pho ) :
					$i++;
					if ( $i == 1 ) {
						$custom_taxterms = $thanh_pho->term_id;
					}
					?>
					<li class="cursor-pointer <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1' ?>">
						<input type="radio" name="thanh_pho" class="hidden peer" value="<?php echo $thanh_pho->term_id ?>"
							id="chuyen_gia<?php echo $thanh_pho->term_id ?>" <?php if ( $i == 1 )
								   echo 'checked' ?>>
							<label
								class="block text-center font-bold  text-black peer-checked:text-white bg-transparent peer-checked:bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg xl:min-w-[400px] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-lg py-[12px] px-10' : 'text-xs py-3 px-4' ?>"
							for="chuyen_gia<?php echo $thanh_pho->term_id ?>"><?php echo $thanh_pho->name ?></label>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>
<section
	class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'xl:mt-[62px] mt-14 xl:mb-[100px] mb-14' : 'my-[30px]' ?>">
	<div class="container">
		<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) : ?>
			<form class="flex gap-6 items-end mb-10 flex-wrap" id="form-search-expert" data-scale="pc" data-paged="1">
				<?php
				$kinh_nghiems = get_terms( array(
					'taxonomy' => 'kinh-nghiem',
					'hide_empty' => false,
					'parent' => 0,
				) );
				if ( ! empty( $kinh_nghiems ) && ! is_wp_error( $kinh_nghiems ) ) :
					?>
					<div class="flex flex-col font-Helvetica">
						<p class="font-semibold mb-2">
							<?php _e( 'Kinh nghiệm', 'bsc' ) ?>
						</p>
						<select id="kinh_nghiem"
							class="select_custom w-[190px] bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]">
							<option value=""><?php _e( 'Tất cả', 'bsc' ) ?></option>
							<?php foreach ( $kinh_nghiems as $kinh_nghiem ) :
								?>
								<option value="<?php echo $kinh_nghiem->term_id ?>">
									<?php echo esc_html( $kinh_nghiem->name ); ?>
								</option>
							<?php endforeach; ?>
						</select>
					</div>
				<?php endif; ?>
				<?php
				$menhs = get_terms( array(
					'taxonomy' => 'menh',
					'hide_empty' => false,
					'parent' => 0,
				) );
				if ( ! empty( $menhs ) && ! is_wp_error( $menhs ) ) :
					?>
					<div class="flex flex-col font-Helvetica">
						<p class="font-semibold mb-2">
							<?php _e( 'Mệnh', 'bsc' ) ?>
						</p>
						<select id="menh"
							class="select_custom w-[190px] bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]">
							<option value=""><?php _e( 'Tất cả', 'bsc' ) ?></option>
							<?php foreach ( $menhs as $menh ) :
								?>
								<option value="<?php echo $menh->term_id ?>">
									<?php echo esc_html( $menh->name ); ?>
								</option>
							<?php endforeach; ?>
						</select>
					</div>
				<?php endif; ?>
				<?php
				$trinh_do_hoc_vans = get_terms( array(
					'taxonomy' => 'trinh-do-hoc-van',
					'hide_empty' => false,
					'parent' => 0,
				) );
				if ( ! empty( $trinh_do_hoc_vans ) && ! is_wp_error( $trinh_do_hoc_vans ) ) :
					?>
					<div class="flex flex-col font-Helvetica">
						<p class="font-semibold mb-2">
							<?php _e( 'Trình độ học vấn', 'bsc' ) ?>
						</p>
						<select id="trinh_do_hoc_van"
							class="select_custom w-[190px] bg-[#F3F4F6] h-[50px] rounded-[10px] pl-5 border-[#E4E4E4]">
							<option value=""><?php _e( 'Tất cả', 'bsc' ) ?></option>
							<?php foreach ( $trinh_do_hoc_vans as $trinh_do_hoc_van ) :
								?>
								<option value="<?php echo $trinh_do_hoc_van->term_id ?>">
									<?php echo esc_html( $trinh_do_hoc_van->name ); ?>
								</option>
							<?php endforeach; ?>
						</select>
					</div>
				<?php endif; ?>
				<div class="flex flex-col font-Helvetica">
					<p class="font-semibold mb-2">
						<?php _e( 'Tên chuyên gia', 'bsc' ) ?>
					</p>
					<input id="name_chuyen_gia" type="text" placeholder="<?php _e( 'Nhập họ tên chuyên gia', 'bsc' ) ?>"
						class="w-[273px] bg-[#F3F4F6] h-[50px] rounded-[10px] px-5 border-[#E4E4E4]">
				</div>
				<button type="submit" id="chuyen_gia_submit"
					class="cursor-pointer btn-base-yellow h-[50px] rounded-xl min-w-[128px]"><?php _e( 'Tìm kiếm', 'bsc' ) ?></button>
				<button type="button" id="chuyen_gia_btn-reload"
					class="w-[50px] h-[50px] rounded-lg flex items-center justify-center p-3 bg-[#E8F5FF] group">
					<?php echo svgClass( 'reload', '20', '20', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform' ) ?>
				</button>
			</form>
		<?php else : ?>
			<div class="flex gap-2 items-center mb-4 text-xs font-bold font-Helvetica">
				<button type="button" class="inline-flex gap-3 items-center py-2 px-4 rounded-lg border border-[#C9CCD2]"
					data-modal-target="expert-modal-filter" data-modal-toggle="expert-modal-filter">
					<?php echo svgClass( 'filter-icon', '', '', 'shrink-0' ) ?>
					<?php _e( 'Bộ lọc', 'bsc' ) ?>
				</button>
				<button type="button" id="chuyen_gia_btn-reload"
					class="w-[38px] h-[38px] rounded-lg flex items-center justify-center p-3 bg-[#E8F5FF] group">
					<?php echo svgClass( 'reload', '18', '18', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform' ) ?>
				</button>
			</div>
		<?php endif; ?>

		<?php
		$args = array(
			'post_type' => 'chuyen-gia',
			'post_status' => 'publish',
			'posts_per_page' => 12,
			'meta_key' => 'fullname',
			'orderby' => 'meta_value',
			'order' => 'ASC',
			'paged' => 1,
			'tax_query' => array(
				array(
					'taxonomy' => 'thanh-pho',
					'field' => 'id',
					'terms' => $custom_taxterms
				)
			),
		);
		$filter_job = new WP_Query( $args );
		$total_news = $filter_job->found_posts
			?>
		<div id="list-chuyen-gia">
			<?php if ( $filter_job->have_posts() ) : ?>
				<div
					class="grid <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '2xl:grid-cols-4 lg:grid-cols-3 grid-cols-2 gap-x-5 gap-y-6' : 'grid-cols-2 gap-4' ?>">
					<?php
					while ( $filter_job->have_posts() ) :
						$filter_job->the_post();
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;
					?>
				</div>
				<div class="pagination-center">
					<?php get_template_part( 'components/pagination', '', array(
						'get' => 'ajax',
						'query' => $filter_job,
						'paged' => 1,
						'total_page' => $total_news
					) ) ?>
				</div>
				<?php
			else :
				echo '<p>' . __( 'Không có chuyên gia nào phù hợp', 'bsc' ) . '</p>';
			endif;

			wp_reset_postdata(); ?>
		</div>
		<div id="chuyen-gia-loading" class="hidden">
			<div role="status">
				<svg aria-hidden="true"
					class="w-10 h-10 m-auto text-gray-200 animate-spin dark:text-gray-600 fill-primary-500"
					viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
						fill="currentColor" />
					<path
						d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
						fill="currentFill" />
				</svg>
				<span class="sr-only">Loading...</span>
			</div>
		</div>
</section>
<div class="trigger-button" data-modal-target="expert-modal" data-modal-toggle="expert-modal"></div>
<div id="expert-modal" tabindex="-1" aria-hidden="true"
	class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[999] justify-center items-center w-full md:inset-0 h-full max-h-full bg-[#000] bg-opacity-70">
	<div class="relative p-4 w-full max-w-[946px] max-h-full">

		<div class="relative bg-white rounded-2xl shadow overflow-hidden">

			<div
				class="flex items-center justify-between bg-primary-50  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-6 py-[18px]' : 'p-4' ?>">
				<h3
					class=" font-bold text-primary-300 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-2xl' : 'text-lg' ?>">
					<?php _e( 'CHI TIẾT CHUYÊN GIA TƯ VẤN', 'bsc' ) ?>
				</h3>
				<button type="button"
					class="text-primary-300 flex items-center justify-center rounded-full bg-white shadow-base expert-modal-close <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-9 h-9' : 'w-8 h-8 ' ?>"
					data-modal-toggle="expert-modal">
					<svg class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[14px] h-[14px]' : 'w-[12px] h-[12px]' ?>"
						aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
					</svg>
					<span class="sr-only">Close modal</span>
				</button>
			</div>
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'p-6' : 'p-4' ?>">
				<div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
					<div
						class="expert-modal-info bg-gradient-blue-50 font-Helvetica space-y-6 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'p-8 rounded-2xl' : 'p-[12px] rounded-[10px]' ?>">
						<div class="flex items-center">
							<div
								class="rounded-full overflow-hidden mr-4 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[100px]' : 'w-[92px]' ?>">
								<div class="relative w-full pt-[100%] group expert-img">

								</div>
							</div>
							<div class="space-y-2 mr-2">
								<p
									class="font-bold mt-1 expert-name <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'text-xl' : 'text-base' ?>">

								</p>
								<div class="expert-destiny">


								</div>
							</div>
							<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
								<div class="w-[74px] shrink-0 ml-auto expert-qr bg-white p-1">

								</div>
							<?php } ?>
						</div>
						<ul class="space-y-2 text-xs expert-info">

						</ul>
						<?php if ( ! wp_is_mobile() && ! bsc_is_mobile() ) { ?>
							<div class="expert-btn">

							</div>
						<?php } ?>
					</div>
					<div
						class="expert-modal-desc rounded-2xl bg-gradient-blue-50 font-Helvetica max-h-full overflow-y-auto scroll-bar-custom expert-desc <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'p-8' : 'text-xs p-[12px]' ?>">

					</div>
					<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
						<div class="expert-btn prose-a:py-3">

						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
	<div id="expert-modal-filter" tabindex="-1" aria-hidden="true"
		class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[999] justify-center items-center w-full md:inset-0 h-full max-h-full bg-[#000] bg-opacity-70">
		<div class="relative w-full max-w-[946px] max-h-full">
			<div class="relative bg-white shadow overflow-hidden p-5">
				<div class="flex items-center justify-between mb-4 pb-5 border-b border-[#C9CCD2]">
					<button type="button" class="inline-flex gap-3 items-center font-Helvetica font-bold text-xl">
						<?php echo svgClass( 'filter-icon', '', '', 'shrink-0' ) ?>
						<?php _e( 'Bộ lọc', 'bsc' ) ?>
					</button>
					<button type="button" class="text-black w-8 h-8 expert-modal-filter_btn-close"
						data-modal-toggle="expert-modal-filter">
						<svg class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[14px] h-[14px]' : 'w-[12px] h-[12px]' ?>"
							aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
						</svg>
						<span class="sr-only">Close modal</span>
					</button>
				</div>

				<form id="form-search-expert" data-paged="1" data-scale="mobile">
					<div class="h-12 py-[12px] px-6 border border-[#DADADA] rounded-lg flex items-center gap-[12px] mb-4">
						<div class="flex-shrink-0">
							<?php echo svgpath( 'search', '24', '24', ' fill-[#B2B2B2]' ) ?>
						</div>
						<input id="name_chuyen_gia" type="text"
							placeholder="<?php _e( 'Tìm theo tên chuyên gia', 'bsc' ) ?>"
							class="focus:outline-0 focus:ring-0 flex-1 border-0 font-Helvetica p-0 placeholder:text-[#B2B2B2]">
					</div>

					<?php
					$kinh_nghiems = get_terms( array(
						'taxonomy' => 'kinh-nghiem',
						'hide_empty' => false,
						'parent' => 0,
					) );
					if ( ! empty( $kinh_nghiems ) && ! is_wp_error( $kinh_nghiems ) ) :
						?>
						<div class="flex flex-col font-Helvetica">
							<p class="font-bold mb-4 text-lg">
								<?php _e( 'Kinh nghiệm', 'bsc' ) ?>
							</p>
							<div id="kinh_nghiem" class="space-y-2 mb-6 pb-6 border-b border-[#C9CCD2]">
								<?php foreach ( $kinh_nghiems as $kinh_nghiem ) : ?>
									<div class="form-group flex items-center gap-4 font-Helvetica font-medium">
										<input type="checkbox" value="<?php echo $kinh_nghiem->term_id ?>"
											id="<?php echo $kinh_nghiem->term_id ?>"
											class="w-4 h-4 text-primary-300 border-gray-300 rounded focus:ring-0 focus:outline-0 focus:shadow-none ">
										<label
											for="<?php echo $kinh_nghiem->term_id ?>"><?php echo esc_html( $kinh_nghiem->name ); ?></label>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endif; ?>
					<?php
					$menhs = get_terms( array(
						'taxonomy' => 'menh',
						'hide_empty' => false,
						'parent' => 0,
					) );

					if ( ! empty( $menhs ) && ! is_wp_error( $menhs ) ) :
						?>
						<div class="flex flex-col font-Helvetica">
							<p class="font-bold mb-4 text-lg">
								<?php _e( 'Mệnh', 'bsc' ) ?>
							</p>
							<div id="menh" class="border-b border-[#C9CCD2] flex flex-wrap gap-[12px] mb-6 pb-6">
								<?php foreach ( $menhs as $menh ) :
									$icon = get_field( 'icon', $menh );
									$background = get_field( 'background', $menh );
									$color = get_field( 'color', $menh );
									?>
									<div class="form-group flex items-center gap-4 font-Helvetica font-medium">
										<input type="checkbox" value="<?php echo $menh->term_id; ?>"
											id="<?php echo $menh->term_id; ?>" class="hidden peer">
										<label for="<?php echo $menh->term_id; ?>"
											class="rounded-[45px] py-1 inline-flex gap-[6px] items-center font-medium relative text-xs pl-2 pr-[12px] border-2 border-transparent peer-checked:border-black peer-checked:shadow-lg"
											style="background-color: <?php echo esc_attr( $background ); ?>; color: <?php echo esc_attr( $color ); ?>;">
											<div class="bg-white rounded-full flex items-center justify-center w-4 h-4">
												<?php if ( $icon ) : ?>
													<?php echo wp_get_attachment_image( $icon, 'full' ) ?>
												<?php endif; ?>
											</div>
											<?php echo esc_html( $menh->name ); ?>
										</label>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endif; ?>

					<?php
					$trinh_do_hoc_vans = get_terms( array(
						'taxonomy' => 'trinh-do-hoc-van',
						'hide_empty' => false,
						'parent' => 0,
					) );
					if ( ! empty( $trinh_do_hoc_vans ) && ! is_wp_error( $trinh_do_hoc_vans ) ) :
						?>
						<div class="flex flex-col font-Helvetica">
							<p class="font-bold mb-4 text-lg">
								<?php _e( 'Trình độ học vấn', 'bsc' ) ?>
							</p>
							<div id="trinh_do_hoc_van" class="space-y-2 pb-6 border-b border-[#C9CCD2]">
								<?php foreach ( $trinh_do_hoc_vans as $trinh_do_hoc_van ) : ?>
									<div class="form-group flex items-center gap-4 font-Helvetica font-medium">
										<input type="checkbox" value="<?php echo $trinh_do_hoc_van->term_id ?>"
											id="<?php echo $trinh_do_hoc_van->term_id ?>"
											class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-0 focus:outline-0 focus:shadow-none ">
										<label
											for="<?php echo $trinh_do_hoc_van->term_id ?>"><?php echo esc_html( $trinh_do_hoc_van->name ); ?></label>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endif; ?>

					<button type="submit" id="chuyen_gia_submit"
						class="cursor-pointer btn-base-yellow h-[50px] rounded-xl w-full mt-8"><?php _e( 'Tìm kiếm', 'bsc' ) ?></button>

				</form>

			</div>
		</div>
	</div>
<?php } ?>