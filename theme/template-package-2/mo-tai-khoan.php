<?php

/**
Template Name: [Package-2] Mở tài khoản
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<section class="bg-gradient-blue-300">
		<div class="xl:pt-[100px] pt-20 pb-[50px]">
			<div class="container">
				<div class="lg:grid lg:grid-cols-2 gap-10">
					<div class="col-span-1">
						<h2 class="heading-title mb-10">
							MỞ TÀI KHOẢN TẠI BSC
						</h2>
						<ul
							class="list-icon space-y-[15px] font-Helvetica mb-8 text-primary-300 font-bold">
							<li class="list-icon-item">
								Mở tài khoản nhanh chóng 
							</li>
							<li class="list-icon-item">
								Thủ tục nhanh gọn 
							</li>
							<li class="list-icon-item">
								Tận hưởng đặc quyền hấp dẫn 
							</li>
							<li class="list-icon-item">
								An toàn, bảo mật 
							</li>
						</ul>
                        <div class="flex items-center gap-x-4">
                            <a href=""
                                class="bg-green text-white hover:shadow-[0px_4px_16px_0px_rgba(0,158,135,0.4)] hover:bg-[#20b39d] inline-block 2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500 xl:min-w-[208px] text-center">
                                <span class="block relative z-10">
                                    Giao dịch ngay
                                </span>
                            </a>
                            <a href=""
                                class="bg-yellow-100 text-black hover:shadow-[0px_4px_16px_0px_rgba(255,184,28,0.5)] hover:bg-[#ffc547] inline-block 2xl:px-6 px-4 2xl:py-3 py-2 rounded-md font-semibold relative transition-all duration-500 xl:min-w-[208px] text-center">
                                <span class="block relative z-10">
                                    Mở tài khoản
                                </span>
                            </a>

                        </div>
					</div>
					<div class="col-span-1">

					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();