import { initFlowbite } from 'flowbite';
import ApexCharts from 'apexcharts';
import WOW from 'wowjs';
(function ($) {
	window.onload = function () {
		$(document).ready(function () {
			menuMobile();
			backToTop();
			handleMegamenu();
			setHeightBanner();
			handleSlider();
			customTab();
			var $activeButton = $('[data-tab-download].active');
			if ($activeButton.length) {
				moveLine($activeButton);
			}
			new WOW.WOW().init();
			aboutUsSlider();
			aboutDynamicPopup();
			toggleContent();
			handlePhoneCf7();
			dynamicPopup();
			stickyHeader();
			hoverSvg();
			livechat();
			marqueeSlider();
		});
	};

	function menuMobile() {
		const elements = ['.bar__mb', '.header__menu'];
		if (elements.some((el) => $(el).length)) {
			$('.bar__mb').click(function () {
				$('.header__menu').toggleClass('active');
				$('.overlay').toggleClass('active');
				$('html').toggleClass('overflow-hidden');
			});
			$('.overlay').click(function () {
				$('.header__menu').removeClass('active');
				$('.overlay').removeClass('active');
				$('html').removeClass('overflow-hidden');
			});
		}
		$('.header__menu ul li.menu-item-has-children>ul').before(
			`<span class="li-plus"></span>`
		);

		if ($('.li-plus').length) {
			$('.li-plus').click(function (e) {
				$(this).toggleClass('clicked');
				$(this).next('.sub-menu').slideToggle(200);
				$(this)
					.parent()
					.siblings()
					.find('.li-plus')
					.removeClass('clicked')
					.siblings('.sub-menu')
					.slideUp();
			});
		}
	}

	function backToTop() {
		var $backToTop = $('.back-to-top');

		$backToTop.on('click', function (e) {
			$('html, body').animate({ scrollTop: 0 }, 50);
		});
	}

	function handleMegamenu() {
		if ($(window).width() > 1024) {
			$('.main_menu > ul > li:not(.menu-home)').each(function (index) {
				var menuId = $(this).attr('id');
				$(this).attr('data-menu', menuId);
				$('.main_menu-navbar > li.' + menuId).attr('data-menu', menuId);
			});

			$('.main_menu-navbar > li.menu-item-has-children').each(
				function () {
					var dataMenuValue = $(this).attr('data-menu');
					$(this)
						.children('.sub-menu')
						.attr('data-submenu', dataMenuValue);
				}
			);

			$('.main_menu-navbar > li').wrapAll(
				"<div class='submenu-wrapper' />"
			);
			$('.submenu-wrapper').after("<div class='submenu-content'></div>");

			var timeout;
			var isMouseInNavbar = false;

			$('.main_menu > ul > li:not(.menu-home)').mouseenter(function () {
				var dataMenuValue = $(this).attr('data-menu');

				$('.main_menu > ul > li:not(.menu-home)').removeClass('active');

				$('.main_menu-navbar').addClass('active');

				$(
					'.submenu-wrapper > li[data-menu="' + dataMenuValue + '"]'
				).trigger('mouseenter');

				$(this).addClass('active');

				clearTimeout(timeout);
			});

			$('.main_menu > ul > li:not(.menu-home)').mouseleave(function () {
				$('.main_menu > ul > li:not(.menu-home)').removeClass('active');
				if (isMouseInNavbar) {
					timeout = setTimeout(() => {
						$('.main_menu-navbar').removeClass('active');

						$('.submenu-wrapper > li').removeClass('active');
						$('.submenu-content').html('');
						$('.submenu-content').css('max-height', '0');
					}, 200);
				}
			});

			$('.main_menu-navbar').mouseenter(function () {
				isMouseInNavbar = true;
				clearTimeout(timeout);
			});

			$('.main_menu-navbar').mouseleave(function () {
				isMouseInNavbar = false;
				timeout = setTimeout(() => {
					$('.main_menu-navbar').removeClass('active');
					$('.main_menu > ul > li:not(.menu-home)').removeClass(
						'active'
					);
					$('.submenu-wrapper > li').removeClass('active');
					// $('.submenu-content').html('');
					$('.submenu-content').css('max-height', '0');
				}, 200);
			});

			$('.submenu-wrapper > li').mouseenter(function () {
				var dataMenuValue = $(this).attr('data-menu');
				var submenuToMove = $(this).children(
					'.sub-menu[data-submenu="' + dataMenuValue + '"]'
				);

				$('.submenu-wrapper > li').removeClass('active');
				$(this).addClass('active');

				if (submenuToMove.length) {
					$('.submenu-content').html(submenuToMove.html());

					var newHeight = $('.submenu-content').prop('scrollHeight');
					$('.submenu-content').css({
						'max-height': newHeight + 'px',
						transition: 'max-height 0.5s ease',
					});
				} else {
					$('.submenu-content').html('');
					$('.submenu-content').css('max-height', '0');
				}

				clearTimeout(timeout);
			});
		}
	}

	function hoverSvg() {
		$('svg path').css({
			transition: 'fill 0.3s ease, stroke 0.3s ease',
		});
		$('.value-item').hover(
			function () {
				// Khi hover vào item
				$(this)
					.find('svg path')
					.each(function () {
						var fillColor = $(this).attr('fill');
						var strokeColor = $(this).attr('stroke');

						// Kiểm tra fill có giá trị là "#235BA8"
						if (fillColor === '#235BA8') {
							$(this).attr('fill', 'white');
						}

						// Kiểm tra stroke có giá trị là "#235BA8"
						if (strokeColor === '#235BA8') {
							$(this).attr('stroke', 'white');
						}
					});
			},
			function () {
				// Khi hover ra khỏi item (nếu muốn revert lại màu, nếu không có thể bỏ phần này)
				$(this)
					.find('svg path')
					.each(function () {
						var fillColor = $(this).attr('fill');
						var strokeColor = $(this).attr('stroke');

						// Nếu muốn revert lại màu gốc khi hover ra ngoài
						if (fillColor === 'white') {
							$(this).attr('fill', '#235BA8');
						}

						if (strokeColor === 'white') {
							$(this).attr('stroke', '#235BA8');
						}
					});
			}
		);
	}

	function handleSlider() {
		$('.block_slider').each(function () {
			var blockSliderCount = $(this).find('.block_slider-item').length;
			var minItemsToShow = 1;
			if ($(this).hasClass('block_slider-show-2')) {
				minItemsToShow = 2;
			} else if ($(this).hasClass('block_slider-show-3')) {
				minItemsToShow = 3;
			} else if ($(this).hasClass('block_slider-show-4')) {
				minItemsToShow = 4;
			}
			if (blockSliderCount > minItemsToShow) {
				var hasNoDotsClass = $(this).hasClass('no-dots');
				var hasNavClass = $(this).hasClass('has-nav');
				$(this).flickity({
					pageDots: !hasNoDotsClass,
					prevNextButtons: hasNavClass,
					contain: true,
					cellAlign: 'left',
					imagesLoaded: true,
					draggable: true,
					wrapAround: true,
					autoPlay: 3000,
				});
			}
		});

		$('.data-slick').each(function () {
			var $slider = $(this); // Lưu tham chiếu đến slider hiện tại

			$slider.slick({
				customPaging: function (slider, i) {
					return '<span class="dot"></span>';
				},
			});

			if ($slider.find('.custom_arrow_slick').length) {
				var $prevBtn = $slider.find('.prev-btn'); // Nút prev cho slider này
				var $nextBtn = $slider.find('.next-btn'); // Nút next cho slider này
				var $slickList = $slider.find('.slick-list'); // Slider hiện tại

				$prevBtn.click(function () {
					$slider.slick('slickPrev'); // Chỉ điều khiển slider hiện tại
				});

				$nextBtn.click(function () {
					$slider.slick('slickNext'); // Chỉ điều khiển slider hiện tại
				});

				$prevBtn.addClass('slick-disabled'); // Disable nút prev mặc định

				$slider.on('afterChange', function () {
					// Kiểm tra trạng thái của nút prev và next sau khi thay đổi slide
					if (
						$slider.find('.slick-prev').hasClass('slick-disabled')
					) {
						$prevBtn.addClass('slick-disabled');
					} else {
						$prevBtn.removeClass('slick-disabled');
					}

					if (
						$slider.find('.slick-next').hasClass('slick-disabled')
					) {
						$nextBtn.addClass('slick-disabled');
					} else {
						$nextBtn.removeClass('slick-disabled');
					}
				});
			}
		});

		$('.community_content-bg').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.community_content-list',
		});

		$('.community_content-list').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			arrows: false,
			fade: true,
			asNavFor: '.community_content-bg',

			customPaging: function (slider, i) {
				return '<span class="dot"></span>';
			},
		});

		$('.community_nav-item[data-index="1"]').addClass('active');
		$('.community_nav-item').on('click mouseenter', function () {
			var index = $(this).data('index');

			$('.community_content-bg').slick('slickGoTo', index);
			$('.community_content-list').slick('slickGoTo', index);

			$('.community_nav-item').removeClass('active');
			$(this).addClass('active');
		});

		$('.community_content-list').on(
			'afterChange',
			function (event, slick, currentSlide) {
				$('.community_nav-item').removeClass('active');
				$(
					'.community_nav-item[data-index="' + currentSlide + '"]'
				).addClass('active');
			}
		);
	}

	function setHeightBanner() {
		function updateBannerHeight() {
			var headerHeight = $('header').outerHeight();
			var bannerHeight = $(window).height() - headerHeight;
			$('.home__banner,.home__banner .block_slider-item').css(
				'height',
				bannerHeight + 'px'
			);
		}
		updateBannerHeight();
		$(window).resize(updateBannerHeight);
	}

	function customTab() {
		$('[data-tab-download]').click(function () {
			if ($(this).hasClass('active')) {
				return;
			}

			$('[data-tab-download]').removeClass('active');

			$(this).addClass('active');

			var tabDownloadValue = $(this).attr('data-tab-download');

			$('[data-download]').removeClass('active');

			$('[data-download="' + tabDownloadValue + '"]').addClass('active');

			moveLine($(this));
		});
		$('.customtab-nav li button').on('click', function () {
			var target = $(this).attr('data-tabs');
			$('.customtab-nav li button').removeClass('active');
			$(this).addClass('active');
			$(target).fadeIn('slow').siblings('.tab-content').hide();
			moveLine($(this));
			return false;
		});
		$('.bank-nav-tab button').on('click', function () {
			var targetTab = $(this).data('tabs');
			$('html, body').animate(
				{
					scrollTop: $(targetTab).offset().top - 150,
				},
				50
			);
		});
	}

	function moveLine($button) {
		var buttonPosition = $button.position().left;
		var buttonWidth = $button.outerWidth();

		$('.line').css({
			left: buttonPosition + 'px',
			width: buttonWidth + 'px',
		});
	}

	window.handleChart = function (seriesData, yAxisOptions) {
		var chartElement = document.querySelector('#chart');
		if (chartElement) {
			// Chuyển đổi xAxisCategories thành timestamps
			const timestamps = seriesData[0].data.map((point) => point.x);

			// Xác định khoảng thời gian
			let tickInterval;
			let dateFormatter;

			if (timestamps.length <= 7) {
				// < 7 ngày: Hiển thị mỗi ngày một mốc
				tickInterval = 1;
				dateFormatter = 'dd MMM yyyy';
			} else if (timestamps.length > 7 && timestamps.length <= 30) {
				// > 7 ngày và < 30 ngày: Hiển thị mỗi 5 ngày một mốc
				tickInterval = 5;
				dateFormatter = 'dd MMM yyyy';
			} else if (timestamps.length > 30 && timestamps.length <= 365) {
				// > 30 ngày và < 1 năm: Hiển thị mỗi tháng một mốc
				tickInterval = 30;
				dateFormatter = 'MMM yyyy';
			} else {
				// > 1 năm: Hiển thị mỗi 3 tháng một mốc
				tickInterval = 90;
				dateFormatter = 'MMM yyyy';
			}

			var options = {
				chart: {
					type: 'line',
					height: 475,
					toolbar: {
						show: true,
						tools: {
							zoom: false, // Tắt công cụ zoom
							zoomin: false, // Tắt nút zoom in
							zoomout: false, // Tắt nút zoom out
							pan: false, // Tắt công cụ pan
							reset: false, // Tắt nút reset zoom
						},
						autoSelected: 'zoom',
					},
					zoom: {
						enabled: false, // Tắt tính năng zoom hoàn toàn
					},
				},
				series: seriesData,
				xaxis: {
					type: 'datetime',
					categories: timestamps,
					labels: {
						formatter: function (val, index) {
							// Hiển thị nhãn tại các mốc theo quy tắc tickInterval
							if (index % tickInterval === 0) {
								return new Date(val).toLocaleDateString(
									'en-GB',
									{
										year: 'numeric',
										month: 'short',
										day: dateFormatter.includes('dd')
											? 'numeric'
											: undefined,
									}
								);
							} else {
								return ''; // Không hiển thị nhãn nếu không thỏa mãn khoảng cách
							}
						},
						rotate: -45,
					},
				},
				yaxis: yAxisOptions,
				stroke: {
					curve: 'smooth',
					width: 2,
				},
				markers: {
					size: 0, // Ẩn các dấu tròn
				},
				colors: ['#009E87', '#235BA8', '#FFB81C'],
				legend: {
					show: true,
					position: 'bottom',
					horizontalAlign: 'left',
					offsetY: 10,
				},
				tooltip: {
					x: {
						formatter: function (val) {
							return new Date(val).toLocaleDateString('en-GB', {
								year: 'numeric',
								month: 'short',
								day: 'numeric',
							});
						},
					},
					y: {
						formatter: function (
							value,
							{ seriesIndex, dataPointIndex, w }
						) {
							const pointData =
								w.config.series[seriesIndex].data[
									dataPointIndex
								];
							const percentDiff =
								pointData && pointData.percentagedifference;

							// Kiểm tra cả `value` và `percentDiff` để tránh lỗi `toFixed`
							const formattedValue =
								value != null ? value.toFixed(2) : 'N/A';
							const percentText =
								percentDiff != null
									? ` (${percentDiff > 0 ? '+' : ''}${percentDiff.toFixed(2)}%)`
									: ''; // Nếu không có giá trị, hiển thị chuỗi trống

							return `${formattedValue}${percentText}`;
						},
					},
				},
			};

			var chart = new ApexCharts(chartElement, options);
			chart.render();
		}
	};

	function aboutUsSlider() {
		$('.about_history-content').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			autoplay: false,
			fade: true,
			asNavFor: '.about_history-nav',
			infinite: false,
			initialSlide: 0,
		});

		$('.about_history-nav').slick({
			slidesToShow: 5,
			slidesToScroll: 1,
			autoplay: false,
			asNavFor: '.about_history-content',
			dots: false,
			prevArrow:
				'<button class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg></button>',
			nextArrow:
				'<button class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z"/></svg></button>',
			focusOnSelect: true,
			infinite: false,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 5,
					},
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 3,
					},
				},
				{
					breakpoint: 0,
					settings: {
						slidesToShow: 2,
					},
				},
			],
		});

		var totalItems = $('.about_history-nav').slick('getSlick').slideCount;
		$('.about_history-nav').slick('slickGoTo', totalItems - 1);
		if (totalItems <= 5) {
			$('.about_history-nav .slick-track').addClass('no-transform');
		}
		$('.about_award-content').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
			arrows: false,
			fade: true,
			asNavFor: '.about_award-nav',
			adaptiveHeight: true,
			infinite: true,
		});

		$('.about_award-nav').slick({
			slidesToShow: 5,
			slidesToScroll: 1,
			autoplay: false,
			infinite: false,
			asNavFor: '.about_award-content',
			dots: false,
			prevArrow:
				'<button class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg></button>',
			nextArrow:
				'<button class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z"/></svg></button>',
			focusOnSelect: true,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 5,
					},
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 3,
					},
				},
				{
					breakpoint: 0,
					settings: {
						slidesToShow: 2,
					},
				},
			],
		});
		var totalItemsAward =
			$('.about_award-nav').slick('getSlick').slideCount;
		$('.about_award-nav').slick('slickGoTo', totalItemsAward - 1);

		if (totalItemsAward <= 5) {
			$('.about_award-nav .slick-track').addClass('no-transform');
		}

		var mySwiper = new Swiper('.about_culture-list', {
			loop: true,
			slidesPerView: 2,
			centeredSlides: true,
			effect: 'coverflow',
			coverflow: {
				rotate: 0,
				stretch: 0,
				depth: 300,
				modifier: 2,
				slideShadows: true,
			},
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
		});
		document
			.querySelectorAll('.about_culture-list .swiper-slide')
			.forEach((slide) => {
				slide.addEventListener('click', function () {
					if (!this.classList.contains('swiper-slide-active')) {
						if (this.classList.contains('swiper-slide-next')) {
							mySwiper.slideNext();
						} else if (
							this.classList.contains('swiper-slide-prev')
						) {
							mySwiper.slidePrev();
						}
					}
				});
			});
	}

	function aboutDynamicPopup() {
		$('.about_leadership-item').on('click', function () {
			var imgSrc = $(this).find('.leader_img').attr('src');
			$('.leader_popup-content .leader_img img').attr('src', imgSrc);

			var leaderName = $(this).find('.about_leadership-title h4').text();
			$('.leader_popup-content .leader_name').text(leaderName);

			var leaderRole = $(this).find('.about_leadership-title p').text();
			$('.leader_popup-content .leader_role').text(leaderRole);

			var contentHtml = $(this).find('.about_leadership-content').html();
			$('.leader_popup-content .main__content').html(contentHtml);
		});
	}

	function handleScrollNav() {
		if ($('.scroll_nav').length) {
			$('.scroll_nav > li > a').click(function (e) {
				// Nếu thẻ cha không có class 'has-child', mới ngăn chặn hành vi mặc định
				if (!$(this).parents().hasClass('has-child')) {
					e.preventDefault();
				}

				$('.scroll_nav > li > a').removeClass('active');
				$(this).addClass('active');

				var target = $(this).attr('href');

				// Kiểm tra xem href có hợp lệ và phần tử target có tồn tại
				if (target && target !== '#' && $(target).length) {
					$('html, body').animate(
						{
							scrollTop: $(target).offset().top - 100,
						},
						50
					);
				}
			});

			function onScroll() {
				var scrollPosition = $(window).scrollTop();
				var windowHeight = $(window).height();
				var documentHeight = $(document).height();
				var scrollBottom = scrollPosition + windowHeight;

				var lastAnchor = $('.scroll_nav > li > a').last(); // Lấy phần tử cuối cùng

				$('.scroll_nav > li > a').each(function () {
					var target = $(this).attr('href');

					// Kiểm tra kỹ hơn trước khi thực hiện các phép tính
					if (target && target !== '#' && $(target).length) {
						var sectionOffset = $(target).offset().top - 120;
						var sectionHeight = $(target).outerHeight();

						if (
							scrollPosition >= sectionOffset &&
							scrollPosition < sectionOffset + sectionHeight
						) {
							// Loại bỏ class active cho tất cả các thẻ <a> và thẻ cha có class has-child
							$('.scroll_nav > li > a').removeClass('active');
							$('.scroll_nav .has-child').removeClass('active');

							// Thêm class active cho thẻ <a> hiện tại
							$(this).addClass('active');

							// Nếu thẻ cha có class has-child, thêm class active cho cả thẻ cha
							if ($(this).parent().hasClass('has-child')) {
								$(this).parent().addClass('active');
							}
						}
					}
				});

				// Xử lý riêng cho phần tử cuối cùng nếu đã cuộn tới gần cuối trang
				var lastTarget = $(lastAnchor.attr('href'));
				if (scrollBottom >= documentHeight - 10) {
					$('.scroll_nav > li > a').removeClass('active');
					lastAnchor.addClass('active');

					if (lastAnchor.parent().hasClass('has-child')) {
						lastAnchor.parent().addClass('active');
					}
				}
			}

			var debounceTimeout;
			$(window).scroll(function () {
				if (debounceTimeout) {
					clearTimeout(debounceTimeout);
				}
				debounceTimeout = setTimeout(onScroll, 10);
			});

			onScroll();
		}
	}

	handleScrollNav();

	function toggleContent() {
		$('.sidebar-report li').each(function () {
			if ($(this).find('ul.sub-menu').length) {
				$(this)
					.addClass('has-child group')
					.find('ul.sub-menu')
					.before(
						'<span class="li-plus cursor-pointer"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.43057 8.51192C4.70014 8.19743 5.17361 8.161 5.48811 8.43057L12 14.0122L18.5119 8.43057C18.8264 8.16101 19.2999 8.19743 19.5695 8.51192C19.839 8.82642 19.8026 9.29989 19.4881 9.56946L12.4881 15.5695C12.2072 15.8102 11.7928 15.8102 11.5119 15.5695L4.51192 9.56946C4.19743 9.29989 4.161 8.82641 4.43057 8.51192Z" fill="currentColor"/></svg></span>'
					);
			}
		});

		$('.sidebar-report').on('click', '.li-plus', function () {
			$(this).toggleClass('active');
			$(this).next('ul.sub-menu').slideToggle(200);
		});
		$('.utilities_button').addClass('show');
		$('.utilities_button').click(function (e) {
			e.stopPropagation();
			$('.utilities_button,.utilities_button-list').addClass('active');
			$('.open-utilities-box').hide(350);
		});

		$('.collapse-button').click(function () {
			$('.utilities_button,.utilities_button-list').removeClass('active');
		});

		$(document).click(function (e) {
			if (
				!$(e.target).closest(
					'.utilities_button, .utilities_button-list'
				).length
			) {
				$('.utilities_button,.utilities_button-list').removeClass(
					'active'
				);
			}
		});

		$('.open-utilities').click(function () {
			$(this)
				.addClass('active')
				.siblings('.open-utilities-box')
				.toggle(350);
			$('.open-ytb').addClass('active');
		});
		$('.hidden-utilities').click(function (e) {
			e.stopPropagation();
			$('.open-utilities-box').hide(350);
			$('.open-utilities').removeClass('active');
		});
		$(document).click(function (e) {
			if (
				!$(e.target).closest('.open-utilities, .open-utilities-box')
					.length
			) {
				$('.open-utilities-box').hide(350);
				$('.open-utilities,.open-ytb').removeClass('active');
			}
		});
		$('.award__item').click(function () {
			$('.award__item, .main-img').removeClass('active');
			$('.hide-open').removeClass('hidden');
			$('.award__item-content').hide();

			$(this).addClass('active').find('.hide-open').addClass('hidden');
			$(this).find('.main-img').addClass('active');
			$(this).find('.award__item-content').show();

			if ($('.award__item').index(this) === 0) {
				$('.arr').removeClass('rotate');
			} else if ($('.award__item').index(this) === 1) {
				$('.arr').removeClass('rotate');
				$('.award__item').eq(0).find('.arr').addClass('rotate');
			} else if ($('.award__item').index(this) === 2) {
				$('.arr').removeClass('rotate');
				$('.award__item').eq(0).find('.arr').addClass('rotate');
				$('.award__item').eq(1).find('.arr').addClass('rotate');
			}
		});
		$('.form_support input, .form_support textarea')
			.focus(function () {
				$(this)
					.data('placeholder', $(this).attr('placeholder'))
					.attr('placeholder', '');
			})
			.blur(function () {
				$(this).attr('placeholder', $(this).data('placeholder'));
			});
	}

	function handlePhoneCf7() {
		const input = document.querySelector('#phone_number');

		if (input) {
			window.intlTelInput(input, {
				initialCountry: 'vn',
				separateDialCode: true,
				preferredCountries: ['vn', 'us', 'jp'],
			});

			const defaultText = $('.upload_file').text();

			$('#upload_file-input').on('change', function (e) {
				var fileName = e.target.files[0].name;
				$('.upload_file').text(fileName);
			});

			document.addEventListener(
				'wpcf7mailsent',
				function (event) {
					$('.upload_file').text(defaultText);
				},
				false
			);
		} else {
			return;
		}
	}

	function dynamicPopup() {
		$('.document_item-popup').on('click', function () {
			var documentLink = $(this).data('doccument');
			var id_post = $(this).data('id');
			var title = $(this)
				.closest('.document_item-popup')
				.find('.main_title')
				.html();
			$.ajax({
				url: ajaxurl.ajaxurl,
				type: 'POST',
				data: {
					action: 'get_content_qhcd',
					id_post: id_post,
					security: ajaxurl.security,
				},
				beforeSend: function () {
					$('#document-modal .document-modal-link').attr(
						'href',
						documentLink
					);
					$('#document-modal .document-modal-title').html(title);
					$('#document-modal .document-modal-content').html();
					$('.document-popup-loading').removeClass('hidden');
				},
				success: function (response) {
					$('.document-popup-loading').addClass('hidden');
					$('#document-modal .document-modal-content').html(response);
				},
			});
		});
		$('.expert_item .expert-open').on('click', function () {
			const parent = $(this).closest('.expert_item');

			$('#expert-modal .expert-img').html(
				parent.find('.expert-img img').clone()
			);

			$('#expert-modal .expert-name').text(
				parent.find('.expert-name').text()
			);

			$('#expert-modal .expert-destiny').html(
				parent.find('.expert-destiny').html()
			);

			$('#expert-modal .expert-qr').html(
				parent.find('.expert-qr img').clone()
			);

			$('#expert-modal .expert-info').html(
				parent.find('.expert-contact a').clone()
			);

			$('#expert-modal .expert-info').append(
				parent.find('.expert-info li').clone()
			);

			$('#expert-modal .expert-btn').html(
				parent.find('.expert-btn a').clone()
			);

			$('#expert-modal .expert-desc').html(
				parent.find('.expert-desc').html()
			);
		});
	}

	function stickyHeader() {
		var lastScroll = 0;
		var isScrolled = false;
		window.addEventListener('scroll', function () {
			var topHeader = document.querySelector('header');
			var currentScroll =
				window.pageYOffset ||
				document.documentElement.scrollTop ||
				document.body.scrollTop ||
				0;
			var scrollDirection = currentScroll < lastScroll;
			var shouldToggle = isScrolled && scrollDirection;
			isScrolled = currentScroll > 100;
			topHeader.classList.toggle('active', shouldToggle);
			lastScroll = currentScroll;
		});
	}

	function livechat() {
		jQuery(document).ready(function () {
			jQuery("a[href='#livechat']").click(function () {
				liveChat('show');
				jQuery('#ib-button-messaging').show();
			});
		});
		jQuery(document).on('click', '#ib-button-messaging', function () {
			jQuery('#ib-button-messaging').css('display', 'none');
		});
		(function (I, n, f, o, b, i, p) {
			I[b] =
				I[b] ||
				function () {
					(I[b].q = I[b].q || []).push(arguments);
				};

			I[b].t = 1 * new Date();
			i = n.createElement(f);
			i.async = 1;
			i.src = o;

			p = n.getElementsByTagName(f)[0];
			p.parentNode.insertBefore(i, p);
		})(
			window,
			document,
			'script',
			'https://livechat.infobip.com/widget.js',
			'liveChat'
		);

		liveChat('init', 'f6a95a7a-4346-4059-8343-d646578b8269');
		liveChat('hide');
	}

	function marqueeSlider() {
		$('.block__slider-marquee').each(function () {
			let $marqueeSlider = $(this);
			let isRtl = $marqueeSlider.hasClass('marquee-rtl');

			let mainTicker = new Flickity(this, {
				accessibility: true,
				resize: true,
				wrapAround: true,
				prevNextButtons: false,
				pageDots: false,
				percentPosition: true,
				setGallerySize: true,
				rightToLeft: isRtl,
			});

			mainTicker.x = 0;
			let requestId;

			function play() {
				mainTicker.x -= 1; // Điều chỉnh giá trị này để thay đổi tốc độ
				mainTicker.settle(mainTicker.x);
				requestId = window.requestAnimationFrame(play);
			}

			function pause() {
				if (requestId) {
					window.cancelAnimationFrame(requestId);
					requestId = undefined;
				}
			}

			$marqueeSlider.on('mouseenter', pause);
			$marqueeSlider.on('mouseleave', play);

			play(); // Start the animation initially
		});
	}

	jQuery(document).ready(function ($) {
		function load_jobs(page = 1) {
			var nghiep_vu = $('#nghiep_vu').val();
			var noi_lam_viec = $('#noi_lam_viec').val();
			$.ajax({
				url: ajaxurl.ajaxurl,
				type: 'POST',
				data: {
					action: 'filter_jobs',
					nghiep_vu: nghiep_vu,
					noi_lam_viec: noi_lam_viec,
					paged: page,
					security: ajaxurl.security,
				},
				beforeSend: function () {
					$('#vi-tri-tuyen-dung').html('');
					$('#tuyen-dung-loading').removeClass('hidden');
				},
				success: function (response) {
					$('#tuyen-dung-loading').addClass('hidden');
					$('#vi-tri-tuyen-dung').html(response);
				},
			});
		}
		$(document).on(
			'click',
			'#vi-tri-tuyen-dung .bsc-pagination a, #tuyen-dung-tim-kiem',
			function (e) {
				e.preventDefault();
				var page = parseInt($('#vi-tri-tuyen-dung').attr('data-paged'));
				if ($(this).hasClass('item-paged')) {
					page = parseInt($(this).text());
				} else if ($(this).hasClass('prev')) {
					page = page - 1;
				} else if ($(this).hasClass('next')) {
					page = page + 1;
				} else if ($(this).is('button')) {
					page = 1;
				}
				$('#vi-tri-tuyen-dung').attr('data-paged', page);
				load_jobs(page);
			}
		);

		function getMaxValue(dataSets) {
			return (
				Math.ceil(
					Math.max(
						...dataSets.flat().filter((value) => value !== null)
					) / 100
				) * 100
			);
		}

		function updateChart(
			dataType,
			dateRange,
			stocksData,
			maxYAxisValue,
			minYAxisValue
		) {
			const filteredDateRange = dateRange.filter((date) => {
				const hasBSC10Data =
					stocksData[dataType] &&
					stocksData[dataType][date] &&
					stocksData[dataType][date].portclose != null;
				const hasVNINDEXData =
					stocksData['HOSE'] &&
					stocksData['HOSE'][date] &&
					stocksData['HOSE'][date].portclose != null;
				const hasVNDIAMONDData =
					stocksData['VNDIAMOND'] &&
					stocksData['VNDIAMOND'][date] &&
					stocksData['VNDIAMOND'][date].portclose != null;

				return hasBSC10Data || hasVNINDEXData || hasVNDIAMONDData;
			});

			const hoseData = filteredDateRange.map((date) =>
				stocksData['HOSE'] &&
				stocksData['HOSE'][date] &&
				stocksData['HOSE'][date].portclose != null
					? stocksData['HOSE'][date].portclose
					: null
			);

			const vndiamondData = filteredDateRange.map((date) =>
				stocksData['VNDIAMOND'] &&
				stocksData['VNDIAMOND'][date] &&
				stocksData['VNDIAMOND'][date].portclose != null
					? stocksData['VNDIAMOND'][date].portclose
					: null
			);

			const selectedData = filteredDateRange.map((date) =>
				stocksData[dataType] &&
				stocksData[dataType][date] &&
				stocksData[dataType][date].portclose != null
					? stocksData[dataType][date].portclose
					: null
			);

			const maxValue = getMaxValue([
				hoseData,
				vndiamondData,
				selectedData,
			]);

			const newYAxisOptions = {
				min: minYAxisValue,
				max: maxYAxisValue,
				tickAmount: 10,
				labels: {
					formatter: function (value) {
						return value.toFixed(0);
					},
				},
			};

			const chartData = [
				{
					name: dataType,
					data: filteredDateRange.map((date) => ({
						x: new Date(date).getTime(),
						y:
							stocksData[dataType] &&
							stocksData[dataType][date] &&
							stocksData[dataType][date].portclose != null
								? stocksData[dataType][date].portclose
								: null,
						percentagedifference:
							stocksData[dataType] &&
							stocksData[dataType][date] &&
							stocksData[dataType][date].percentagedifference !=
								null
								? stocksData[dataType][date]
										.percentagedifference
								: null,
					})),
				},
				{
					name: 'VNINDEX',
					data: filteredDateRange.map((date) => ({
						x: new Date(date).getTime(),
						y:
							stocksData['HOSE'] &&
							stocksData['HOSE'][date] &&
							stocksData['HOSE'][date].portclose != null
								? stocksData['HOSE'][date].portclose
								: null,
						percentagedifference:
							stocksData['HOSE'] &&
							stocksData['HOSE'][date] &&
							stocksData['HOSE'][date].percentagedifference !=
								null
								? stocksData['HOSE'][date].percentagedifference
								: null,
					})),
				},
				{
					name: 'VNDIAMOND',
					data: filteredDateRange.map((date) => ({
						x: new Date(date).getTime(),
						y:
							stocksData['VNDIAMOND'] &&
							stocksData['VNDIAMOND'][date] &&
							stocksData['VNDIAMOND'][date].portclose != null
								? stocksData['VNDIAMOND'][date].portclose
								: null,
						percentagedifference:
							stocksData['VNDIAMOND'] &&
							stocksData['VNDIAMOND'][date] &&
							stocksData['VNDIAMOND'][date]
								.percentagedifference != null
								? stocksData['VNDIAMOND'][date]
										.percentagedifference
								: null,
					})),
				},
			];

			jQuery('#chart').empty();
			window.handleChart(chartData, newYAxisOptions);
		}

		function formatDate(date) {
			const year = date.getFullYear();
			const month = String(date.getMonth() + 1).padStart(2, '0');
			const day = String(date.getDate()).padStart(2, '0');
			return `${year}-${month}-${day}`;
		}

		function get_current_date_chart() {
			const fromDate = new Date(jQuery('section.chart .fromdate').val());
			const toDate = new Date(jQuery('section.chart .todate').val());
			const dateRange = [];
			let currentDate = new Date(fromDate);

			while (currentDate <= toDate) {
				const dayOfWeek = currentDate.getDay();
				if (dayOfWeek !== 6 && dayOfWeek !== 0) {
					dateRange.push(formatDate(currentDate));
				}
				currentDate.setDate(currentDate.getDate() + 1);
			}
			return dateRange;
		}

		function running_chart() {
			if ($('#chart').length) {
				const initialDateRange = get_current_date_chart();
				var stocksData = $('#chart').attr('data-stock');
				if (typeof stocksData === 'string') {
					stocksData = JSON.parse(stocksData);
				} else {
					stocksData = stocksData;
				}
				var maxYAxisValue = parseInt(
					$('#chart').attr('data-maxvalue'),
					10
				);
				var minYAxisValue = parseInt(
					$('#chart').attr('data-minvalue'),
					10
				);
				updateChart(
					'BSC10',
					initialDateRange,
					stocksData,
					maxYAxisValue,
					minYAxisValue
				);
			}
		}
		running_chart();

		jQuery('section.chart .btn-chart button').click(function () {
			const chart_name = jQuery(this).attr('data-chart');
			if (chart_name) {
				jQuery('section.chart .btn-chart button').removeClass('active');
				jQuery(this).addClass('active');
				var stocksData = $('#chart').attr('data-stock');
				if (typeof stocksData === 'string') {
					stocksData = JSON.parse(stocksData);
				} else {
					stocksData = stocksData;
				}
				var maxYAxisValue = parseInt(
					$('#chart').attr('data-maxvalue'),
					10
				);
				var minYAxisValue = parseInt(
					$('#chart').attr('data-minvalue'),
					10
				);
				updateChart(
					chart_name,
					get_current_date_chart(),
					stocksData,
					maxYAxisValue,
					minYAxisValue
				);
			}
		});

		let debounceTimer;
		const debounceDelay = 1000;

		jQuery('section.chart .fromdate,section.chart  .todate').on(
			'input',
			function () {
				clearTimeout(debounceTimer);
				debounceTimer = setTimeout(function () {
					const activeChart =
						jQuery('section.chart .btn-chart button.active').data(
							'chart'
						) || 'BSC10';
					const fromDate = jQuery('section.chart .fromdate').val();
					const toDate = jQuery('section.chart .todate').val();
					const time_cache = jQuery('#chart').attr('data-time_cache');
					jQuery.ajax({
						url: ajaxurl.ajaxurl,
						type: 'POST',
						data: {
							action: 'fetch_portfolio_data',
							fromdate: fromDate,
							todate: toDate,
							portcode: 'BSC10,BSC30,BSC50,HOSE,VNDIAMOND',
							time_cache: time_cache,
							security: ajaxurl.security,
						},
						success: function (response) {
							const data_new = JSON.parse(response);
							let parsedData;
							if (typeof data_new.data === 'string') {
								parsedData = JSON.parse(data_new.data);
							} else {
								parsedData = data_new.data;
							}
							const dateRange = get_current_date_chart();
							let newinitialDateRange;
							if (typeof dateRange === 'string') {
								newinitialDateRange = JSON.parse(dateRange);
							} else {
								newinitialDateRange = dateRange;
							}
							var maxYAxisValue = parseInt(data_new.maxvalue, 10);
							var minYAxisValue = parseInt(data_new.minvalue, 10);
							$('#chart').attr('data-maxvalue', maxYAxisValue);
							$('#chart').attr('data-minvalue', minYAxisValue);
							updateChart(
								activeChart,
								newinitialDateRange,
								parsedData,
								maxYAxisValue,
								minYAxisValue
							);
						},
						error: function (error) {
							console.error('Error fetching data:', error);
						},
					});
				}, debounceDelay);
			}
		);
// Biểu đồ dự báo thị trường
		var options = {
			chart: {
				type: 'line',
				height: 364,
                toolbar: {
                    show: false
                }
			},
			title: {
				text: 'Dự báo VN-Index 2024',
				align: 'center',
				margin: 0,
				offsetY: 10,
				style: {
					fontSize: '18px',
					fontWeight: 'bold',
					color: '#235BA8',
				},
			},
			series: [
				{
					name: 'VN-Index',
					data: [50, 200, 150, 300, 400, 500, 700, 800, 900],
				},
				{
					name: 'Dự báo KB2 (Tăng)',
					data: [
						null,
						null,
						null,
						null,
						null,
						null,
						null,
						null,
						900,
						1000,
						1100,
						1200,
					],
					dashArray: 5,
					color: '#00E396',
				},
				{
					name: 'Dự báo KB1 (Giảm)',
					data: [
						null,
						null,
						null,
						null,
						null,
						null,
						null,
						null,
						900,
						800,
						600,
						400,
					],
					dashArray: 5,
					color: '#FF4560',
				},
			],
			xaxis: {
				categories: [
					'T01',
					'T02',
					'T03',
					'T04',
					'T05',
					'T06',
					'T07',
					'T08',
					'T09',
					'T10',
					'T11',
					'2025',
				],
			},
			yaxis: {
				labels: {
					formatter: function (value) {
						return Math.round(value);
					},
				},
				min: -100,
				max: 2000,
			},
			annotations: {
				yaxis: [
					{
						y: 1000,
						borderColor: '#00E396',
						label: {
							borderColor: '#00E396',
							style: {
								color: '#fff',
								background: '#00E396',
							},
							text: 'KB2: 1000.00',
						},
					},
					{
						y: 523,
						borderColor: '#775DD0',
						label: {
							borderColor: '#775DD0',
							style: {
								color: '#fff',
								background: '#775DD0',
							},
							text: 'KB cơ sở: 523.00',
						},
					},
					{
						y: 2.18,
						borderColor: '#FF4560',
						label: {
							borderColor: '#FF4560',
							style: {
								color: '#fff',
								background: '#FF4560',
							},
							text: 'KB1: 2.18',
						},
					},
				],
			},
			colors: ['#008FFB', '#00E396', '#FF4560'],
			stroke: {
				width: [3, 3, 3],
				curve: 'smooth',
			},
			markers: {
				size: [4, 0, 0],
			},
			tooltip: {
				shared: true,
				intersect: false,
			},
			legend: {
				show: false,
			},
		};
		var chart = new ApexCharts(
			document.querySelector('#chart-forecast'),
			options
		);
		chart.render();
	});
})(jQuery);
