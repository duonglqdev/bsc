<section
	class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:mt-[86px] mt-20 lg:mb-[100px] mb-20' : 'mt-8 mb-[50px]' ?> mb-20 lich_thi_truong_list"
	<?php if ( get_sub_field( 'id_class' ) ) { ?> id="<?php echo get_sub_field( 'id_class' ) ?>" <?php } ?>>
	<div class="container">
		<?php if ( wp_is_mobile() && bsc_is_mobile() ) { ?>
			<div class="toggle-form mb-[12px] inline-block">
				<div class="">
					<p class="inline-flex items-baseline gap-2 font-medium">
						<?php _e( 'Bộ lọc', 'bsc' ) ?>
						<?php echo svgClass( 'down', '', '', 'rotate-180' ) ?>
					</p>
				</div>
				<div class="hidden">
					<p class="inline-flex items-baseline gap-2 font-medium">
						<?php _e( 'Ẩn bộ lọc', 'bsc' ) ?>
						<?php echo svg( 'down' ) ?>
					</p>
				</div>
			</div>
		<?php } ?>
		<form id="lich-thi-truong_form">
			<div
				class="flex <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? ' gap-5 mb-10 mt-4 items-end' : 'gap-y-[12px] mb-6 mt-[12px] flex-wrap -mx-2' ?>">
				<div
					class="flex flex-col font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:w-80 lg:max-w-1/3' : 'w-1/2 px-2' ?>">
					<p class="font-medium mb-2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
						<?php _e( 'Mã cổ phiếu', 'bsc' ) ?>
					</p>
					<input type="text" name="mck" placeholder="<?php _e( 'Nhập mã chứng khoán', 'bsc' ) ?>"
						class="mck w-full rounded-[10px]  border-[#E4E4E4] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'px-5 h-[50px]' : 'text-xs px-5 h-11' ?>">
				</div>
				<div
					class="flex flex-col font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'lg:w-80 lg:max-w-1/3' : 'w-1/2 px-2' ?>">
					<p class="font-medium mb-2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
						<?php _e( 'Loại sự kiện', 'bsc' ) ?>
					</p>
					<select
						class="select_custom w-full rounded-[10px]  border-[#E4E4E4] <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'h-[50px] pl-5' : 'h-11 pl-4 text-xs' ?> eventcode"
						name="eventcode">
						<option value=""><?php _e( 'Tất cả', 'bsc' ) ?></option>
						<?php
						$array_data_GetListEventType = array(
							'lang' => pll_current_language(),
						);
						$response_GetListEventType = get_data_with_cache( 'GetListEventType', $array_data_GetListEventType, $time_cache );
						if ( $response_GetListEventType ) {
							foreach ( $response_GetListEventType->d as $GetListEventType ) {
								if ( $GetListEventType->eventtype ) {
									?>
									<option value="<?php echo $GetListEventType->code ?>"><?php echo $GetListEventType->eventtype ?>
									</option>
									<?php
								}
							}
						} ?>
					</select>
				</div>
				<div
					class="font-Helvetica <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[433px] max-w-[40%]' : 'w-full px-2' ?>">
					<p class="font-medium mb-2 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
						<?php _e( 'Lọc theo ngày', 'bsc' ) ?>
					</p>
					<div id="date-range-picker" date-rangepicker datepicker-format="dd/mm/yyyy" datepicker-autohide
						datepicker-orientation="bottom right"
						class="flex items-center rounded-[10px] border border-[#EAEEF4] text-xs <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'h-[50px] px-5' : 'h-11 px-4' ?>">
						<div
							class="flex items-center 2xl:gap-5 gap-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1 justify-between' ?>">
							<input id="datepicker-range-start" name="fromdate" type="text"
								class="fromdate border-none focus:border-none focus:outline-0 focus:ring-0 max-w-[100px] p-0 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>"
								placeholder="<?php _e( 'Từ ngày', 'bsc' ) ?>">
							<?php echo svgClass( 'day', '', '', 'sm:w-5 w-4 sm:h-5 h-4' ) ?>
						</div>
						<span class="2xl:mx-4 mx-2 text-gray-500">-</span>
						<div
							class="flex items-center 2xl:gap-5 gap-3 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'flex-1 justify-between' ?>">
							<input id="datepicker-range-end" name="todate" type="text"
								class="todate border-none focus:border-none focus:outline-0 focus:ring-0 max-w-[100px] p-0 <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>"
								placeholder="<?php _e( 'Đến ngày', 'bsc' ) ?>">
							<?php echo svgClass( 'day', '', '', 'sm:w-5 w-4 sm:h-5 h-4' ) ?>
						</div>
					</div>
				</div>
				<button type="submit" id="lich-su_kien_submit"
					class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547]  px-6 py-3 font-semibold relative transition-all duration-500 leading-tight  <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'h-[50px] rounded-xl inline-block  min-w-[155px]' : 'h-10 rounded-lg text-xs flex-1 ml-2' ?>">
					<?php _e( 'Tìm kiếm', 'bsc' ) ?>
				</button>
				<button type="button" id="lich-su_kien_reset"
					class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'w-[50px] h-[50px]' : 'w-10 h-10 mr-2 ml-4' ?> shrink-0 rounded-lg flex items-center justify-center p-3 bg-[#E8F5FF] group">
					<?php echo svgClass( 'reload', '20', '20', 'transition-all duration-500 group-hover:rotate-[360deg] will-change-transform' ) ?>
				</button>
			</div>
			<ul class="flex items-center gap-5">
				<li>
					<input type="radio" name="sortfield" class="hidden peer" value="ex_date" id="ex_date" checked>
					<label
						class="sortfield cursor-pointer peer-checked:text-white bg-transparent peer-checked:bg-primary-300 inline-block <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-[10px] py-2' : 'rounded-md py-1.5' ?> [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 px-4 text-center font-bold transition-all duration-500 hover:!bg-primary-300 hover:!text-white text-xs"
						for="ex_date"><?php _e( 'GDKHQ', 'bsc' ) ?></label>
				</li>
				<li>
					<input type="radio" name="sortfield" class="hidden peer" value="last_reg_date" id="last_reg_date">
					<label
						class="cursor-pointer peer-checked:text-white bg-transparent peer-checked:bg-primary-300 inline-block <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-[10px] py-2' : 'rounded-md py-1.5' ?> [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 px-4 text-center font-bold transition-all duration-500 hover:!bg-primary-300 hover:!text-white text-xs"
						for="last_reg_date"><?php _e( 'Đăng ký', 'bsc' ) ?></label>
				</li>
				<li>
					<input type="radio" name="sortfield" class="hidden peer" value="effective_date" id="effective_date">
					<label
						class="cursor-pointer peer-checked:text-white bg-transparent peer-checked:bg-primary-300 inline-block <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'rounded-[10px] py-2' : 'rounded-md py-1.5' ?> [&:not(.active)]:text-paragraph text-white [&:not(.active)]:bg-primary-50 bg-primary-300 px-4 text-center font-bold transition-all duration-500 hover:!bg-primary-300 hover:!text-white text-xs"
						for="effective_date"><?php _e( 'Thực thi', 'bsc' ) ?></label>
				</li>
			</ul>
		</form>
		<div>
			<?php $total_page = 0;
			$post_per_page = 12; ?>
			<div class="<?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? 'mt-5' : 'mt-4' ?>">
				<div
					class="overflow-x-auto whitespace-nowrap <?php echo ! wp_is_mobile() && ! bsc_is_mobile() ? '' : 'text-xs' ?>">
					<table
						class="w-full max-w-full prose-thead:bg-primary-300 prose-thead:text-white prose-thead:font-bold font-medium prose-a:text-primary-300 prose-a:font-normal prose-th:px-3 prose-th:py-2 prose-th:border prose-th:border-[#C9CCD2] prose-td:px-3 prose-td:py-2 border-collapse prose-td:border prose-td:border-[#C9CCD2] text-center  overflow-hidden border border-[#C9CCD2] rounded-lg shadow-[inset_0px_0px_0px_1px_#ccc]">
						<thead>
							<tr>
								<th class="min-w-[130px]"><?php _e( 'Ngày GD KHQ', 'bsc' ) ?></th>
								<th class="min-w-[130px]"><?php _e( 'Ngày đăng ký', 'bsc' ) ?></th>
								<th class="min-w-[130px]"><?php _e( 'Ngày thực thi', 'bsc' ) ?></th>
								<th class="min-w-[130px]"><?php _e( 'Mã ck', 'bsc' ) ?></th>
								<th class="w-3/5"><?php _e( 'Sự kiện', 'bsc' ) ?></th>
							</tr>
						</thead>
						<tbody class="font-Helvetica" id="list-lich-su-kien">
							<?php
							$array_data_GetEvents = array(
								'lang' => pll_current_language(),
								'maxitem' => $post_per_page,
								'index' => 1,
								'sortField' => 'ex_date'
							);
							$response_GetEvents = get_data_with_cache( 'GetEvents', $array_data_GetEvents, $time_cache );
							if ( $response_GetEvents ) {
								if ( $response_GetEvents->totalrecord ) {
									$total_post = $response_GetEvents->totalrecord;
								} else {
									$total_post = $post_per_page;
								}
								$total_page = ceil( $total_post / $post_per_page );
								?>
								<?php
								foreach ( $response_GetEvents->d as $GetEvents ) {
									get_template_part( 'template-parts/content-lich-thi-truong', '', array(
										'data' => $GetEvents,
									) );
								}
								?>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="mt-8 pagination-center" id="list-lich-su-kien_pagination">
				<?php get_template_part( 'components/pagination', '', array(
					'get' => 'ajax_api',
					'total_page' => $total_page,
					'post_per_page' => 'hide'
				) ) ?>
			</div>
		</div>
		<div id="lich-su-kien-loading" class="hidden">
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
	</div>
</section>