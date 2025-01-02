<?php
if ( isset( $_GET['mck'] ) && $_GET['mck'] ) {
	$symbol = bsc_format_string( $_GET['mck'] );
	$id_class = get_sub_field( 'id_class' );
	$tab = generateRandomString();
	$stt_re = array( '1', '2', '3', '4' );
	?>
	<?php if ( $stt_re ) { ?>
		<section class="2xl:py-4 py-3 bg-primary-50 sticky z-10 top-0 report_finance_list" <?php if ( $id_class ) { ?>
				id="<?php echo $id_class ?>" <?php } ?>>
			<div class="container">
				<ul
					class="customtab-nav  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'flex justify-between gap-10' : 'overflow-x-auto gap-4  nav-scroll-mb' ?>">
					<?php
					foreach ( $stt_re as $i ) {
						?>
						<li class="flex-1">
							<button data-tabs="#<?php echo $tab . $i ?>" <?php if ( $i > 1 )
									 echo 'data-ajax="true" data-api="report_finance_list-' . $i . '" data-symbol="' . $symbol . '"' ?>
									class="<?php if ( $i == 1 )
									 echo 'active' ?> block text-center font-bold lg:text-lg text-xs lg:py-[12px] py-3 px-10 [&:not(.active)]:text-black text-white [&:not(.active)]:bg-transparent bg-primary-300 transition-all duration-500 hover:!text-white hover:!bg-primary-300 rounded-lg whitespace-nowrap">
									<?php
								 the_sub_field( 'title_' . $i );
								 ?>
							</button>
						</li>
						<?php
					}
					?>
				</ul>
			</div>
		</section>
		<?php
		foreach ( $stt_re as $i ) {
			?>
			<section class="tab-content <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-[54px] mb-[100px]' : 'my-[50px]' ?> <?php if ( $i == 1 )
					   echo 'block bsc-ajax-api';
				   else
					   echo 'hidden' ?>" id="<?php echo $tab . $i ?>"
				<?php if ( $i == 1 )
					echo 'data-api="report_finance_list-' . $i . '" data-symbol="' . $symbol . '"' ?>
					data-chart="collapseChart,toggle_content_baocao">
					<div class="hidden">
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
			<?php
		}
	?>
	<?php } ?>
<?php } ?>