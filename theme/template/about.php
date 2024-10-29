<?php

/**
Template Name: Về chúng tôi
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="bg-primary-50 shadow-base  scroll_nav sticky top-0 z-10">
		<div class="container">
			<ul class="flex items-center justify-between gap-5">
				<li><a href="#about_info"
						class="[&:not(.active)]:text-black text-primary-400 font-bold transition-all duration-500 hover:!text-primary-400 block py-6 relative after:absolute after:w-full after:h-[2px] after:left-0 after:bottom-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 opacity-100">Giới
						thiệu BSC</a></li>
				<li><a href="#about_mission"
						class="[&:not(.active)]:text-black text-primary-400 font-bold transition-all duration-500 hover:!text-primary-400 block py-6 relative after:absolute after:w-full after:h-[2px] after:left-0 after:bottom-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 opacity-100">Tầm
						nhìn & Sứ mệnh</a></li>
				<li><a href="#about_history"
						class="[&:not(.active)]:text-black text-primary-400 font-bold transition-all duration-500 hover:!text-primary-400 block py-6 relative after:absolute after:w-full after:h-[2px] after:left-0 after:bottom-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 opacity-100">Lịch
						sử hình thành</a></li>
				<li><a href="#about_leadership"
						class="[&:not(.active)]:text-black text-primary-400 font-bold transition-all duration-500 hover:!text-primary-400 block py-6 relative after:absolute after:w-full after:h-[2px] after:left-0 after:bottom-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 opacity-100">Đội
						ngũ lãnh đạo</a></li>
				<li><a href="#strategic__partner"
						class="[&:not(.active)]:text-black text-primary-400 font-bold transition-all duration-500 hover:!text-primary-400 block py-6 relative after:absolute after:w-full after:h-[2px] after:left-0 after:bottom-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 opacity-100">Đối
						tác chiến lược</a></li>
				<li><a href="#about_culture"
						class="[&:not(.active)]:text-black text-primary-400 font-bold transition-all duration-500 hover:!text-primary-400 block py-6 relative after:absolute after:w-full after:h-[2px] after:left-0 after:bottom-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 opacity-100">Văn
						hóa BSC</a></li>
				<li><a href="#about_award"
						class="[&:not(.active)]:text-black text-primary-400 font-bold transition-all duration-500 hover:!text-primary-400 block py-6 relative after:absolute after:w-full after:h-[2px] after:left-0 after:bottom-0 after:transition-all after:duration-500 [&:not(.active)]:after:opacity-0 opacity-100">Giải
						thưởng nổi bật</a></li>
			</ul>
		</div>
	</section>
	<section class="about_info lg:py-32 py-20" id="about_info">
		<div class="container">
			<h2 class="heading-title text-center mb-4">
				Về chúng tôi
			</h2>
			<div
				class="relative max-w-[734px] mx-auto lg:mb-[50px] mb-10 2xl:text-2xl text-xl font-bold text-primary-400 text-center">
				<div class="absolute lg:-left-10 lg:-top-5 -z-10 top-0 left-0">
					<?php echo svg( 'quote' ) ?>
				</div>
				“Là một định chế tài chính trung gian uy tín và giàu kinh nghiệm, BSC tự hào là cầu
				nối gắn kết giữa các nền kinh tế, các NĐT tổ chức, cá nhân trong và ngoài nước”
			</div>
			<div class="grid lg:grid-cols-2 grid-cols-1 lg:gap-20 gap-10 items-center">
				<div class="the_content text-black font-normal font-Helvetica">
					<p>
						Được thành lập từ ngày 18/11/1999, tiền thân là Công ty TNHH Chứng khoán
						Ngân hàng Đầu tư và Phát triển Việt Nam, <strong>Công ty Cổ phần Chứng khoán
							BIDV (BSC)</strong> là một trong hai công ty chứng khoán thành lập đầu
						tiên trên thị trường.
					</p>
					<p>
						Trải qua hơn 2 thập kỷ đồng hành cùng thị trường chứng khoán, BSC phát triển
						không ngừng và khẳng định vị thế tiên phong của định chế tài chính trung
						gian, công ty chứng khoán uy tín tại Việt Nam và trong khu vực.
					</p>
					<p>
						Với nguồn lực vững mạnh về nhân sự, công nghệ và tài chính cùng sự hỗ trợ đa
						phương diện từ BIDV,  đối tác chiến lược Hana Securities (Hàn Quốc), BSC
						luôn kiên định với sứ mệnh trở thành <strong>Người bạn đồng hành đáng tin
							cậy</strong> của cổ đông, đối tác và khách hàng.
					</p>
				</div>
				<a href="https://youtu.be/v-S2oFvblgw?si=2aeRx1owiG1ETA5e" data-fancybox=""
					class="rounded-[10px] overflow-hidden pt-[54%] relative block after:absolute after:inset-0 after:w-full after:h-full after:bg-[#000] after:bg-opacity-35">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about-info.png"
						alt="" class="absolute w-full h-full inset-0 object-cover">
					<div
						class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1] transition-all duration-500 hover:scale-110">
						<?php echo svg( 'play' ) ?>
					</div>
				</a>
			</div>
		</div>
	</section>
	<section class="about_mission lg:mb-[100px] mb-20" id="about_mission">
		<div class="container">
			<div class="grid gap-5 md:grid-cols-2 grid-cols-1">
				<div class="h-full bg-gradient-blue-50 rounded-[10px] lg:px-9 px-4 2xl:py-20 py-10">
					<h2 class="heading-title mb-4">
						SỨ MỆNH
					</h2>
					<div class="text-primary-300 2xl:text-2xl text-xl font-bold text-justify">
						Đóng góp tích cực cho sự phát triển của Thị trường Chứng khoán Việt Nam, đem
						lại lợi ích tối ưu cho cổ đông, đối tác và khách hàng.
					</div>
				</div>
				<div class="h-full bg-gradient-blue-50 rounded-[10px] lg:px-9 px-4 2xl:py-20 py-10">
					<h2 class="heading-title mb-4">
						TẦM NHÌN
					</h2>
					<div class="text-primary-300 2xl:text-2xl text-xl font-bold text-justify">
						Trở thành Công ty Chứng khoán uy tín hàng đầu, dựa trên nền tảng công nghệ
						số tiên tiến và hệ thống các sản phẩm dịch vụ toàn diện đem lại giá trị tối
						ưu cho khách hàng.
					</div>
				</div>
			</div>
			<div class="mt-10">
				<h2 class="heading-title mb-5 text-center">
					GIÁ TRỊ CỐT LÕI
				</h2>
				<div class="grid md:grid-cols-3 grid-cols-1 gap-5">
					<div
						class="h-full bg-gradient-blue-50 rounded-[10px] lg:px-7 px-4 pt-4 2xl:pb-14 pb-5">
						<div class="flex items-center justify-between mb-5">
							<h3 class="uppercase 2xl:text-2xl text-xl font-bold">
								NIỀM TIN
							</h3>
							<?php echo svg( 'faith' ) ?>
						</div>
						<div class="text-primary-400 text-lg font-bold text-justify">
							Xây dựng niềm tin vững chắc với Cổ đông, Người lao động, Đối tác và
							Khách hàng dựa trên tinh thần Thượng tôn pháp luật, minh bạch và chuyên
							nghiệp trong mọi hoạt động.
						</div>
					</div>
					<div
						class="h-full bg-gradient-blue-50 rounded-[10px] lg:px-7 px-4 pt-4 2xl:pb-14 pb-5">
						<div class="flex items-center justify-between mb-5">
							<h3 class="uppercase 2xl:text-2xl text-xl font-bold">
								HỢP LỰC
							</h3>
							<?php echo svg( 'unite' ) ?>
						</div>
						<div class="text-primary-400 text-lg font-bold text-justify">
							Hợp sức đồng lòng của mỗi cá nhân, tập thể; giữa sức mạnh nội tại của tổ
							chức và lợi thế của đối tác chiến lược…. là sức mạnh đóng góp vào thành
							công chung của BSC.
						</div>
					</div>
					<div
						class="h-full bg-gradient-blue-50 rounded-[10px] lg:px-7 px-4 pt-4 2xl:pb-14 pb-5">
						<div class="flex items-center justify-between mb-5">
							<h3 class="uppercase 2xl:text-2xl text-xl font-bold">
								SÁNG TẠO
							</h3>
							<?php echo svg( 'creative' ) ?>
						</div>
						<div class="text-primary-400 text-lg font-bold text-justify">
							Không ngừng tư duy, học hỏi và đón nhận những tri thức mới, công nghệ
							mới mang đến những giá trị tối ưu cho đối tác và khách hàng.
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<section class="about_history bg-primary-50 py-14" id="about_history">
		<div class="container">
			<h2 class="heading-title text-primary-700 mb-12">
				LỊCH SỬ HÌNH THÀNH
			</h2>
			<div class="about_history-content">
				<?php
				for ( $i = 0; $i < 7; $i++ )
				{
					?>

					<div class="w-full">
						<div class="lg:flex">
							<div class="max-w-[547px] w-full">
								<div class="rounded-[20px] overflow-hidden relative pt-[70.21%] group">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about-his.png"
										alt=""
										class="absolute w-full h-full inset-0 object-cover transition-all duration-500 group-hover:scale-110">
								</div>
							</div>
							<div class="lg:ml-20 lg:mt-0 mt-5">
								<h3
									class="text-primary-500 2xl:text-[75px]  md:text-5xl text-4xl font-bold mb-5">
									2019 - 2023
								</h3>
								<div class="text-primary-500 text-xl font-bold mb-4">
									Hợp tác chiến lược với cổ đông nước ngoài Hana Securities -
									Hàn Quốc  
								</div>
								<div class="the_content">
									<p>
										<strong>2019:</strong>  Tăng vốn điều lệ lên 1.220 tỷ đồng
									</p>
									<p>
										<strong>2020:</strong> Ra mắt sản phẩm mới ứng dụng công nghệ
										hiện đại hỗ trợ nhà
										đầu tư là i-Broker và i-Invest; sản phẩm Quản lý tài sản cá nhân
										i-Fortune
									</p>
									<p>
										<strong>2021:</strong> Ra mắt tính năng mở tài khoản trực tuyến
										trên website và
										thông qua ứng dụng BIDV Smart Banking có ứng dụng công nghệ
										eKYC.
									</p>
									<p>
										<strong>2022:</strong> Ra mắt ứng dụng đầu tư chứng khoán thế hệ
										mới – BSC Smart
										Invest.
										Hợp tác chiến lược với đối tác Hana Securities  nâng tổng vốn
										chủ sở hữu lên gần 4.400 tỷ đồng.
										Chính thức thay đổi bộ nhận diện thương hiệu .
									</p>


								</div>
							</div>
						</div>
					</div>
					<?php
				}
				?>

			</div>
			<div class="max-w-[940px] mx-auto mt-[45px]">
				<div
					class="about_history-nav -mx-4 after:absolute after:border-b after:border-[#384352] after:border-opacity-10 after:h-[1px] after:bottom-2 after:w-4/5 after:left-1/2 after:-translate-x-1/2 ">
					<?php
					for ( $i = 0; $i < 7; $i++ )
					{
						?>
						<div
							class="lg:w-1/5 w-1/3 px-4 [&:not(.slick-current)]:text-black text-primary-400 [&:not(.slick-current)]:font-semibold font-bold [&:not(.slick-current)]:text-base text-lg pb-6 relative after:absolute after:w-3 after:h-3 after:rounded-full after:bg-[#384352] after:bg-opacity-20 [&:not(.slick-current)]:after:bottom-0 after:bottom-1 after:left-1/2 after:-translate-x-1/2 about_history-item cursor-pointer">
							<div class="text-center">
								2019 - 2023
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>

		</div>
	</section>
	<section class="about_leadership 2xl:mt-[100px] mt-14" id="about_leadership">
		<div class="container">
			<h2 class="heading-title 2xl:mb-12 mb-10">
				Đội ngũ lãnh đạo
			</h2>
			<div class="grid lg:grid-cols-4 lg:gap-[50px] gap-9">
				<div class="lg:col-span-1 col-span-full">
					<ul class="flex flex-col about_leadership-nav py-[15px] pr-[15px] rounded-[15px] space-y-3"
						data-tabs-toggle="#about_leadership-tab" role="tablist"
						data-tabs-active-classes="text-white bg-primary-400 rounded-tr-xl rounded-br-xl"
						data-tabs-inactive-classes="text-black">
						<li role="presentation">
							<button
								class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left text-black hover:text-white hover:bg-primary-400 hover:rounded-tr-xl hover:rounded-br-xl"
								id="directors-tab" data-tabs-target="#directors" type="button"
								role="tab" aria-controls="directors" aria-selected="false">Hội
								đồng quản trị
								<div class="hidden svg-container">
									<?php echo svg( 'arrow-right-tab' ) ?>
								</div>
							</button>
						</li>
						<li role="presentation">
							<button
								class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left text-black hover:text-white hover:bg-primary-400 hover:rounded-tr-xl hover:rounded-br-xl"
								id="control-tab" data-tabs-target="#control" type="button"
								role="tab" aria-controls="control" aria-selected="false">Ban
								kiểm soát
								<div class="hidden svg-container">
									<?php echo svg( 'arrow-right-tab' ) ?>
								</div>
							</button>
						</li>
						<li role="presentation">
							<button
								class="flex items-center justify-between w-full px-5 py-[15px] lg:text-lg font-semibold transition-all text-left text-black hover:text-white hover:bg-primary-400 hover:rounded-tr-xl hover:rounded-br-xl"
								id="executive-tab" data-tabs-target="#executive" type="button"
								role="tab" aria-controls="executive" aria-selected="false">Ban
								điều hành
								<div class="hidden svg-container">
									<?php echo svg( 'arrow-right-tab' ) ?>
								</div>
							</button>
						</li>

					</ul>
				</div>
				<div class="lg:col-span-3 col-span-full">
					<div id="about_leadership-tab">
						<div class="hidden" id="directors" role="tabpanel"
							aria-labelledby="directors-tab">
							<div class="flex flex-wrap justify-center gap-y-10 -mx-3">
								<?php
								for ( $i = 1; $i < 6; $i++ )
								{
									?>
									<div class="px-3 lg:w-1/3 md:w-1/2 w-full group cursor-pointer about_leadership-item"
										data-modal-target="leader-modal"
										data-modal-toggle="leader-modal">
										<div
											class="rounded-lg relative w-full pt-[100%] after:absolute after:w-full after:h-1/2 after:bottom-0 after:left-0 after:bg-gradient-to-t after:from-white after:to-transparent after:transition-all after:opacity-0 group-hover:after:opacity-100">
											<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/qt<?php echo $i ?>.png"
												alt=""
												class="w-full h-full absolute inset-0 object-cover leader_img">
										</div>
										<div class="mt-[15px] font-Helvetica about_leadership-title">
											<h4
												class="font-bold text-xl mb-2 text-black group-hover:text-primary-400 transition-all">
												Ông Ngô Văn Dũng
											</h4>
											<p class="font-medium text-black text-opacity-50">
												Chủ tịch Hội đồng Quản trị
											</p>
										</div>
										<div class="about_leadership-content hidden">
											<p class="mb-4"><strong>Trình độ chuyên môn:</strong>Thạc sĩ
												Tài chính ngân hàng</p>
											<p class="mb-4"><strong>Quá trình công tác</strong></p>
											<ul class="max-h-[260px] overflow-y-auto scroll-bar-custom">
												<li><strong>2019 - nay:</strong> Chủ tịch Hội đồng quản
													trị BSC</li>
												<li><strong>2015 - nay:</strong> Ủy viên Hội đồng quản
													trị BIDV</li>
												<li><strong>2007 - 2015:</strong> Giám đốc BIDV Chi
													nhánh Hà Nội</li>
												<li><strong>2004 - 2007:</strong> Giám đốc Ban Quản lý
													rủi ro BIDV</li>
												<li><strong>2002 - 2004:</strong> Giám đốc Ban Tín dụng
													BIDV</li>
												<li><strong>2002 - 2004:</strong> Giám đốc Ban Tín dụng
													BIDV</li>
												<li><strong>1998 - 2002:</strong> Giám đốc BIDV Chi
													nhánh Thăng Long</li>
												<li><strong>1991 - 1998:</strong> Công tác tại Ngân hàng
													Nhà nước Việt Nam</li>
												<li><strong>2019 - nay:</strong> Chủ tịch Hội đồng quản
													trị BSC</li>
												<li><strong>2015 - nay:</strong> Ủy viên Hội đồng quản
													trị BIDV</li>
												<li><strong>2007 - 2015:</strong> Giám đốc BIDV Chi
													nhánh Hà Nội</li>
												<li><strong>2004 - 2007:</strong> Giám đốc Ban Quản lý
													rủi ro BIDV</li>
												<li><strong>2002 - 2004:</strong> Giám đốc Ban Tín dụng
													BIDV</li>
												<li><strong>2002 - 2004:</strong> Giám đốc Ban Tín dụng
													BIDV</li>
												<li><strong>1998 - 2002:</strong> Giám đốc BIDV Chi
													nhánh Thăng Long</li>
												<li><strong>1991 - 1998:</strong> Công tác tại Ngân hàng
													Nhà nước Việt Nam</li>
											</ul>
										</div>
									</div>
									<?php
								}
								?>

							</div>
						</div>
						<div class="hidden" id="control" role="tabpanel"
							aria-labelledby="control-tab">
							<div class="flex flex-wrap justify-center gap-y-10 -mx-3">
								<?php
								for ( $i = 1; $i < 6; $i++ )
								{
									?>
									<div class="px-3 lg:w-1/3 md:w-1/2 w-full group cursor-pointer about_leadership-item"
										data-modal-target="leader-modal"
										data-modal-toggle="leader-modal">
										<div
											class="rounded-lg relative w-full pt-[100%] after:absolute after:w-full after:h-1/2 after:bottom-0 after:left-0 after:bg-gradient-to-t after:from-white after:to-transparent after:transition-all after:opacity-0 group-hover:after:opacity-100">
											<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/qt<?php echo $i ?>.png"
												alt=""
												class="w-full h-full absolute inset-0 object-cover leader_img">
										</div>
										<div class="mt-[15px] font-Helvetica about_leadership-title">
											<h4
												class="font-bold text-xl mb-2 text-black group-hover:text-primary-400 transition-all">
												Ông Ngô Văn Dũng
											</h4>
											<p class="font-medium text-black text-opacity-50">
												Chủ tịch Hội đồng Quản trị
											</p>
										</div>
										<div class="about_leadership-content hidden">
											<p class="mb-4"><strong>Trình độ chuyên môn:</strong>Thạc sĩ
												Tài chính ngân hàng</p>
											<p class="mb-4"><strong>Quá trình công tác</strong></p>
											<ul class="max-h-[260px] overflow-y-auto scroll-bar-custom">
												<li><strong>2019 - nay:</strong> Chủ tịch Hội đồng quản
													trị BSC</li>
												<li><strong>2015 - nay:</strong> Ủy viên Hội đồng quản
													trị BIDV</li>
												<li><strong>2007 - 2015:</strong> Giám đốc BIDV Chi
													nhánh Hà Nội</li>
												<li><strong>2004 - 2007:</strong> Giám đốc Ban Quản lý
													rủi ro BIDV</li>
												<li><strong>2002 - 2004:</strong> Giám đốc Ban Tín dụng
													BIDV</li>
												<li><strong>2002 - 2004:</strong> Giám đốc Ban Tín dụng
													BIDV</li>
												<li><strong>1998 - 2002:</strong> Giám đốc BIDV Chi
													nhánh Thăng Long</li>
												<li><strong>1991 - 1998:</strong> Công tác tại Ngân hàng
													Nhà nước Việt Nam</li>
												<li><strong>2019 - nay:</strong> Chủ tịch Hội đồng quản
													trị BSC</li>
												<li><strong>2015 - nay:</strong> Ủy viên Hội đồng quản
													trị BIDV</li>
												<li><strong>2007 - 2015:</strong> Giám đốc BIDV Chi
													nhánh Hà Nội</li>
												<li><strong>2004 - 2007:</strong> Giám đốc Ban Quản lý
													rủi ro BIDV</li>
												<li><strong>2002 - 2004:</strong> Giám đốc Ban Tín dụng
													BIDV</li>
												<li><strong>2002 - 2004:</strong> Giám đốc Ban Tín dụng
													BIDV</li>
												<li><strong>1998 - 2002:</strong> Giám đốc BIDV Chi
													nhánh Thăng Long</li>
												<li><strong>1991 - 1998:</strong> Công tác tại Ngân hàng
													Nhà nước Việt Nam</li>
											</ul>
										</div>
									</div>
									<?php
								}
								?>
							</div>
						</div>
						<div class="hidden" id="executive" role="tabpanel"
							aria-labelledby="executive-tab">
							<div class="flex flex-wrap justify-center gap-y-10 -mx-3">
								<?php
								for ( $i = 1; $i < 6; $i++ )
								{
									?>
									<div class="px-3 lg:w-1/3 md:w-1/2 w-full group cursor-pointer about_leadership-item"
										data-modal-target="leader-modal"
										data-modal-toggle="leader-modal">
										<div
											class="rounded-lg relative w-full pt-[100%] after:absolute after:w-full after:h-1/2 after:bottom-0 after:left-0 after:bg-gradient-to-t after:from-white after:to-transparent after:transition-all after:opacity-0 group-hover:after:opacity-100">
											<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/qt<?php echo $i ?>.png"
												alt=""
												class="w-full h-full absolute inset-0 object-cover leader_img">
										</div>
										<div class="mt-[15px] font-Helvetica about_leadership-title">
											<h4
												class="font-bold text-xl mb-2 text-black group-hover:text-primary-400 transition-all">
												Ông Ngô Văn Dũng
											</h4>
											<p class="font-medium text-black text-opacity-50">
												Chủ tịch Hội đồng Quản trị
											</p>
										</div>
										<div class="about_leadership-content hidden">
											<p class="mb-4"><strong>Trình độ chuyên môn:</strong>Thạc sĩ
												Tài chính ngân hàng</p>
											<p class="mb-4"><strong>Quá trình công tác</strong></p>
											<ul class="max-h-[260px] overflow-y-auto scroll-bar-custom">
												<li><strong>2019 - nay:</strong> Chủ tịch Hội đồng quản
													trị BSC</li>
												<li><strong>2015 - nay:</strong> Ủy viên Hội đồng quản
													trị BIDV</li>
												<li><strong>2007 - 2015:</strong> Giám đốc BIDV Chi
													nhánh Hà Nội</li>
												<li><strong>2004 - 2007:</strong> Giám đốc Ban Quản lý
													rủi ro BIDV</li>
												<li><strong>2002 - 2004:</strong> Giám đốc Ban Tín dụng
													BIDV</li>
												<li><strong>2002 - 2004:</strong> Giám đốc Ban Tín dụng
													BIDV</li>
												<li><strong>1998 - 2002:</strong> Giám đốc BIDV Chi
													nhánh Thăng Long</li>
												<li><strong>1991 - 1998:</strong> Công tác tại Ngân hàng
													Nhà nước Việt Nam</li>
												<li><strong>2019 - nay:</strong> Chủ tịch Hội đồng quản
													trị BSC</li>
												<li><strong>2015 - nay:</strong> Ủy viên Hội đồng quản
													trị BIDV</li>
												<li><strong>2007 - 2015:</strong> Giám đốc BIDV Chi
													nhánh Hà Nội</li>
												<li><strong>2004 - 2007:</strong> Giám đốc Ban Quản lý
													rủi ro BIDV</li>
												<li><strong>2002 - 2004:</strong> Giám đốc Ban Tín dụng
													BIDV</li>
												<li><strong>2002 - 2004:</strong> Giám đốc Ban Tín dụng
													BIDV</li>
												<li><strong>1998 - 2002:</strong> Giám đốc BIDV Chi
													nhánh Thăng Long</li>
												<li><strong>1991 - 1998:</strong> Công tác tại Ngân hàng
													Nhà nước Việt Nam</li>
											</ul>
										</div>
									</div>
									<?php
								}
								?>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

	</section>
	<div id="leader-modal" tabindex="-1" aria-hidden="true"
		class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full bg-black bg-opacity-20">
		<div class="relative p-4 w-full max-w-2xl lg:max-w-[1094px] max-h-full">
			<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

				<div
					class="grid md:grid-cols-5 lg:gap-12 gap-10 leader_popup-content lg:p-[50px] p-5">
					<div class="md:col-span-2">
						<div class="leader_img lg:max-w-[349px] w-full">
							<div class="relative w-full pt-[122%]">
								<img src="" alt=""
									class="absolute w-full h-full object-cover inset-0 rounded-lg">
							</div>
						</div>
					</div>
					<div class="md:col-span-3 relative">
						<h4 class="leader_name 2xl:text-2xl text-xl font-bold mb-1">

						</h4>
						<p class="leader_role font-medium text-black text-opacity-50">

						</p>
						<div class="main__content mt-6">

						</div>
						<button type="button"
							class="bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white absolute top-0 -right-2"
							data-modal-hide="leader-modal">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
								viewBox="0 0 24 24" fill="none">
								<path d="M18 18L6 6" stroke="#4A5568" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" />
								<path d="M6 18L18 6" stroke="#4A5568" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							<span class="sr-only">Close modal</span>
						</button>
					</div>
				</div>

			</div>
		</div>
	</div>

	<section class="lg:py-[100px] py-16 bg-gradient-blue-to-top" id="about_chart">
		<div class="container">
			<h2 class="heading-title 2xl:mb-10 mb-8 text-center">
				Sơ đồ tổ chức
			</h2>
			<picture>
				<source media="(max-width:1024px)"
					srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/images/chart_organization.svg">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/chart_organization.svg"
					alt="">
			</picture>
		</div>
	</section>

	<section
		class="strategic__partner lg:py-[105px] py-16 relative after:absolute after:inset-0 after:w-full after:h-full after:pointer-events-none after:bg-gradient-blue-to-bottom after:opacity-40" id="strategic__partner">
		<div class="container">
			<div class="grid lg:grid-cols-2 xl:gap-[110px] gap-10">
				<div class="col-span-1">
					<h2 class="heading-title text-primary-700">
						ĐỐI TÁC CHIẾN LƯỢC
					</h2>
					<div class="mt-5">
						<strong>Công ty TNHH Chứng khoán Hana,</strong> tiền thân là Công ty TNHH
						Đầu tư tài chính
						Hana (HFI) là thành viên của Tập đoàn Tài chính Hana - một trong ba tập đoàn
						tài chính lớn nhất tại Hàn Quốc với mạng lưới toàn cầu rộng lớn 208 chi
						nhánh trên 25 quốc gia trên thế giới. Hana Securities đã dẫn đầu thị trường
						vốn ở Hàn Quốc trong bốn thập kỷ vừa qua bằng cách thành lập quỹ đầu tiên
						tại Hàn Quốc, là thương hiệu mạnh nhất trong ngành chứng khoán đầu tư trong
						sáu năm liên tiếp và tạo ra một văn hóa "Ngân hàng đầu tư" hoàn toàn mới.
					</div>

				</div>
				<div class="col-span-1">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/strategic__partner.png"
						alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="2xl:my-[100px] my-16 about_culture" id="about_culture">
		<div class="container">
			<h2 class="heading-title text-center mb-6">
				VĂN HÓA BSC
			</h2>
			<div
				class="relative max-w-[946px] mx-auto lg:mb-[50px] mb-10 2xl:text-2xl text-xl font-bold text-primary-400 text-center">
				<div class="absolute lg:-left-10 lg:-top-5 -z-10 top-0 left-0">
					<?php echo svg( 'quote' ) ?>
				</div>
				Văn hóa doanh nghiệp là tài sản vô hình quý giá, là hệ GEN đặc biệt, riêng có của
				mỗi doanh nghiệp. Tại BSC, văn hóa doanh nghiệp được xây dựng hài hòa giữa giá trị
				truyền thống và hiện đại gắn kết cùng mục tiêu phát triển chung của doanh nghiệp và
				cộng đồng.
			</div>


			<div class="swiper-container about_culture-list">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div
							class="about_culture-item rounded-[15px] overflow-hidden relative after:absolute after:w-full after:h-full after:inset-0 after:bg-[#000] after:bg-opacity-35">
							<div class="relative w-full pt-[58%]">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/culture1.png"
									alt="" class="absolute w-full h-full inset-0 object-cover">
							</div>
							<h4
								class="text-center p-4 text-primary-400 font-bold bg-white hidden title 2xl:text-2xl text-lg line-clamp-1">
								Lễ ra mắt câu lạc bộ chạy bộ BSC HCM RUNNER CLUB
							</h4>
						</div>
					</div>
					<div class="swiper-slide">
						<div
							class="about_culture-item rounded-[15px] overflow-hidden relative after:absolute after:w-full after:h-full after:inset-0 after:bg-[#000] after:bg-opacity-35">
							<div class="relative w-full pt-[58%]">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/culture2.png"
									alt="" class="absolute w-full h-full inset-0 object-cover">
							</div>
							<h4
								class="text-center p-4 text-primary-400 font-bold bg-white hidden title 2xl:text-2xl text-lg line-clamp-1">
								Lễ ra mắt câu lạc bộ chạy bộ BSC HCM RUNNER CLUB
							</h4>
						</div>
					</div>
					<div class="swiper-slide">
						<div
							class="about_culture-item rounded-[15px] overflow-hidden relative after:absolute after:w-full after:h-full after:inset-0 after:bg-[#000] after:bg-opacity-35">
							<div class="relative w-full pt-[58%]">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/culture3.png"
									alt="" class="absolute w-full h-full inset-0 object-cover">
							</div>
							<h4
								class="text-center p-4 text-primary-400 font-bold bg-white hidden title 2xl:text-2xl text-lg line-clamp-1">
								Lễ ra mắt câu lạc bộ chạy bộ BSC HCM RUNNER CLUB
							</h4>
						</div>
					</div>
					<div class="swiper-slide">
						<div
							class="about_culture-item rounded-[15px] overflow-hidden relative after:absolute after:w-full after:h-full after:inset-0 after:bg-[#000] after:bg-opacity-35">
							<div class="relative w-full pt-[58%]">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/culture1.png"
									alt="" class="absolute w-full h-full inset-0 object-cover">
							</div>
							<h4
								class="text-center p-4 text-primary-400 font-bold bg-white hidden title 2xl:text-2xl text-lg line-clamp-1">
								Lễ ra mắt câu lạc bộ chạy bộ BSC HCM RUNNER CLUB
							</h4>
						</div>
					</div>

				</div>


				<div class="swiper-button-prev bg-none left-0">
					<?php echo svg( 'prev' ) ?>
				</div>
				<div class="swiper-button-next bg-none right-0">
					<?php echo svg( 'next' ) ?>
				</div>
			</div>
		</div>
	</section>

	<section class="about_award py-[50px] bg-primary-100" id="about_award">
		<div class="container">
			<h2 class="heading-title text-center mb-10">
				GIẢI THƯỞNG NỔI BẬT
			</h2>
			<div class="grid md:grid-cols-3 grid-cols-1 gap-10 font-Helvetica 2xl:mx-16">
				<div class="rounded-2xl bg-gradient-blue-50 lg:p-10 p-5 h-full group">
					<div class="mb-10">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/award1.png"
							alt=""
							class="h-full object-contain w-auto m-auto max-h-[140px] transition-all duration-500 group-hover:scale-105">
					</div>
					<div class="line-clamp-6">
						BSC được vinh danh trong nhiều hạng mục Giải thưởng của Tạp chí Global
						banking and Finance: Môi giới chứng khoán, Dịch vụ ngân hàng đầu tư, … Đây
						là Tạp chí uy tín hàng đầu trong ngành tài chính trên thế giớI.
					</div>
				</div>
				<div class="rounded-2xl bg-gradient-blue-50 lg:p-10 p-5 h-full group">
					<div class="mb-10">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/award2.png"
							alt=""
							class="h-full object-contain w-auto m-auto max-h-[140px] transition-all duration-500 group-hover:scale-105">
					</div>
					<div class="line-clamp-6">
						BSC vinh dự đón nhận Huân chương Lao động Hạng 3 do Nhà nước trao tặng vào
						năm 2011.
					</div>
				</div>
				<div class="rounded-2xl bg-gradient-blue-50 lg:p-10 p-5 h-full group">
					<div class="mb-10">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/award3.png"
							alt=""
							class="h-full object-contain w-auto m-auto max-h-[140px] transition-all duration-500 group-hover:scale-105">
					</div>
					<div class="line-clamp-6">
						BSC vinh dự nhận được giải thưởng thuộc các hạng mục Ngân hàng đầu tư, Thu
						xếp vốn, … từ tạp chí Alpha South East Asia. Đây là tạp chí tài chính uy tín
						trong khu vực Châu Á.
					</div>
				</div>
			</div>
		</div>

	</section>

	<section class="about_award-other my-16" id="about_award-other">
		<div class="container">
			<h3 class="2xl:text-2xl text-xl font-bold mb-[30px] text-center">
				Giải thưởng khác
			</h3>
			<div class="max-w-[940px] mx-auto mt-[45px]">
				<div
					class="about_award-nav -mx-4 after:absolute after:border-b after:border-[#384352] after:border-opacity-10 after:h-[1px] after:bottom-2 after:w-4/5 after:left-1/2 after:-translate-x-1/2 ">
					<?php
					for ( $i = 0; $i < 7; $i++ )
					{
						?>
						<div
							class="lg:w-1/5 w-1/3 px-4 [&:not(.slick-current)]:text-black text-primary-400 [&:not(.slick-current)]:font-semibold font-bold [&:not(.slick-current)]:text-base text-lg pb-6 relative after:absolute after:w-3 after:h-3 after:rounded-full after:bg-[#384352] after:bg-opacity-20 [&:not(.slick-current)]:after:bottom-0 after:bottom-1 after:left-1/2 after:-translate-x-1/2 about_award-item cursor-pointer">
							<div class="text-center">
								2019 - 2023
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
			<div class="about_award-content mt-10">
				<?php
				for ( $i = 0; $i < 7; $i++ )
				{
					?>
					<div class="w-full font-Helvetica">
						<div
							class="about_award-item [&:not(:last-child)]:border-b [&:not(:last-child)]:border-[#384352] [&:not(:last-child)]:border-opacity-20 [&:not(:last-child)]:pb-[30px] [&:not(:last-child)]:mb-[30px] flex lg:gap-[50px] gap-5 items-start ">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aw.png"
								alt="" class="max-w-10">
							<div class="the_content mt-2">
								Giải thưởng “Công ty quản lý đầu tư tốt nhất Việt Nam năm 2021” do Tạp
								chí
								Global Banking and Finance Review trao tặng.
							</div>
						</div>
						<div
							class="about_award-item [&:not(:last-child)]:border-b [&:not(:last-child)]:border-[#384352] [&:not(:last-child)]:border-opacity-20 [&:not(:last-child)]:pb-[30px] [&:not(:last-child)]:mb-[30px] flex lg:gap-[50px] gap-5 items-start">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aw.png"
								alt="" class="max-w-10">
							<div class="the_content mt-2">
								<p><strong>06 giải thưởng do Tạp chí Asiamoney trao tặng:</strong></p>
								<ul>
									<li>Top 1 Chuyên gia phân tích ngành xây dựng và kỹ thuật</li>
									<li>Top 2 Công ty chứng khoán có dịch vụ môi giới nội địa tốt nhất
									</li>
									<li>Top 2 Công ty chứng khoán có dịch vụ phân tích nghiên cứu tốt
										nhất
									</li>
									<li>Top 2 Công ty chứng khoán có dịch vụ bán hàng tốt nhất</li>
									<li>Top 2 Công ty chứng khoán có hoạt động giao dịch tốt nhất</li>
									<li>Top 3 Công ty chứng khoán tiếp cận doanh nghiệp tốt nhất</li>
								</ul>
							</div>
						</div>
						<div
							class="about_award-item [&:not(:last-child)]:border-b [&:not(:last-child)]:border-[#384352] [&:not(:last-child)]:border-opacity-20 [&:not(:last-child)]:pb-[30px] [&:not(:last-child)]:mb-[30px] flex lg:gap-[50px] gap-5 items-start">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/aw.png"
								alt="" class="max-w-10">
							<div class="the_content mt-2">
								Vinh danh “TOP 100 Thương hiệu mạnh Việt Nam giai đoạn 2020 – 2021” do
								báo VnEconomy, Kinh tế Việt Nam và Vietnam Economic Times tổ chức.
							</div>
						</div>

					</div>
					<?php
				}
				?>

			</div>

		</div>
	</section>
</main>
<?php
get_footer();