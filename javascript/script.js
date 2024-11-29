import { initFlowbite } from 'flowbite';
import ApexCharts from 'apexcharts';
import WOW from 'wowjs';
import { DataTable } from 'simple-datatables';
(function ($) {
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
		handleScrollTable();
		filterTable();
		//Chart
		candleChart();
		forecastChart();
		profitChart();
		healthChart();
		growthChart();
		effectiveChart();
		collapseChart();
		//
		handleDatatables();
		//
		handleSearch();
	});

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
					'.submenu-wrapper > li[data-menu="' +
						dataMenuValue +
						'"] > a'
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
					$('.submenu-content').css('max-height', '0');
				}, 200);
			});

			$('.submenu-wrapper > li > a').mouseenter(function () {
				var $parentLi = $(this).parent(); // Lấy thẻ cha <li>
				var dataMenuValue = $parentLi.attr('data-menu');
				var submenuToMove = $parentLi.children(
					'.sub-menu[data-submenu="' + dataMenuValue + '"]'
				);

				$('.submenu-wrapper > li').removeClass('active');
				$parentLi.addClass('active'); // Thêm class vào thẻ <li>

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
		$('.value-item svg path').css({
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
			$(this)
				.closest('.customtab-nav')
				.find('button')
				.removeClass('active');
			$(this).addClass('active');
			$(target).fadeIn('slow').siblings('.tab-content').hide();

			if ($(this).closest('.customtab-nav').hasClass('has-line')) {
				moveLine($(this));
			}
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

		$('.btn-chart button').on('click', function () {
			var chartValue = $(this).attr('data-chart');

			$('.btn-chart button').removeClass('active');
			$(this).addClass('active');

			$('.dmkn_chart_bsc_details[data-chart-tab="' + chartValue + '"]')
				.fadeIn('slow')
				.siblings('.dmkn_chart_bsc_details')
				.hide();
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
			var height_chart =
				chartElement.getAttribute('data-height') || '97%';

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
					height: height_chart,
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

		$('.collapse-item.has-children > div > h3').click(function name() {
			$(this).parent().siblings('.sub-collapse').slideToggle();
			$(this).toggleClass('active').find('svg').toggleClass('rotate-180');
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

			// Kiểm tra xem class có phải là block_slider-show-X không
			let showClass = $marqueeSlider
				.attr('class')
				.match(/block_slider-show-(\d)/);
			if (showClass) {
				let showNumber = parseInt(showClass[1], 10); // Lấy số từ block_slider-show-X

				// Kiểm tra số lượng .block_slider-item
				let itemCount =
					$marqueeSlider.find('.block_slider-item').length;

				// Nếu số lượng phần tử lớn hơn số yêu cầu, khởi tạo slider
				if (itemCount > showNumber) {
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
				}
			}
		});
	}

	jQuery(document).ready(function ($) {
		function load__chuyen_gia(page = 1) {
			var thanh_pho = $(
				'.list_chuyen_gia input[name="thanh_pho"]:checked'
			).val();
			var kinh_nghiem = $('#form-search-expert #kinh_nghiem').val();
			var menh = $('#form-search-expert #menh').val();
			var trinh_do_hoc_van = $(
				'#form-search-expert #trinh_do_hoc_van'
			).val();
			var name_chuyen_gia = $(
				'#form-search-expert #name_chuyen_gia'
			).val();
			var paged = $('#form-search-expert').attr('data-paged');
			var posts_per_page = $('#posts_per_page').val();
			$.ajax({
				url: ajaxurl.ajaxurl,
				type: 'POST',
				data: {
					action: 'filter_chuyengia',
					thanh_pho: thanh_pho,
					kinh_nghiem: kinh_nghiem,
					menh: menh,
					trinh_do_hoc_van: trinh_do_hoc_van,
					name_chuyen_gia: name_chuyen_gia,
					paged: paged,
					posts_per_page: posts_per_page,
					security: ajaxurl.security,
				},
				beforeSend: function () {
					$('#list-chuyen-gia').html('');
					$('#chuyen-gia-loading').removeClass('hidden');
				},
				success: function (response) {
					$('#chuyen-gia-loading').addClass('hidden');
					$('#list-chuyen-gia').html(response);
				},
			});
		}
		$(document).on(
			'click',
			'#list-chuyen-gia .bsc-pagination button',
			function (e) {
				e.preventDefault();
				var page = parseInt(
					$('#form-search-expert').attr('data-paged')
				);
				if ($(this).hasClass('item-paged')) {
					page = parseInt($(this).attr('data-paged'));
				} else if ($(this).hasClass('prev')) {
					page = page - 1;
				} else if ($(this).hasClass('next')) {
					page = page + 1;
				} else {
					page = 1;
				}
				$('#form-search-expert').attr('data-paged', page);
				load__chuyen_gia(page);
			}
		);
		$(document).on('click', '#chuyen_gia_submit', function (e) {
			load__chuyen_gia(1);
		});
		$(document).on('click', '#chuyen_gia_btn-reload', function (e) {
			$('#form-search-expert')[0].reset();
			load__chuyen_gia(1);
		});
		$(document).on(
			'change',
			'.list_chuyen_gia input[type="radio"],#posts_per_page',
			function () {
				load__chuyen_gia(1);
			}
		);
		$(document).on('click', '.expert_item .expert-open', function () {
			const parent = $(this).closest('.expert_item');
			if ($('#expert-modal').hasClass('hidden')) {
				$('.trigger-button').trigger('click');
			}
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
			'#vi-tri-tuyen-dung .bsc-pagination button, #tuyen-dung-tim-kiem',
			function (e) {
				e.preventDefault();
				var page = parseInt($('#vi-tri-tuyen-dung').attr('data-paged'));
				if ($(this).hasClass('item-paged')) {
					page = parseInt($(this).attr('data-paged'));
					console.log(page);
				} else if ($(this).hasClass('prev')) {
					page = page - 1;
				} else if ($(this).hasClass('next')) {
					page = page + 1;
				} else {
					page = 1;
				}
				$('#vi-tri-tuyen-dung').attr('data-paged', page);
				load_jobs(page);
			}
		);
		$(document).on('click', '#tuyen_dung_btn-reload', function (e) {
			$('#search_job')[0].reset();
			load_jobs(1);
		});

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
		// running_chart();

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
		jQuery('section.chart #chart_btn-reload').click(function () {
			var fromdate = jQuery(this).attr('data-fromdate');
			var todate = jQuery(this).attr('data-todate');
			jQuery('section.chart .fromdate').val(fromdate);
			jQuery('section.chart .todate').val(todate);
			jQuery('section.chart .btn-chart button:first-child()').trigger(
				'click'
			);
		});
		let debounceTimer;
		const debounceDelay = 1000;

		jQuery('section.chart .fromdate,section.chart  .todate').on(
			'changeDate',
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
							$('#chart').attr('data-stock', data_new.data);
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
	});

	function handleScrollTable() {
		function enableHorizontalScroll(element) {
			let isDown = false;
			let startX;
			let scrollLeft;

			element.addEventListener('mousedown', (e) => {
				isDown = true;
				element.classList.add('active');
				startX = e.pageX - element.offsetLeft;
				scrollLeft = element.scrollLeft;
			});

			element.addEventListener('mouseleave', () => {
				isDown = false;
				element.classList.remove('active');
			});

			element.addEventListener('mouseup', () => {
				isDown = false;
				element.classList.remove('active');
			});

			element.addEventListener('mousemove', (e) => {
				if (!isDown) return;
				e.preventDefault();
				const x = e.pageX - element.offsetLeft;
				const walk = (x - startX) * 3; // Điều chỉnh tốc độ kéo nếu cần
				element.scrollLeft = scrollLeft - walk;
			});
		}

		// Áp dụng cho tất cả các phần tử có lớp .scroll-container
		document.querySelectorAll('.scroll-container').forEach((el) => {
			enableHorizontalScroll(el);
		});
	}

	function filterTable() {
		$(document).ready(function () {
			$('.filter-table').on('click', function () {
				var $header = $(this);
				var $table = $header.closest('table');
				var $tbody = $table.find('tbody');
				var $rows = $tbody.find('tr');
				var headerIndex = $header.index();
				var isAscending = $header.hasClass('ascending');

				// Xóa lớp `ascending` và `descending` khỏi tất cả các cột, sau đó thêm lớp thích hợp vào cột được nhấp
				$table.find('th').removeClass('ascending descending');
				$header.toggleClass('ascending', !isAscending);
				$header.toggleClass('descending', isAscending);

				$rows.sort(function (rowA, rowB) {
					var cellA = $(rowA)
						.children()
						.eq(headerIndex)
						.text()
						.trim();
					var cellB = $(rowB)
						.children()
						.eq(headerIndex)
						.text()
						.trim();

					// Kiểm tra xem nội dung cột là số hay chữ
					var a = $.isNumeric(cellA) ? parseFloat(cellA) : cellA;
					var b = $.isNumeric(cellB) ? parseFloat(cellB) : cellB;

					if (a < b) return isAscending ? 1 : -1;
					if (a > b) return isAscending ? -1 : 1;
					return 0;
				});

				// Xóa nội dung hiện tại của tbody và thêm các hàng đã sắp xếp
				$tbody.empty().append($rows);
			});
		});
	}

	function forecastChart() {
		const chartElement = document.querySelector('#chart-forecast');
		if (chartElement) {
			// Lấy dữ liệu từ data-stock
			const stockData = JSON.parse(
				chartElement.getAttribute('data-stock')
			);
			let categories = stockData.map((item) => item.date); // Lấy danh sách ngày từ dữ liệu
			const closeIndexes = stockData.map((item) => item.closeindex); // Lấy dữ liệu chỉ số

			// Lấy giá trị KB1 và KB2
			const kb1Value =
				parseFloat(chartElement.getAttribute('data-kb1-value')) || 0; // Giá trị cuối cùng của KB1
			const kb2Value =
				parseFloat(chartElement.getAttribute('data-kb2-value')) || 0; // Giá trị cuối cùng của KB2
			const kbcoso =
				parseFloat(chartElement.getAttribute('data-kb-coso')) || 0;
			// Ngày cuối cùng của VN-Index
			const lastDateVNIndex = new Date(categories[categories.length - 1]);
			const lastVNIndex = closeIndexes[closeIndexes.length - 1];

			// Tạo các ngày thêm cho 4 tháng tiếp theo
			const kbDates = [];
			for (let i = 0; i < 60; i++) {
				const nextDate = new Date(lastDateVNIndex);
				nextDate.setDate(nextDate.getDate() + i); // Cộng thêm từng ngày
				kbDates.push(nextDate.toISOString().split('T')[0]); // Định dạng YYYY-MM-DD
			}

			// Hàm tạo giá trị đường chéo (linear interpolation) từ giá trị bắt đầu đến giá trị kết thúc
			function generateLinearValues(startValue, endValue, numPoints) {
				const values = [];
				const step = (endValue - startValue) / (numPoints - 1); // Bước nhảy giữa các giá trị
				for (let i = 0; i < numPoints; i++) {
					values.push(Math.round(startValue + i * step));
				}
				return values;
			}

			// Số ngày cần random (120 ngày tương ứng với 4 tháng)
			const numDays = kbDates.length;

			// Tạo giá trị đường chéo cho KB1 (giảm dần từ giá trị cuối VN-Index đến kb1Value)
			const kb1DiagonalValues = generateLinearValues(
				lastVNIndex,
				kb1Value,
				numDays
			);

			// Tạo giá trị đường chéo cho KB2 (tăng dần từ giá trị cuối VN-Index đến kb2Value)
			const kb2DiagonalValues = generateLinearValues(
				lastVNIndex,
				kb2Value,
				numDays
			);

			// Cập nhật trục X
			const extendedCategories = [...categories, ...kbDates];

			// Tạo dữ liệu cho KB1 và KB2 (bao gồm điểm đầu VN-Index tại ngày cuối cùng của VN-Index)
			const kb1Series = [
				...closeIndexes.map(() => null),
				lastVNIndex,
				...kb1DiagonalValues.slice(1),
			];
			const kb2Series = [
				...closeIndexes.map(() => null),
				lastVNIndex,
				...kb2DiagonalValues.slice(1),
			];

			// Dữ liệu VN-Index được mở rộng với null
			const extendedCloseIndexes = [
				...closeIndexes,
				lastVNIndex,
				...Array(numDays - 1).fill(null),
			];

			// Xử lý hiển thị đẹp trục X
			let tickInterval;
			let dateFormatter;

			if (extendedCategories.length <= 7) {
				tickInterval = 1;
				dateFormatter = 'dd MMM yyyy';
			} else if (
				extendedCategories.length > 7 &&
				extendedCategories.length <= 30
			) {
				tickInterval = 5;
				dateFormatter = 'dd MMM yyyy';
			} else if (
				extendedCategories.length > 30 &&
				extendedCategories.length <= 365
			) {
				tickInterval = 30;
				dateFormatter = 'MMM yyyy';
			} else {
				tickInterval = 90;
				dateFormatter = 'MMM yyyy';
			}

			const options = {
				chart: {
					type: 'line',
					height: 364,
					toolbar: { show: false },
				},
				title: {
					text: chartElement.getAttribute('data-title'),
					align: 'center',
					style: {
						fontSize: '18px',
						fontWeight: 'bold',
						color: '#235BA8',
					},
				},
				series: [
					{
						name: 'VN-Index',
						data: extendedCloseIndexes, // Dữ liệu thực tế đã cắt gọn
						color: '#004DF0',
					},
					{
						name: chartElement.getAttribute('data-kb2'), // KB2 (Tăng)
						data: kb2Series,
						dashArray: 5,
						color: '#30D158',
					},
					{
						name: chartElement.getAttribute('data-kb1'), // KB1 (Giảm)
						data: kb1Series,
						dashArray: 5,
						color: '#FF0017',
					},
				],
				xaxis: {
					categories: extendedCategories,
					tickAmount: Math.floor(
						extendedCategories.length / tickInterval
					),
					labels: {
						rotate: -45,
						formatter: function (value) {
							const date = new Date(value);
							return !isNaN(date)
								? date.toLocaleDateString('en-GB', {
										day: '2-digit',
										month: 'short',
										year: dateFormatter.includes('yyyy')
											? 'numeric'
											: undefined,
									})
								: value;
						},
					},
				},
				yaxis: {
					labels: {
						formatter: (value) => Math.round(value),
					},
					min: Math.min(...closeIndexes, kb1Value) - 50, // Y trục bắt đầu thấp hơn giá trị nhỏ nhất
					max: Math.max(...closeIndexes, kb2Value) + 50, // Y trục kết thúc cao hơn giá trị lớn nhất
				},
				stroke: {
					width: [3, 3, 3],
					curve: 'smooth',
				},
				annotations: {
					yaxis: [
						{
							y: kb2Value,
							borderColor: '#00E396',
							label: {
								borderColor: '#00E396',
								style: {
									color: '#fff',
									background: '#00E396',
								},
								text: 'KB2:' + kb2Value,
							},
						},
						{
							y: kbcoso,
							borderColor: '#775DD0',
							label: {
								borderColor: '#775DD0',
								style: {
									color: '#fff',
									background: '#775DD0',
								},
								text:
									chartElement.getAttribute('data-coso') +
									':' +
									kbcoso,
							},
						},
						{
							y: kb1Value,
							borderColor: '#FF4560',
							label: {
								borderColor: '#FF4560',
								style: {
									color: '#fff',
									background: '#FF4560',
								},
								text: 'KB1:' + kb1Value,
							},
						},
					],
				},
				colors: ['#008FFB', '#00E396', '#FF4560'],
				tooltip: {
					shared: true,
					intersect: false,
				},
				legend: {
					show: true,
				},
			};

			const chart = new ApexCharts(chartElement, options);
			chart.render();
		}
	}

	function candleChart() {
		if (document.querySelector('#chart-candle')) {
			var options = {
				chart: {
					type: 'candlestick',
					height: 286,
					toolbar: {
						show: false,
					},
					padding: {
						top: 0,
						right: 0,
						bottom: 0,
						left: 0,
					},
				},
				series: [
					{
						data: [
							{
								x: new Date(2024, 10, 13, 13, 0),
								y: [175, 185, 170, 180],
							},
							{
								x: new Date(2024, 10, 13, 13, 30),
								y: [180, 190, 175, 185],
							},
							{
								x: new Date(2024, 10, 13, 14, 0),
								y: [185, 190, 160, 165],
							},
							{
								x: new Date(2024, 10, 13, 14, 30),
								y: [165, 175, 155, 160],
							},
							{
								x: new Date(2024, 10, 13, 15, 0),
								y: [160, 170, 150, 155],
							},
							{
								x: new Date(2024, 10, 13, 15, 30),
								y: [155, 165, 150, 160],
							},
							{
								x: new Date(2024, 10, 13, 16, 0),
								y: [160, 170, 158, 165],
							},
							{
								x: new Date(2024, 10, 13, 16, 30),
								y: [165, 170, 160, 168],
							},
						],
					},
				],
				xaxis: {
					type: 'datetime',
					labels: {
						format: 'HH:mm dd-MM',
						style: {
							colors: '#31333f80', // Màu chữ cho trục x
							fontSize: '14px',
						},
					},
				},
				yaxis: {
					tooltip: {
						enabled: true,
					},
					min: 140,
					max: 190,
					labels: {
						style: {
							colors: '#31333f80', // Màu chữ cho trục y
							fontSize: '14px',
						},
					},
				},
				grid: {
					show: true,
					borderColor: '#e7e7e7',
				},
				tooltip: {
					shared: true,
					custom: function ({
						series,
						seriesIndex,
						dataPointIndex,
						w,
					}) {
						const o =
							w.globals.seriesCandleO[seriesIndex][
								dataPointIndex
							];
						const h =
							w.globals.seriesCandleH[seriesIndex][
								dataPointIndex
							];
						const l =
							w.globals.seriesCandleL[seriesIndex][
								dataPointIndex
							];
						const c =
							w.globals.seriesCandleC[seriesIndex][
								dataPointIndex
							];
						return `<div class='p-2'><strong>Open:</strong> ${o}<br><strong>High:</strong> ${h}<br><strong>Low:</strong> ${l}<br><strong>Close:</strong> ${c}</div>`;
					},
				},
			};

			var chart = new ApexCharts(
				document.querySelector('#chart-candle'),
				options
			);
			chart.render();
		}
	}

	function profitChart() {
		if (document.querySelector('#profit-chart-1')) {
			var options = {
				chart: {
					type: 'line',
					height: 400,
					toolbar: {
						show: false,
					},
				},
				series: [
					{
						name: 'Biên LNG',
						data: [30, 20, 52.24, 40, 45],
					},
					{
						name: 'BLNG TB ngành',
						data: [25, 24, 24.7, 24.5, 25],
					},
				],
				xaxis: {
					categories: ['2019', '2020', '2021', '2022', '2023'],
					labels: {
						style: {
							fontSize: '14px', // Kích thước font chữ
							colors: '#4A5568', // Màu chữ
						},
					},
				},
				yaxis: {
					labels: {
						show: false, // Ẩn nhãn trên trục Y
					},
				},
				tooltip: {
					shared: true,
					intersect: false,
					y: {
						formatter: function (val) {
							return val + '%';
						},
					},
				},
				colors: ['#235BA8', '#FFB81C'],
				markers: {
					size: 5,
					hover: {
						size: 7,
					},
				},
				stroke: {
					curve: 'smooth', // Đường cong mềm mại
					width: 2, // Độ dày của đường
				},
				legend: {
					position: 'top', // Vị trí trên cùng
					horizontalAlign: 'left', // Căn trái
					offsetY: 0,
					labels: {
						colors: '#4A5568', // Màu chữ của legend
					},
				},
			};

			var chart = new ApexCharts(
				document.querySelector('#profit-chart-1'),
				options
			);
			chart.render();
		}
		if (document.querySelector('#profit-chart-2')) {
			var options = {
				chart: {
					type: 'line',
					height: 400,
					toolbar: {
						show: false,
					},
				},
				series: [
					{
						name: 'Biên LNG',
						data: [30, 20, 52.24, 40, 45],
					},
					{
						name: 'BLNG TB ngành',
						data: [25, 24, 24.7, 24.5, 25],
					},
				],
				xaxis: {
					categories: ['2019', '2020', '2021', '2022', '2023'],
					labels: {
						style: {
							fontSize: '14px', // Kích thước font chữ
							colors: '#4A5568', // Màu chữ
						},
					},
				},
				yaxis: {
					labels: {
						show: false, // Ẩn nhãn trên trục Y
					},
				},
				tooltip: {
					shared: true,
					intersect: false,
					y: {
						formatter: function (val) {
							return val + '%';
						},
					},
				},
				colors: ['#235BA8', '#FFB81C'],
				markers: {
					size: 5,
					hover: {
						size: 7,
					},
				},
				stroke: {
					curve: 'smooth', // Đường cong mềm mại
					width: 2, // Độ dày của đường
				},
				legend: {
					position: 'top', // Vị trí trên cùng
					horizontalAlign: 'left', // Căn trái
					offsetY: 0,
					labels: {
						colors: '#4A5568', // Màu chữ của legend
					},
				},
			};

			var chart = new ApexCharts(
				document.querySelector('#profit-chart-2'),
				options
			);
			chart.render();
		}
		if (document.querySelector('#profit-chart-3')) {
			var options = {
				chart: {
					type: 'line',
					height: 400,
					toolbar: {
						show: false,
					},
				},
				series: [
					{
						name: 'ROE',
						data: [30, 20, 52.24, 40, 45],
					},
					{
						name: 'ROE TB ngành',
						data: [25, 24, 24.7, 24.5, 25],
					},
				],
				xaxis: {
					categories: ['2019', '2020', '2021', '2022', '2023'],
					style: {
						fontSize: '14px', // Kích thước font chữ
						colors: '#4A5568', // Màu chữ
					},
				},
				yaxis: {
					labels: {
						show: false, // Ẩn nhãn trên trục Y
					},
				},
				tooltip: {
					shared: true,
					intersect: false,
					y: {
						formatter: function (val) {
							return val + '%';
						},
					},
				},
				colors: ['#009E87', '#FFB81C'],
				markers: {
					size: 5,
					hover: {
						size: 7,
					},
				},
				stroke: {
					curve: 'smooth', // Đường cong mềm mại
					width: 2, // Độ dày của đường
				},
				legend: {
					position: 'top', // Vị trí trên cùng
					horizontalAlign: 'left', // Căn trái
					offsetY: 0,
					labels: {
						colors: '#4A5568', // Màu chữ của legend
					},
				},
			};

			var chart = new ApexCharts(
				document.querySelector('#profit-chart-3'),
				options
			);
			chart.render();
		}
	}

	function healthChart() {
		if (document.querySelector('#health-chart-1')) {
			var options = {
				chart: {
					type: 'line',
					height: 400,
					toolbar: {
						show: false,
					},
				},
				series: [
					{
						name: 'CSTT nhanh',
						data: [30, 20, 52.24, 40, 45],
					},
					{
						name: 'CSTT hiện  thời',
						data: [25, 24, 24.7, 24.5, 25],
					},
				],
				xaxis: {
					categories: ['2019', '2020', '2021', '2022', '2023'],
					labels: {
						style: {
							fontSize: '14px', // Kích thước font chữ
							colors: '#4A5568', // Màu chữ
						},
					},
				},
				yaxis: {
					labels: {
						show: false, // Ẩn nhãn trên trục Y
					},
				},
				tooltip: {
					shared: true,
					intersect: false,
					y: {
						formatter: function (val) {
							return val + '%';
						},
					},
				},
				colors: ['#235BA8', '#FFB81C'],
				markers: {
					size: 5,
					hover: {
						size: 7,
					},
				},
				stroke: {
					curve: 'smooth', // Đường cong mềm mại
					width: 2, // Độ dày của đường
				},
				legend: {
					position: 'top', // Vị trí trên cùng
					horizontalAlign: 'left', // Căn trái
					offsetY: 0,
					labels: {
						colors: '#4A5568', // Màu chữ của legend
					},
				},
			};

			var chart = new ApexCharts(
				document.querySelector('#health-chart-1'),
				options
			);
			chart.render();
		}

		if (document.querySelector('#health-chart-2')) {
			var options = {
				chart: {
					type: 'bar',
					height: 400,
					toolbar: {
						show: false,
					},
				},

				series: [
					{
						data: [0.31, 0.41, 0.62, 0.17, 0.4],
					},
				],
				xaxis: {
					categories: ['2019', '2020', '2021', '2022', '2023'],
					labels: {
						style: {
							fontSize: '14px',
							colors: '#4A5568',
						},
					},
				},
				yaxis: {
					labels: {
						show: false, // Ẩn nhãn trên trục Y
					},
				},
				dataLabels: {
					enabled: true,
					offsetY: -30,
					style: {
						fontSize: '14px',
						colors: ['#4A5568'],
					},
					formatter: function (value) {
						return value.toFixed(2); // Hiển thị giá trị trên cột với 2 chữ số thập phân
					},
				},
				plotOptions: {
					bar: {
						borderRadius: 8, // Bo góc cho cột
						columnWidth: '56px', // Đặt chiều rộng cột chính xác là 56px
						borderRadiusApplication: 'around',
						dataLabels: {
							position: 'top', // top, center, bottom
						},
					},
				},
				colors: ['#009E87'], // Màu cột (màu xanh lá cây)
			};

			var chart = new ApexCharts(
				document.querySelector('#health-chart-2'),
				options
			);
			chart.render();
		}
		if (document.querySelector('#health-chart-3')) {
			var options = {
				chart: {
					type: 'line',
					height: 400,
					toolbar: {
						show: false,
					},
				},
				series: [
					{
						name: 'Tỷ lệ thanh toán',
						data: [30, 20, 52.24, 40, 45],
					},
				],
				xaxis: {
					categories: ['2019', '2020', '2021', '2022', '2023'],
					labels: {
						style: {
							fontSize: '14px', // Kích thước font chữ
							colors: '#4A5568', // Màu chữ
						},
					},
				},
				yaxis: {
					labels: {
						show: false, // Ẩn nhãn trên trục Y
					},
				},
				tooltip: {
					shared: true,
					intersect: false,
					y: {
						formatter: function (val) {
							return val;
						},
					},
				},
				colors: ['#235BA8'],
				markers: {
					size: 5,
					hover: {
						size: 7,
					},
				},
				stroke: {
					curve: 'smooth', // Đường cong mềm mại
					width: 2, // Độ dày của đường
				},
				legend: {
					position: 'top', // Vị trí trên cùng
					horizontalAlign: 'left', // Căn trái
					offsetY: 0,
					labels: {
						colors: '#4A5568', // Màu chữ của legend
					},
				},
			};

			var chart = new ApexCharts(
				document.querySelector('#health-chart-3'),
				options
			);
			chart.render();
		}
	}

	function growthChart() {
		if (document.querySelector('#growth-chart-1')) {
			var options = {
				chart: {
					type: 'line',
					height: 400,
					toolbar: {
						show: false,
					},
				},
				series: [
					{
						name: 'TTDT',
						data: [10, 46.07, 20, 5, 30], // Dữ liệu tương ứng với các năm
					},
				],
				xaxis: {
					categories: ['2019', '2020', '2021', '2022', '2023'],
					labels: {
						style: {
							fontSize: '14px',
							colors: '#4A5568',
						},
					},
				},
				yaxis: {
					labels: {
						show: false, // Ẩn nhãn trên trục Y
					},
					title: {
						style: {
							fontSize: '14px',
							color: '#4A5568',
						},
					},
				},
				stroke: {
					curve: 'smooth', // Đường cong mềm mại
					width: 2,
				},
				tooltip: {
					enabled: true,
					y: {
						formatter: function (value) {
							return value.toFixed(2) + '%';
						},
					},
				},
				markers: {
					size: 5,
					colors: ['#235BA8'],
					strokeColors: '#ffffff',
					strokeWidth: 2,
					hover: {
						size: 7,
					},
				},
				colors: ['#235BA8'], // Màu của đường biểu đồ
			};
			var chart = new ApexCharts(
				document.querySelector('#growth-chart-1'),
				options
			);
			chart.render();
		}
		if (document.querySelector('#growth-chart-2')) {
			var options = {
				chart: {
					type: 'line',
					height: 400,
					toolbar: {
						show: false,
					},
				},
				series: [
					{
						name: 'TT EPS',
						data: [10, 46.07, 20, 5, 30], // Dữ liệu tương ứng với các năm
					},
				],
				xaxis: {
					categories: ['2019', '2020', '2021', '2022', '2023'],
					labels: {
						style: {
							fontSize: '14px',
							colors: '#4A5568',
						},
					},
				},
				yaxis: {
					labels: {
						show: false, // Ẩn nhãn trên trục Y
					},
					title: {
						style: {
							fontSize: '14px',
							color: '#4A5568',
						},
					},
				},
				stroke: {
					curve: 'smooth', // Đường cong mềm mại
					width: 2,
				},
				tooltip: {
					enabled: true,
					y: {
						formatter: function (value) {
							return value.toFixed(2) + '%';
						},
					},
				},
				markers: {
					size: 5,
					colors: ['#009E87'],
					strokeColors: '#ffffff',
					strokeWidth: 2,
					hover: {
						size: 7,
					},
				},
				colors: ['#009E87'], // Màu của đường biểu đồ
			};
			var chart = new ApexCharts(
				document.querySelector('#growth-chart-2'),
				options
			);
			chart.render();
		}
		if (document.querySelector('#growth-chart-3')) {
			var options = {
				chart: {
					type: 'line',
					height: 400,
					toolbar: {
						show: false,
					},
				},
				series: [
					{
						name: 'TT Lợi nhuận',
						data: [10, 46.07, 20, 5, 30], // Dữ liệu tương ứng với các năm
					},
				],
				xaxis: {
					categories: ['2019', '2020', '2021', '2022', '2023'],
					labels: {
						style: {
							fontSize: '14px',
							colors: '#4A5568',
						},
					},
				},
				yaxis: {
					labels: {
						show: false, // Ẩn nhãn trên trục Y
					},
					title: {
						style: {
							fontSize: '14px',
							color: '#4A5568',
						},
					},
				},
				stroke: {
					curve: 'smooth', // Đường cong mềm mại
					width: 2,
				},
				tooltip: {
					enabled: true,
					y: {
						formatter: function (value) {
							return value.toFixed(2) + '%';
						},
					},
				},
				markers: {
					size: 5,
					colors: ['#235BA8'],
					strokeColors: '#ffffff',
					strokeWidth: 2,
					hover: {
						size: 7,
					},
				},
				colors: ['#235BA8'], // Màu của đường biểu đồ
			};
			var chart = new ApexCharts(
				document.querySelector('#growth-chart-3'),
				options
			);
			chart.render();
		}
	}

	function effectiveChart() {
		if (document.querySelector('#effective-chart-1')) {
			var options = {
				chart: {
					type: 'line',
					height: 400,
					toolbar: {
						show: false,
					},
				},
				series: [
					{
						name: 'VQKPT',
						data: [15, 16, 17, 15, 14], // Dữ liệu cho đường màu xanh
					},
					{
						name: 'VQKPT (TB ngành)',
						data: [7, 8, 8, 7, 6], // Dữ liệu cho đường màu vàng
					},
				],
				xaxis: {
					categories: ['2019', '2020', '2021', '2022', '2023'],
					labels: {
						style: {
							fontSize: '14px',
							colors: '#4A5568',
						},
					},
				},
				yaxis: {
					labels: {
						show: false, // Ẩn nhãn trên trục Y
					},
					title: {
						text: '',
						style: {
							fontSize: '14px',
							color: '#4A5568',
						},
					},
				},
				tooltip: {
					enabled: true,
					shared: true,
					intersect: false,
					y: {
						formatter: function (value) {
							return value.toFixed(0); // Hiển thị giá trị số nguyên
						},
					},
				},
				stroke: {
					curve: 'smooth', // Đường cong mềm mại
					width: 2,
				},
				markers: {
					size: 5,
					hover: {
						size: 7,
					},
				},
				colors: ['#235BA8', '#FFB81C'], // Màu của hai đường

				legend: {
					position: 'top',
					horizontalAlign: 'left',
				},
			};

			var chart = new ApexCharts(
				document.querySelector('#effective-chart-1'),
				options
			);
			chart.render();
		}
		if (document.querySelector('#effective-chart-2')) {
			var options = {
				chart: {
					type: 'line',
					height: 400,
					toolbar: {
						show: false,
					},
				},
				series: [
					{
						name: 'VQKPT',
						data: [15, 16, 17, 15, 14], // Dữ liệu cho đường màu xanh
					},
					{
						name: 'VQKPT (TB ngành)',
						data: [7, 8, 8, 7, 6], // Dữ liệu cho đường màu vàng
					},
				],
				xaxis: {
					categories: ['2019', '2020', '2021', '2022', '2023'],
					labels: {
						style: {
							fontSize: '14px',
							colors: '#4A5568',
						},
					},
				},
				yaxis: {
					labels: {
						show: false, // Ẩn nhãn trên trục Y
					},
					title: {
						text: '',
						style: {
							fontSize: '14px',
							color: '#4A5568',
						},
					},
				},
				tooltip: {
					enabled: true,
					shared: true,
					intersect: false,
					y: {
						formatter: function (value) {
							return value.toFixed(0); // Hiển thị giá trị số nguyên
						},
					},
				},
				stroke: {
					curve: 'smooth', // Đường cong mềm mại
					width: 2,
				},
				markers: {
					size: 5,
					hover: {
						size: 7,
					},
				},
				colors: ['#235BA8', '#FFB81C'], // Màu của hai đường

				legend: {
					position: 'top',
					horizontalAlign: 'left',
				},
			};

			var chart = new ApexCharts(
				document.querySelector('#effective-chart-2'),
				options
			);
			chart.render();
		}
		if (document.querySelector('#effective-chart-3')) {
			var options = {
				chart: {
					type: 'line',
					height: 400,
					toolbar: {
						show: false,
					},
				},
				series: [
					{
						name: 'VQHTK',
						data: [15, 16, 17, 15, 14], // Dữ liệu cho đường màu xanh
					},
					{
						name: 'VQHTK (TB ngành)',
						data: [7, 8, 8, 7, 6], // Dữ liệu cho đường màu vàng
					},
				],
				xaxis: {
					categories: ['2019', '2020', '2021', '2022', '2023'],
					labels: {
						style: {
							fontSize: '14px',
							colors: '#4A5568',
						},
					},
				},
				yaxis: {
					labels: {
						show: false, // Ẩn nhãn trên trục Y
					},
					title: {
						text: '',
						style: {
							fontSize: '14px',
							color: '#4A5568',
						},
					},
				},
				tooltip: {
					enabled: true,
					shared: true,
					intersect: false,
					y: {
						formatter: function (value) {
							return value.toFixed(0); // Hiển thị giá trị số nguyên
						},
					},
				},
				stroke: {
					curve: 'smooth', // Đường cong mềm mại
					width: 2,
				},
				markers: {
					size: 5,
					hover: {
						size: 7,
					},
				},
				colors: ['#235BA8', '#FFB81C'], // Màu của hai đường

				legend: {
					position: 'top',
					horizontalAlign: 'left',
				},
			};

			var chart = new ApexCharts(
				document.querySelector('#effective-chart-3'),
				options
			);
			chart.render();
		}
	}

	function collapseChart() {
		if (document.querySelector('.collapse-item-chart')) {
			var options = {
				chart: {
					type: 'area',
					height: '100%', // Tự động theo khung chứa
					width: '100%', // Tự động theo khung chứa
					toolbar: {
						show: false, // Ẩn toolbar
					},
					parentHeightOffset: 0, // Loại bỏ khoảng trắng phía trên/ dưới biểu đồ
					animations: {
						enabled: false, // Tắt hoạt ảnh để tối ưu trong khung nhỏ
					},
				},
				series: [
					{
						name: 'Data',
						data: [50, 51, 50.5, 50.8, 51, 50.5], // Dữ liệu đã điều chỉnh để hiển thị nằm ngang
					},
				],
				xaxis: {
					categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
					labels: {
						show: false, // Ẩn nhãn trục X
					},
					axisBorder: {
						show: false, // Ẩn đường viền trục X
					},
					axisTicks: {
						show: false, // Ẩn dấu tick trục X
					},
				},
				yaxis: {
					show: false, // Ẩn toàn bộ trục Y
				},
				grid: {
					show: false, // Ẩn lưới
					padding: {
						top: -10, // Loại bỏ padding dư thừa ở trên
						bottom: -10, // Loại bỏ padding dư thừa ở dưới
						left: 0,
						right: 0,
					},
				},
				stroke: {
					curve: 'smooth', // Đường cong mềm mại
					width: 1, // Đường mỏng hơn để vừa khung nhỏ
				},
				fill: {
					type: 'gradient',
					gradient: {
						shadeIntensity: 1,
						opacityFrom: 0.8,
						opacityTo: 0,
						stops: [0, 100],
						colorStops: [
							{
								offset: 0,
								color: '#007bff',
								opacity: 0.7,
							},
							{
								offset: 100,
								color: '#ffffff',
								opacity: 0,
							},
						],
					},
				},
				tooltip: {
					enabled: false, // Ẩn tooltip
				},
				dataLabels: {
					enabled: false, // Ẩn nhãn dữ liệu
				},
			};

			var chart = new ApexCharts(
				document.querySelector('.collapse-item-chart'),
				options
			);
			chart.render();
		}
		if (document.querySelector('.collapse-item-chart-red')) {
			var options = {
				chart: {
					type: 'area',
					height: '100%', // Tự động theo khung chứa
					width: '100%', // Tự động theo khung chứa
					toolbar: {
						show: false, // Ẩn toolbar
					},
					parentHeightOffset: 0, // Loại bỏ khoảng trắng phía trên/ dưới biểu đồ
					animations: {
						enabled: false, // Tắt hoạt ảnh để tối ưu trong khung nhỏ
					},
				},
				series: [
					{
						name: 'Data',
						data: [50, 51, 50.5, 50.8, 51, 50.5], // Dữ liệu đã điều chỉnh để hiển thị nằm ngang
					},
				],
				xaxis: {
					categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
					labels: {
						show: false, // Ẩn nhãn trục X
					},
					axisBorder: {
						show: false, // Ẩn đường viền trục X
					},
					axisTicks: {
						show: false, // Ẩn dấu tick trục X
					},
				},
				yaxis: {
					show: false, // Ẩn toàn bộ trục Y
				},
				grid: {
					show: false, // Ẩn lưới
					padding: {
						top: -10, // Loại bỏ padding dư thừa ở trên
						bottom: -10, // Loại bỏ padding dư thừa ở dưới
						left: 0,
						right: 0,
					},
				},
				stroke: {
					curve: 'smooth', // Đường cong mềm mại
					width: 1, // Đường mỏng hơn để vừa khung nhỏ
					colors: ['#A82323'], // Màu của đường nét
				},
				fill: {
					type: 'gradient',
					gradient: {
						shadeIntensity: 1,
						opacityFrom: 0.8,
						opacityTo: 0,
						stops: [0, 100],
						colorStops: [
							{
								offset: 0,
								color: '#A82323', // Màu gradient bắt đầu (đỏ)
								opacity: 0.7,
							},
							{
								offset: 100,
								color: '#ffffff', // Màu gradient kết thúc (trắng)
								opacity: 0,
							},
						],
					},
				},
				tooltip: {
					enabled: false, // Ẩn tooltip
				},
				dataLabels: {
					enabled: false, // Ẩn nhãn dữ liệu
				},
			};

			var chart = new ApexCharts(
				document.querySelector('.collapse-item-chart-red'),
				options
			);
			chart.render();
		}
	}

	function handleDatatables() {
		const tableElement = document.querySelector('#ttcp-table');
		if (!tableElement) {
			// Thoát khỏi hàm nếu không tìm thấy #ttcp-table
			return;
		}
		// Khởi tạo DataTable với chức năng searchable
		const dataTable = new DataTable('#ttcp-table', {
			searchable: true,
			fixedHeight: true,
			perPage: 12,
			perPageSelect: [12, 24, 36, 48],
		});

		// Ẩn input mặc định của searchable bằng CSS
		const searchableInput = document.querySelector('.datatable-input');
		if (searchableInput) {
			searchableInput.style.display = 'none';
		}

		const dropdownElement = document.querySelector(
			'.datatable-top .datatable-dropdown'
		);

		// Tìm phần tử phân trang datatable-pagination
		const paginationElement = document.querySelector(
			'.datatable-pagination'
		);

		if (dropdownElement && paginationElement) {
			// Xóa bỏ chữ "entries per page" trong dropdown

			// Append phần tử dropdown vào phân trang
			paginationElement.prepend(dropdownElement); // Di chuyển dropdown lên đầu phần phân trang
			const options = dropdownElement.querySelectorAll('option');
			options.forEach((option) => {
				option.text = option.text + ' /trang'; // Thêm chữ "/trang" vào mỗi option
			});
		}

		// Kết nối ô tìm kiếm #search-name với searchable của DataTable
		const searchNameInput = document.querySelector('#search-name');
		if (searchNameInput) {
			searchNameInput.addEventListener('input', () => {
				const value = searchNameInput.value.trim();
				if (dataTable) {
					dataTable.search(value);
				}
			});
			// Kích hoạt tìm kiếm ngay khi trang tải nếu #search-name có giá trị
			if (searchNameInput.value.trim() !== '') {
				const value = searchNameInput.value.trim();
				dataTable.search(value); // Kích hoạt tìm kiếm
			}
		}

		// Gắn input ẩn cho các bộ lọc theo cột
		const filterInputs = {
			code: document.querySelector('#filter-code'),
			trading: document.querySelector('#filter-trading'),
			major: document.querySelector('#filter-major'),
		};

		const selects = {
			code: document.querySelector('#search-code'),
			trading: document.querySelector('#search-trading'),
			major: document.querySelector('#search-major'),
		};

		Object.keys(selects).forEach((key) => {
			const select = selects[key];
			const input = filterInputs[key];

			if (select && input) {
				select.addEventListener('change', () => {
					input.value = select.value.trim();
				});
			}
		});

		// Thêm chức năng lọc AND khi nhấn nút #search_cophieu
		const searchButton = document.querySelector('#search_cophieu');
		if (searchButton) {
			searchButton.addEventListener('click', () => {
				// Tạo danh sách các điều kiện lọc
				const queries = [];
				const filterValues = {
					code: filterInputs.code.value.trim().toLowerCase(),
					trading: filterInputs.trading.value.trim().toLowerCase(),
					major: filterInputs.major.value.trim().toLowerCase(),
				};

				// Thêm điều kiện lọc cho từng cột
				if (filterValues.code) {
					queries.push({ terms: [filterValues.code], columns: [0] }); // Lọc theo cột "Mã CK" (cột 0)
				}
				if (filterValues.trading) {
					queries.push({
						terms: [filterValues.trading],
						columns: [2],
					}); // Lọc theo cột "Sàn" (cột 2)
				}
				if (filterValues.major) {
					queries.push({ terms: [filterValues.major], columns: [3] }); // Lọc theo cột "Ngành" (cột 3)
				}

				// Gọi hàm multiSearch để thực hiện lọc
				dataTable.multiSearch(queries);

				// Hiển thị thông báo nếu không có dữ liệu phù hợp
				const visibleRows = dataTable.activeRows;
				const noDataMessage =
					document.querySelector('#no-data-message');
				if (visibleRows.length === 0) {
					if (!noDataMessage) {
						const message = `<tr id="no-data-message"><td colspan="9" class="text-center">Không tìm thấy dữ liệu!</td></tr>`;
						document.querySelector('#ttcp-table tbody').innerHTML =
							message;
					}
				} else if (noDataMessage) {
					noDataMessage.remove();
				}
			});
		}
		// Thêm chức năng Reset
		const resetButton = document.querySelector('#reset-ttcp');
		if (resetButton) {
			resetButton.addEventListener('click', () => {
				// Xóa tất cả các giá trị trong bộ lọc
				if (searchNameInput) searchNameInput.value = '';
				Object.keys(filterInputs).forEach((key) => {
					const input = filterInputs[key];
					const select = selects[key];
					if (input) input.value = '';
					if (select) select.value = '';
				});

				// Reset lại DataTable về trạng thái ban đầu
				dataTable.search(''); // Xóa tìm kiếm toàn bảng
				dataTable.multiSearch([]); // Xóa tất cả các bộ lọc
				dataTable.update(); // Cập nhật lại bảng

				// Xóa thông báo "Không tìm thấy dữ liệu!" nếu có
				const noDataMessage =
					document.querySelector('#no-data-message');
				if (noDataMessage) {
					noDataMessage.remove();
				}
			});
		}
	}

	function handleSearch() {
		$('#search-shares').on('focus', function () {
			if (!$('#cp').is(':checked')) {
				return; 
			}
	
			$.ajax({
				url: ajaxurl.ajaxurl,
				type: 'POST',
				data: {
					action: 'get_shares_data',
					security: ajaxurl.security,
				},
				success: function (response) {
					if (response.success) {
						const sharesResult = $('.shares-result');
						const noResults = sharesResult.find('.no-results');
						
						sharesResult.empty();
						sharesResult.append(noResults); 
	
						let hasResults = false;
	
						response.data.forEach(function (share) {
							sharesResult.append(
								`<li><a href="${share.link}" target="_blank">${share.name}</a></li>`
							);
							hasResults = true; 
						});
	
						if (hasResults) {
							noResults.addClass('hidden'); 
						} else {
							noResults.removeClass('hidden'); 
						}
	
						sharesResult.addClass('active'); 
					} else {
						console.error('Error: ', response.data);
					}
				},
				error: function (xhr, status, error) {
					console.error('AJAX Error: ', error);
				},
			});
		});
	
		$('#search-shares').on('keyup', function () {
			const searchValue = $(this).val().toLowerCase(); 
			const sharesResult = $('.shares-result');
			const noResults = sharesResult.find('.no-results');
			let hasResults = false;
	
			sharesResult.find('li').not('.no-results').each(function () {
				const shareName = $(this).text().toLowerCase(); 
				if (shareName.includes(searchValue)) {
					$(this).show(); 
					hasResults = true;
				} else {
					$(this).hide(); 
				}
			});
	
			if (!hasResults) {
				noResults.removeClass('hidden'); 
			} else {
				noResults.addClass('hidden'); 
			}
		});
	
		$(document).on('click', function (e) {
			if (!$(e.target).closest('.shares-result, #search-shares').length) {
				$('.shares-result').removeClass('active');
			}
		});
	}
	
})(jQuery);
