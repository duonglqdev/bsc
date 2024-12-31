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
		toggle_content_baocao();
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
		collapseChart();
		//
		handleDatatables();
		//
		handleSearch();
		sameHeight();
		resetForm();
		centerActiveMenu();
		handleLoading();
		bsc_need_crawl_price();
	});

	function menuMobile() {
		$('.bar_mobile').click(function () {
			$('.main_menu-navbar').toggleClass('active');
			$('html').toggleClass('overflow-hidden');
			$('header').toggleClass('mobile-open');
		});
		$('.close-mobile').click(function () {
			$('.main_menu-navbar').removeClass('active');
			$('html').removeClass('overflow-hidden');
			$('header').removeClass('mobile-open');
		});

		$('.main_menu-navbar li.menu-item-has-children>ul').before(
			`<span class="li-plus"></span>`
		);

		if ($('.li-plus').length) {
			$('.li-plus').click(function (e) {
				$(this).toggleClass('clicked');
				$(this).parent('li').toggleClass('active');
				$(this).next('.sub-menu').slideToggle(200);
				$(this)
					.parent()
					.siblings()
					.removeClass('active')
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

	window.bsc_number_format = function (input) {
		// Kiểm tra nếu input là số hợp lệ
		if (!isNaN(input) && isFinite(input)) {
			// Ép kiểu về số và làm tròn đến 2 chữ số thập phân
			let num = parseFloat(input).toFixed(2);
			// Định dạng số với dấu phẩy
			return parseFloat(num).toLocaleString('en-US');
		} else {
			return '-';
		}
	};

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

		if ($('.community_content-bg').hasClass('pc')) {
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
		} else {
			$('.community_content-list').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false,
				arrows: false,
				fade: true,
			});
		}

		$('.community_nav-item[data-index="1"]').addClass('active');
		$('.community_nav-item').on('click mouseenter', function () {
			var index = $(this).data('index');

			if ($('.community_content-bg').hasClass('pc')) {
				$('.community_content-bg').slick('slickGoTo', index);
			}

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

		var $bannerElement = $('.home__banner');

		if ($bannerElement.length) {
			var autoPlayIntervals = [];
			$bannerElement.find('.block_slider-item').each(function () {
				var playTime = parseInt($(this).data('play')) || 4000;
				autoPlayIntervals.push(playTime);
			});

			var $carousel = $bannerElement.flickity({
				draggable: true,
				wrapAround: true,
				imagesLoaded: true,
				prevNextButtons: false,
				pageDots: true,
				cellAlign: 'left',
				contain: true,
				autoPlay: autoPlayIntervals[0],
				selectedAttraction: 0.01,
				friction: 0.2,
			});

			var flkty = $carousel.data('flickity');

			$carousel.on('select.flickity', function () {
				flkty.options.autoPlay =
					autoPlayIntervals[flkty.selectedIndex] || 4000;
				flkty.playPlayer();
			});
		}
	}

	function setHeightBanner() {
		if ($('.home__banner').hasClass('pc')) {
			function updateBannerHeight() {
				var headerHeight = $('header').outerHeight();
				var bannerHeight = $(window).height() - headerHeight;
				$('.home__banner, .home__banner .block_slider-item').css(
					'height',
					bannerHeight + 'px'
				);
			}
			updateBannerHeight();
			$(window).resize(updateBannerHeight);
		}
	}

	function filter_details_symbol(section_api, type_form, symbol) {
		$.ajax({
			url: ajaxurl.ajaxurl,
			type: 'POST',
			data: {
				action: 'filter_details_symbol',
				symbol: symbol,
				type_form: type_form,
				security: ajaxurl.security,
			},
			beforeSend: function () {
				$(section_api).find('.hidden').removeClass('hidden');
			},
			success: function (response) {
				$(section_api).html(response);
			},
			complete: function () {
				var check_chart = $(section_api).attr('data-chart');
				if (check_chart) {
					// Tách chuỗi thành mảng các tên hàm, loại bỏ khoảng trắng thừa
					var chartFunctions = check_chart
						.split(',')
						.map(function (fn) {
							return fn.trim();
						});

					chartFunctions.forEach(function (functionName) {
						if (typeof window[functionName] === 'function') {
							window[functionName]();
							if (functionName === 'running_chart') {
								setTimeout(function () {
									window['running_chart']();
								}, 1000);
							}
						}
					});
				}
			},
		});
	}
	if (document.querySelector('.bsc-ajax-api')) {
		// Lấy tất cả các div có class "bsc-ajax-api"
		var apiElements = document.querySelectorAll('.bsc-ajax-api');

		// Lặp qua từng phần tử và gọi hàm filter_details_symbol với data-api tương ứng
		apiElements.forEach(function (element) {
			var type_form = element.getAttribute('data-api');
			var symbol = element.getAttribute('data-symbol');
			// Thay if (dataApi) bằng if (type_form) hoặc kiểm tra biến bạn muốn
			if (type_form) {
				filter_details_symbol($(element), type_form, symbol);
			}
		});
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
		$(document).on(
			'click',
			'.customtab-nav li button,.customtab-nav li a:not(.none-tab)',
			function (e) {
				e.preventDefault();
				var target = $(this).attr('data-tabs');
				var check_ajax = $(this).attr('data-ajax');
				var check_api = $(this).attr('data-api');
				var symbol = $(this).attr('data-symbol');
				$(this)
					.closest('.customtab-nav')
					.find('button')
					.removeClass('active');
				$(this).addClass('active');
				$(target).fadeIn('slow').siblings('.tab-content').hide();

				if ($(this).closest('.customtab-nav').hasClass('has-line')) {
					moveLine($(this));
				}
				if (check_ajax === 'true') {
					filter_details_symbol(target, check_api, symbol);
					$(this).removeAttr('data-ajax');
				}
				return false;
			}
		);

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

	function handleChart(seriesData, yAxisOptions) {
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
					animations: {
						enabled: false,
					},
				},
				series: seriesData,
				xaxis: {
					type: 'datetime',
					categories: timestamps,
					labels: {
						formatter: function (val, index) {
							// Hiển thị nhãn tại các mốc theo quy tắc tickInterval
							// if (index % tickInterval === 0) {
							return new Date(val).toLocaleDateString('en-GB', {
								year: 'numeric',
								month: 'short',
								day: dateFormatter.includes('dd')
									? 'numeric'
									: undefined,
							});
							// } else {
							// 	return ''; // Không hiển thị nhãn nếu không thỏa mãn khoảng cách
							// }
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
					markers: {
						width: 8,
						height: 8,
					},
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
	}

	function aboutUsSlider() {
		$('.about_history-content').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			autoplay: false,
			fade: true,
			asNavFor: '.about_history-nav',
			adaptiveHeight: true,
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

		var $aboutHistoryNav = $('.about_history-nav');
		var totalItems = $aboutHistoryNav.slick('getSlick').slideCount;

		if ($aboutHistoryNav.hasClass('mb')) {
			if (totalItems <= 3) {
				$aboutHistoryNav.find('.slick-track').addClass('no-transform');
			}
		} else {
			if (totalItems <= 5) {
				$aboutHistoryNav.find('.slick-track').addClass('no-transform');
			}
		}

		$aboutHistoryNav.slick('slickGoTo', totalItems - 1);

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
					breakpoint: 767,
					settings: {
						slidesToShow: 4,
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

		var $ItemsAwardNav = $('.about_award-nav');
		var totalItemsAward = $ItemsAwardNav.slick('getSlick').slideCount;

		if ($ItemsAwardNav.hasClass('mb')) {
			if (totalItemsAward <= 4) {
				$ItemsAwardNav.find('.slick-track').addClass('no-transform');
			}
		} else {
			if (totalItemsAward <= 5) {
				$ItemsAwardNav.find('.slick-track').addClass('no-transform');
			}
		}

		$ItemsAwardNav.slick('slickGoTo', totalItemsAward - 1);

		var mySwiper = new Swiper('.about_culture-list-pc', {
			loop: true,
			speed: 1000,
			autoplay: {
				delay: 4000,
			},
			effect: 'coverflow',
			grabCursor: true,
			centeredSlides: true,
			slidesPerView: 2,
			coverflowEffect: {
				rotate: 0,
				stretch: 167,
				depth: 300,
				modifier: 1,
				slideShadows: false,
			},
		});
		document
			.querySelectorAll('.about_culture-list-pc .swiper-slide')
			.forEach((slide) => {
				slide.addEventListener('mouseenter', function () {
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

		var swiper = new Swiper('.about_culture-list-mb', {
			loop: true,
			slidesPerView: 1,
			centeredSlides: true,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				dynamicBullets: true,
			},
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

		$('.collapse-footer').click(function () {
			$(this).find('svg').toggleClass('rotate-180');
			$(this).next().slideToggle();
		});
		$('.form-search-result button[type="reset"]').on('click', function (e) {
			e.preventDefault();
			$('.form-search-result .form-search-input').val('');
		});

		$('.news-collapse').click(function () {
			$(this).next().slideToggle();
			$(this).children('svg').toggleClass('rotate-180');
		});
		$('.open-search').click(function () {
			$('.form-search-mb').toggleClass('active');
		});
		$('.toggle-form').click(function () {
			$(this).find('div').toggle().find('svg');
			$(this).next().slideToggle();
		});

		$(document).click(function (event) {
			if (
				!$(event.target).closest('.form-search-mb, .open-search').length
			) {
				$('.form-search-mb').removeClass('active');
			}
		});

		$('.news-dropdown__list li').on('click', function () {
			$('.news-dropdown__list li').removeClass('active');
			$(this).addClass('active');
			var itemValue = $(this).children().data('value');
			$('.news-dropdown-selected')
				.text($(this).text())
				.attr('data-value', itemValue);
			$(this).parent('.news-dropdown__list').toggleClass('active');
		});

		$('.show-item-btn').click(function () {
			$(this).prev('.grid').toggleClass('show-4-item');
			$(this).find('span').toggle();
		});
		$('.toggle-next').click(function () {
			$(this).next().toggleClass('active');
			$(this).find('svg').toggleClass('rotate-180');
		});
	}

	window.toggle_content_baocao = function () {
		$('.collapse-item.has-children > div > h3').click(function name() {
			$(this).parent().siblings('.sub-collapse').slideToggle();
			$(this).toggleClass('active').find('svg').toggleClass('rotate-180');
		});
	};

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
		$(document).on('click', '.document_item-popup', function (e) {
			if ($('#document-modal').hasClass('hidden')) {
				$('.trigger-button_document').trigger('click');
			}
			var documentLink = $(this).data('doccument');
			var id_post = $(this).data('id');
			var newstype = $(this).data('newstype');
			var title = $(this).find('.main_title').html();
			$.ajax({
				url: ajaxurl.ajaxurl,
				type: 'POST',
				data: {
					action: 'get_content_qhcd',
					id_post: id_post,
					newstype: newstype,
					security: ajaxurl.security,
				},
				beforeSend: function () {
					if (documentLink) {
						$('#document-modal .document-modal-link').addClass(
							'show'
						);
						$('#document-modal .document-modal-link').attr(
							'href',
							documentLink
						);
					} else {
						$('#document-modal .document-modal-link').addClass(
							'hidden'
						);
					}
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

		function handleScroll() {
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
		}

		function handleResize() {
			if (window.innerWidth >= 1024) {
				window.addEventListener('scroll', handleScroll);
			} else {
				window.removeEventListener('scroll', handleScroll);
				document.querySelector('header').classList.remove('active');
			}
		}

		window.addEventListener('resize', handleResize);

		handleResize();
	}

	function livechat() {
		jQuery(document).ready(function () {
			jQuery("a[href='#livechat']").click(function () {
				if ($('#ib-button-messaging').length) {
					liveChat('show');
					jQuery('#ib-button-messaging').show();
				} else if ($('#custom-chatroom-widget-wrapper').length) {
					chatroom_widget_toggle();
				}
			});
		});
		if ($('#ib-button-messaging').length) {
			liveChat('hide');
			jQuery(document).on('click', '#ib-button-messaging', function () {
				jQuery('#ib-button-messaging').css('display', 'none');
			});
		}
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
						mainTicker.x -= 0.8; // Điều chỉnh giá trị này để thay đổi tốc độ
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
		function load__chuyen_gia(paged = 1) {
			var thanh_pho = $(
				'.list_chuyen_gia input[name="thanh_pho"]:checked'
			).val();
			if ($('#form-search-expert').attr('data-scale') == 'pc') {
				var kinh_nghiem = $('#form-search-expert #kinh_nghiem').val();
				var menh = $('#form-search-expert #menh').val();
				var trinh_do_hoc_van = $(
					'#form-search-expert #trinh_do_hoc_van'
				).val();
				var name_chuyen_gia = $(
					'#form-search-expert #name_chuyen_gia'
				).val();
			} else {
				var kinh_nghiem = [];
				$('#form-search-expert #kinh_nghiem input:checked').each(
					function () {
						kinh_nghiem.push($(this).val());
					}
				);
				var menh = [];
				$('#form-search-expert #menh input:checked').each(function () {
					menh.push($(this).val());
				});
				var trinh_do_hoc_van = [];
				$('#form-search-expert #trinh_do_hoc_van input:checked').each(
					function () {
						trinh_do_hoc_van.push($(this).val());
					}
				);
			}
			var name_chuyen_gia = $(
				'#form-search-expert #name_chuyen_gia'
			).val();
			if (paged) {
				$('#form-search-expert').attr('data-paged', paged);
			} else {
				var paged = $('#form-search-expert').attr('data-paged');
			}
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
			e.preventDefault();
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
			handleChart(chartData, newYAxisOptions);
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

		window.running_chart = function () {
			if ($('#chart').length) {
				const initialDateRange = get_current_date_chart();
				var stocksData = $('#chart').attr('data-stock');
				var fromdate = $('#chart').attr('data-fromdate');
				var first_bsc = $(
					'section.chart .btn-chart button[data-stt="1"]'
				).attr('data-chart');
				if (fromdate) {
					jQuery('#datepicker-performance-start').val(fromdate);
				}
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
					first_bsc,
					initialDateRange,
					stocksData,
					maxYAxisValue,
					minYAxisValue
				);
			}
		};
		$(document).on(
			'click',
			'section.chart .btn-chart button',
			function (e) {
				const chart_name = jQuery(this).attr('data-chart');
				if (chart_name) {
					jQuery('section.chart .btn-chart button').removeClass(
						'active'
					);
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
			}
		);
		$(document).on(
			'click',
			'section.chart #chart_btn-reload',
			function (e) {
				var fromdate = jQuery('#chart').attr('data-fromdate');
				var todate = jQuery(this).attr('data-todate');
				jQuery('section.chart .fromdate').val(fromdate);
				jQuery('section.chart .todate').val(todate);
				jQuery('section.chart .btn-chart button[data-stt="1"]').trigger(
					'click'
				);
			}
		);
		let debounceTimer;
		const debounceDelay = 1000;
		jQuery('section.chart .fromdate,section.chart  .todate').on(
			'changeDate',
			function () {
				var first_bsc = $(
					'section.chart .btn-chart button[data-stt="1"]'
				).attr('data-chart');
				clearTimeout(debounceTimer);
				debounceTimer = setTimeout(function () {
					const activeChart =
						jQuery('section.chart .btn-chart button.active').data(
							'chart'
						) || first_bsc;
					const fromDate = jQuery('section.chart .fromdate').val();
					const toDate = jQuery('section.chart .todate').val();
					const portcodeAttr = jQuery('#chart').attr('data-array');
					let portcode;
					try {
						portcode = JSON.parse(portcodeAttr); // Giải mã chuỗi JSON
					} catch (error) {
						portcode = []; // Mặc định là mảng rỗng nếu lỗi
					}
					portcode = Array.isArray(portcode)
						? portcode.join(',')
						: portcode;

					const time_cache = jQuery('#chart').attr('data-time_cache');
					jQuery.ajax({
						url: ajaxurl.ajaxurl,
						type: 'POST',
						data: {
							action: 'fetch_portfolio_data',
							fromdate: fromDate,
							todate: toDate,
							portcode: portcode,
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
		$(document).on('click', '.filter-table', function () {
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
				var cellA = $(rowA).children().eq(headerIndex).text().trim();
				var cellB = $(rowB).children().eq(headerIndex).text().trim();
	
				// Hàm chuyển đổi chuỗi thành số chuẩn
				function parseNumber(value) {
					// Loại bỏ các dấu phẩy và chuyển về số float
					return parseFloat(value.replace(/,/g, ''));
				}
	
				// Kiểm tra xem nội dung cột là số hay chữ
				var a = $.isNumeric(cellA.replace(/,/g, '')) ? parseNumber(cellA) : cellA;
				var b = $.isNumeric(cellB.replace(/,/g, '')) ? parseNumber(cellB) : cellB;
	
				if (a < b) return isAscending ? 1 : -1;
				if (a > b) return isAscending ? -1 : 1;
				return 0;
			});
	
			// Xóa nội dung hiện tại của tbody và thêm các hàng đã sắp xếp
			$tbody.empty().append($rows);
		});
	}

	function forecastChart() {
		const chartElement = document.querySelector('#chart-forecast');
		if (chartElement) {
			// Lấy dữ liệu từ data-stock
			const stockData = JSON.parse(
				chartElement.getAttribute('data-stock')
			);
			let categories = stockData.map((item) =>
				new Date(item.date).getTime()
			); // Lấy danh sách ngày dưới dạng timestamp
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
				kbDates.push(nextDate.getTime()); // Lấy timestamp thay vì định dạng YYYY-MM-DD
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
				// < 7 ngày: Hiển thị mỗi ngày một mốc
				tickInterval = 1;
				dateFormatter = 'dd MMM yyyy';
			} else if (
				extendedCategories.length > 7 &&
				extendedCategories.length <= 30
			) {
				// > 7 ngày và < 30 ngày: Hiển thị mỗi 5 ngày một mốc
				tickInterval = 5;
				dateFormatter = 'dd MMM yyyy';
			} else if (
				extendedCategories.length > 30 &&
				extendedCategories.length <= 365
			) {
				// > 30 ngày và < 1 năm: Hiển thị mỗi tháng một mốc
				tickInterval = 30;
				dateFormatter = 'MMM yyyy';
			} else {
				// > 1 năm: Hiển thị mỗi 3 tháng một mốc
				tickInterval = 90;
				dateFormatter = 'MMM yyyy';
			}
			const options = {
				chart: {
					type: 'line',
					height: 344,
					toolbar: { show: false },
				},
				title: {
					text: chartElement.getAttribute('data-title'),
					align: 'center',
					style: {
						fontSize: '18px',
						fontWeight: 'bold',
						color: '#235BA8',
						fontFamily: 'Barow',
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
						dashArray: 2,
						color: '#30D158',
					},
					{
						name: chartElement.getAttribute('data-kb1'), // KB1 (Giảm)
						data: kb1Series,
						dashArray: 2,
						color: '#FF0017',
					},
				],
				xaxis: {
					type: 'datetime',
					categories: extendedCategories,
					labels: {
						formatter: function (val, index) {
							// Hiển thị nhãn tại các mốc theo quy tắc tickInterval
							// if (index % tickInterval === 0) {
							return new Date(val).toLocaleDateString('en-GB', {
								year: 'numeric',
								month: 'short',
								day: dateFormatter.includes('dd')
									? 'numeric'
									: undefined,
							});
							// } else {
							// 	return ''; // Không hiển thị nhãn nếu không thỏa mãn khoảng cách
							// }
						},
						rotate: -45,
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
					width: [2, 2, 2],
					curve: 'smooth',
				},
				annotations: {
					yaxis: [
						{
							y: kb2Value,
							borderColor: '#30D158',
							borderWidth: 3,
							label: {
								borderColor: '#30D158',
								style: {
									color: '#fff',
									background: '#30D158',
								},
								text: 'KB2:' + kb2Value,
							},
						},
						{
							y: kbcoso,
							borderColor: '#FEAF00',
							borderWidth: 3,
							label: {
								borderColor: '#FEAF00',
								style: {
									color: '#fff',
									background: '#FEAF00',
								},
								text:
									chartElement.getAttribute('data-coso') +
									':' +
									kbcoso,
							},
						},
						{
							y: kb1Value,
							borderColor: '#FF0017',
							borderWidth: 3,
							label: {
								borderColor: '#FF0017',
								style: {
									color: '#fff',
									background: '#FF0017',
								},
								text: 'KB1:' + kb1Value,
							},
						},
					],
				},
				colors: ['#008FFB', '#30D158', '#FF0017'],
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

	function formatDateToQuarterOrYear(dates) {
		const formattedDates = dates.map((date) => {
			const [year, month] = date.split('-').map(Number);

			if (month === 3 || month === 6 || month === 9 || month === 12) {
				const quarter = Math.ceil(month / 3);
				return `Q${quarter}.${year}`;
			}

			if (month === 12 && date.endsWith('-12-31')) {
				return year.toString();
			}

			return date;
		});

		// Kiểm tra nếu tất cả các ngày là Q4.xxxx
		const allAreQ4 = formattedDates.every((item) => item.startsWith('Q4.'));
		if (allAreQ4) {
			return formattedDates.map((item) => item.replace('Q4.', '')); // Loại bỏ Q4 nếu tất cả đều là Q4
		}

		return formattedDates;
	}

	window.profitChart = function () {
		if ($('.bsc_chart-display').length) {
			$('.bsc_chart-display').each(function () {
				if ($(this).attr('data-load') == 'false') {
					try {
						// Parse dữ liệu từ HTML attributes
						const data1 = JSON.parse(
							$(this).attr('data-1') || '[]'
						);
						const data2 = $(this).attr('data-2')
							? JSON.parse($(this).attr('data-2'))
							: null;
						const end_ch = $(this).attr('data-end') || '';
						const type_chart = $(this).attr('data-type') || 'line';
						const title1 = $(this).attr('data-title-1');
						const title2 = $(this).attr('data-title-2') || null;
						const color1 = $(this).attr('data-color-1');
						const color2 = $(this).attr('data-color-2') || null;

						// Kết hợp ngày và giá trị
						const combinedData1 = data1.map((item) => ({
							date: item.date,
							value: item.value,
						}));
						const combinedData2 = data2
							? data2.map((item) => ({
									date: item.date,
									value: item.value,
								}))
							: null;

						// Sắp xếp dữ liệu
						combinedData1.sort(
							(a, b) => new Date(a.date) - new Date(b.date)
						);
						if (combinedData2) {
							combinedData2.sort(
								(a, b) => new Date(a.date) - new Date(b.date)
							);
						}

						// Tách ngày và giá trị
						const dates = combinedData1.map((item) => item.date);
						const formattedDates = formatDateToQuarterOrYear(dates); // Chuyển đổi ngày
						const values1 = combinedData1.map((item) => item.value);
						const values2 = combinedData2
							? combinedData2.map((item) => item.value)
							: [];

						// Cấu hình series
						const series = [{ name: title1, data: values1 }];
						if (data2) {
							series.push({ name: title2, data: values2 });
						}
						const dataLabelsConfig =
							type_chart === 'bar'
								? {
										enabled: true,
										offsetY: -20,
										style: {
											fontSize: '12px',
											colors: ['#31333F'],
										},
									}
								: { enabled: false }; // Nếu không phải bar thì tắt dataLabels
						// Cấu hình biểu đồ
						const chartOptions = {
							chart: {
								type: type_chart,
								height: 278,
								toolbar: { show: false },
							},
							plotOptions: {
								bar: {
									borderRadius: 8,
									borderRadiusApplication: 'end',
									dataLabels: {
										position: 'top',
									},
								},
							},

							dataLabels: dataLabelsConfig,
							series: series,
							xaxis: {
								categories: formattedDates, // Sử dụng ngày đã chuyển đổi
								labels: {
									style: {
										fontSize: '14px',
										colors: '#4A5568',
									},
									rotate: -45,
								},
							},
							yaxis: {
								labels: {
									formatter: function (val) {
										return val + end_ch;
									},
								},
							},
							colors: data2 ? [color1, color2] : [color1],
							markers: {
								size: 0,
							},
							stroke:
								type_chart === 'bar'
									? { show: false }
									: {
											curve: 'smooth',
											width: 2,
										},
							grid: {
								show: true,
								yaxis: { lines: { show: false } },
							},
							legend: {
								position: 'top',
								horizontalAlign: 'left',
								labels: { colors: '#4A5568' },
								markers: {
									width: 8,
									height: 8,
									radius: 2,
								},
							},
							tooltip: {
								shared: true,
								intersect: false,
								y: {
									formatter: function (val) {
										return val.toFixed(2) + end_ch;
									},
								},
							},
						};

						// Render biểu đồ
						const chartContainer =
							$('<div>').addClass('chart-container');
						$(this).append(chartContainer);

						const chart = new ApexCharts(
							chartContainer[0],
							chartOptions
						);
						chart.render();
					} catch (error) {
						console.error('Error parsing JSON data:', error);
					}
					$(this).attr('data-load', 'true');
				}
			});
		}
	};

	window.collapseChart = function () {
		if (document.querySelector('.collapse-item-chart')) {
			$('.collapse-item-chart').each(function () {
				if ($(this).attr('data-load') == 'false') {
					try {
						const color = $(this).attr('data-color');
						const stockData = $(this).attr('data-stock');
						let stockArray = stockData.split(',');
						stockArray = stockArray.map(function (item) {
							return parseFloat(item); // hoặc parseInt(item)
						});
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
									data: stockArray,
								},
							],
							xaxis: {
								categories: [],
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
								colors: color,
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
											color: color,
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

						var chart = new ApexCharts(this, options);
						chart.render();
					} catch (error) {
						console.error('Error parsing JSON data:', error);
					}
					$(this).attr('data-load', 'true');
				}
			});
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
	};

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
			perPage: 10,
			perPageSelect: [10, 20, 30, 40],
			sortable: false,
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

	let isAjaxInProgress = false;
	let globalShares = [];
	window.onchangeInstrument = function (symbol, wrapper_price) {
		var CONNECTION_METADATA_PARAMS = {
			version: '__sails_io_sdk_version',
			platform: '__sails_io_sdk_platform',
			language: '__sails_io_sdk_language',
		};

		var SDK_INFO = {
			version: '1.2.1',
			platform: typeof module === 'undefined' ? 'browser' : 'node',
			language: 'javascript',
		};
		var queryString = '';
		var receiveCount = 0;
		Object.keys(CONNECTION_METADATA_PARAMS).map((key) => {
			queryString +=
				'&' + CONNECTION_METADATA_PARAMS[key] + '=' + SDK_INFO[key];
		});
		if (queryString.length > 0)
			queryString = queryString.slice(-(queryString.length - 1));
		const socket = io('https://priceapi.bsc.com.vn', {
			path: '/market/socket.io',
			transports: ['websocket'],
			query: queryString,
			autoConnect: false,
		});

		socket.connect();
		socket.on('disconnect', (reason) => {
			setTimeout(() => {
				socket.connect();
				socket.emit('get', {
					method: 'get',
					headers: {},
					data: {
						op: 'subscribe',
						args: ['i:' + symbol],
					},
					url: '/client/subscribe',
				});
			}, 5000);
		});

		socket.emit('get', {
			method: 'get',
			headers: {},
			data: {
				op: 'subscribe',
				args: ['i:' + symbol],
			},
			url: '/client/subscribe',
		});

		socket.on('i', function (msg) {
			console.log('/////i///////', msg.d);
			if (Array.isArray(msg.d) && msg.d.length > 0) {
				const share = msg.d[0];
				if (
					share.EX &&
					wrapper_price.find('.bsc_need_crawl_price-exchange')
						.length > 0
				) {
					var exchange_title = share.EX;
					wrapper_price
						.find('.bsc_need_crawl_price-exchange')
						.html(exchange_title);
				}
				if (
					share.B1 &&
					wrapper_price.find('.bsc_need_crawl_price-bidPrice1')
						.length > 0
				) {
					var bidPrice1_title = share.B1;
					bidPrice1_title = bsc_number_format(bidPrice1_title / 1000);
					wrapper_price
						.find('.bsc_need_crawl_price-bidPrice1')
						.html(bidPrice1_title);
				}
				if (
					share.CL &&
					wrapper_price.find('.bsc_need_crawl_price-ceiling').length >
						0
				) {
					var ceiling_title = share.CL;
					ceiling_title = bsc_number_format(ceiling_title / 1000, 2);
					wrapper_price
						.find('.bsc_need_crawl_price-ceiling')
						.html(ceiling_title);
				}
				if (
					share.RE &&
					wrapper_price.find('.bsc_need_crawl_price--reference')
						.length > 0
				) {
					var reference_title = share.RE;
					reference_title = bsc_number_format(
						reference_title / 1000,
						2
					);
					wrapper_price
						.find('.bsc_need_crawl_price--reference')
						.html(reference_title);
				}
				if (
					share.HI &&
					wrapper_price.find('.bsc_need_crawl_price-high').length > 0
				) {
					var high_title = share.HI;
					high_title = bsc_number_format(high_title / 1000, 2);
					wrapper_price
						.find('.bsc_need_crawl_price-high')
						.html(high_title);
				}
				if (
					share.LO &&
					wrapper_price.find('.bsc_need_crawl_price-low').length > 0
				) {
					var low_title = share.LO;
					low_title = bsc_number_format(low_title / 1000, 2);
					wrapper_price
						.find('.bsc_need_crawl_price-low')
						.html(low_title);
				}
				if (
					share.FL &&
					wrapper_price.find('.bsc_need_crawl_price-floor').length > 0
				) {
					var floor_title = share.FL;
					floor_title = bsc_number_format(floor_title / 1000, 2);
					wrapper_price
						.find('.bsc_need_crawl_price-floor')
						.html(floor_title);
				}
				if (
					share.AP &&
					wrapper_price.find('.bsc_need_crawl_price-averagePrice')
						.length > 0
				) {
					var averagePrice_title = share.AP;
					averagePrice_title = bsc_number_format(
						averagePrice_title / 1000,
						2
					);
					wrapper_price
						.find('.bsc_need_crawl_price-averagePrice')
						.html(averagePrice_title);
				}
				if (
					share.CP &&
					wrapper_price.find('.bsc_need_crawl_price-closePrice')
						.length > 0
				) {
					var closePrice_title = share.CP;
					closePrice_title = bsc_number_format(
						closePrice_title / 1000,
						2
					);
					wrapper_price
						.find('.bsc_need_crawl_price-closePrice')
						.html(closePrice_title);
				}
				if (
					share.CV &&
					wrapper_price.find('.bsc_need_crawl_price-closeVol')
						.length > 0
				) {
					var closeVol_title = share.CV;
					closeVol_title = bsc_number_format(
						closeVol_title / 1000,
						2
					);
					wrapper_price
						.find('.bsc_need_crawl_price-closeVol')
						.html(closeVol_title);
				}
				let text_color_class = '';
				if (
					share.CH ||
					(share.B1 && share.CE) ||
					(share.B1 && share.FL)
				) {
					const difference = share.CH;
					if (share.B1 && share.CE && share.B1 === share.CE) {
						text_color_class = 'text-[#7F1CCD]';
					} else if (share.B1 && share.FL && share.B1 === share.FL) {
						text_color_class = 'text-[#1ABAFE]';
					} else if (difference > 0) {
						text_color_class = 'text-[#1CCD83]';
					} else if (difference < 0) {
						text_color_class = 'text-[#FE5353]';
					} else if (difference === 0) {
						text_color_class = 'text-[#EB0]';
					}
					if (
						wrapper_price.find('.bsc_need_crawl_price-text-color')
							.length > 0
					) {
						const classesToRemove = [
							'text-[#7F1CCD]',
							'text-[#1ABAFE]',
							'text-[#1CCD83]',
							'text-[#FE5353]',
							'text-[#EB0]',
						];
						classesToRemove.forEach((className) => {
							wrapper_price
								.find('.bsc_need_crawl_price-text-color')
								.removeClass(className);
						});
						wrapper_price
							.find('.bsc_need_crawl_price-text-color')
							.addClass(text_color_class);
					}
					if (
						wrapper_price.find(
							'.bsc_need_crawl_price-bidPrice1-reference'
						).length > 0
					) {
						const formattedDifference = bsc_number_format(
							difference / 1000,
							2
						);
						wrapper_price
							.find('.bsc_need_crawl_price-bidPrice1-reference')
							.html(formattedDifference);
					}
				}
				if (share.CHP) {
					if (
						wrapper_price.find(
							'.bsc_need_crawl_price-bidPrice1-reference-phantram'
						).length > 0
					) {
						const formattedPercentage = bsc_number_format(
							share.CHP,
							2
						);
						wrapper_price
							.find(
								'.bsc_need_crawl_price-bidPrice1-reference-phantram'
							)
							.html(formattedPercentage + '%');
					}
				}
				if (wrapper_price.find('.bsc_need_crawl_date').length > 0) {
					const now = new Date();

					// Lấy thời gian ở 'Asia/Ho_Chi_Minh' sử dụng Intl.DateTimeFormat
					const formatter = new Intl.DateTimeFormat('en-US', {
						timeZone: 'Asia/Ho_Chi_Minh',
						hour: '2-digit',
						minute: '2-digit',
						second: '2-digit',
						hour12: false,
					});
					wrapper_price
						.find('.bsc_need_crawl_date')
						.html(formatter.format(now));
				}
			}
		});
	};
	window.bsc_need_crawl_price_display = function () {
		if ('.bsc_need_crawl_price'.length) {
			$('.bsc_need_crawl_price').each(function () {
				var symbol = $(this).attr('data-symbol');
				var check_socket = $(this).attr('data-socket');
				var wrapper_price = $(this);
				if (symbol) {
					const share = globalShares.find(
						(item) => item.symbol === symbol
					);
					if (share) {
						if (
							share.symbol &&
							wrapper_price.find('.bsc_need_crawl_price-symbol')
								.length > 0
						) {
							var symbol_title = share.symbol;
							wrapper_price
								.find('.bsc_need_crawl_price-symbol')
								.html(symbol_title);
						}
						if (
							share.exchange &&
							wrapper_price.find('.bsc_need_crawl_price-exchange')
								.length > 0
						) {
							var exchange_title = share.exchange;
							wrapper_price
								.find('.bsc_need_crawl_price-exchange')
								.html(exchange_title);
						}
						if (
							share.bidPrice1 &&
							wrapper_price.find(
								'.bsc_need_crawl_price-bidPrice1'
							).length > 0
						) {
							var bidPrice1_title = share.bidPrice1;
							bidPrice1_title = bsc_number_format(
								bidPrice1_title / 1000
							);
							wrapper_price
								.find('.bsc_need_crawl_price-bidPrice1')
								.html(bidPrice1_title);
						}
						if (
							share.ceiling &&
							wrapper_price.find('.bsc_need_crawl_price-ceiling')
								.length > 0
						) {
							var ceiling_title = share.ceiling;
							ceiling_title = bsc_number_format(
								ceiling_title / 1000,
								2
							);
							wrapper_price
								.find('.bsc_need_crawl_price-ceiling')
								.html(ceiling_title);
						}
						if (
							share.high &&
							wrapper_price.find('.bsc_need_crawl_price-high')
								.length > 0
						) {
							var high_title = share.high;
							high_title = bsc_number_format(
								high_title / 1000,
								2
							);
							wrapper_price
								.find('.bsc_need_crawl_price-high')
								.html(high_title);
						}
						if (
							share.reference &&
							wrapper_price.find(
								'.bsc_need_crawl_price--reference'
							).length > 0
						) {
							var reference_title = share.reference;
							reference_title = bsc_number_format(
								reference_title / 1000,
								2
							);
							wrapper_price
								.find('.bsc_need_crawl_price--reference')
								.html(reference_title);
						}
						if (
							share.low &&
							wrapper_price.find('.bsc_need_crawl_price-low')
								.length > 0
						) {
							var low_title = share.low;
							low_title = bsc_number_format(low_title / 1000, 2);
							wrapper_price
								.find('.bsc_need_crawl_price-low')
								.html(low_title);
						}
						if (
							share.floor &&
							wrapper_price.find('.bsc_need_crawl_price-floor')
								.length > 0
						) {
							var floor_title = share.floor;
							floor_title = bsc_number_format(
								floor_title / 1000,
								2
							);
							wrapper_price
								.find('.bsc_need_crawl_price-floor')
								.html(floor_title);
						}
						if (
							share.averagePrice &&
							wrapper_price.find(
								'.bsc_need_crawl_price-averagePrice'
							).length > 0
						) {
							var averagePrice_title = share.averagePrice;
							averagePrice_title = bsc_number_format(
								averagePrice_title / 1000,
								2
							);
							wrapper_price
								.find('.bsc_need_crawl_price-averagePrice')
								.html(averagePrice_title);
						}
						if (
							share.closePrice &&
							wrapper_price.find(
								'.bsc_need_crawl_price-closePrice'
							).length > 0
						) {
							var closePrice_title = share.closePrice;
							closePrice_title = bsc_number_format(
								closePrice_title / 1000,
								2
							);
							wrapper_price
								.find('.bsc_need_crawl_price-closePrice')
								.html(closePrice_title);
						}
						if (
							share.closeVol &&
							wrapper_price.find('.bsc_need_crawl_price-closeVol')
								.length > 0
						) {
							var closeVol_title = share.closeVol;
							closeVol_title = bsc_number_format(
								closeVol_title / 1000,
								2
							);
							wrapper_price
								.find('.bsc_need_crawl_price-closeVol')
								.html(closeVol_title);
						}
						if (share.reference && share.bidPrice1) {
							const difference =
								share.bidPrice1 - share.reference;
							let text_color_class = '';
							if (share.bidPrice1 == share.ceiling) {
								text_color_class = 'text-[#7F1CCD]';
							} else if (share.bidPrice1 == share.floor) {
								text_color_class = 'text-[#1ABAFE]';
							} else if (difference > 0) {
								text_color_class = 'text-[#1CCD83]';
							} else if (difference < 0) {
								text_color_class = 'text-[#FE5353]';
							} else if (difference === 0) {
								text_color_class = 'text-[#EB0]';
							}
							if (
								wrapper_price.find(
									'.bsc_need_crawl_price-text-color'
								).length > 0
							) {
								wrapper_price
									.find('.bsc_need_crawl_price-text-color')
									.addClass(text_color_class);
							}
							if (
								wrapper_price.find(
									'.bsc_need_crawl_price-bidPrice1-reference'
								).length > 0
							) {
								const formattedDifference = bsc_number_format(
									difference / 1000,
									2
								);
								wrapper_price
									.find(
										'.bsc_need_crawl_price-bidPrice1-reference'
									)
									.html(formattedDifference);
							}
							if (
								wrapper_price.find(
									'.bsc_need_crawl_price-bidPrice1-reference-phantram'
								).length > 0
							) {
								const formattedPercentage = bsc_number_format(
									(difference / share.reference) * 100,
									2
								);
								wrapper_price
									.find(
										'.bsc_need_crawl_price-bidPrice1-reference-phantram'
									)
									.html(formattedPercentage + '%');
							}
						}
						let text_color_class_price_changePercent = '';

						// Kiểm tra nếu share.changePercent tồn tại
						if (share.changePercent) {
							if (share.changePercent > 0) {
								// Nếu closeprice bằng ceiling
								if (share.closeprice === share.ceiling) {
									text_color_class_price_changePercent =
										'text-[#7F1CCD]';
								} else {
									text_color_class_price_changePercent =
										'text-[#1CCD83]';
								}
							} else if (share.changePercent < 0) {
								// Nếu closeprice bằng ceiling
								if (share.closeprice === share.ceiling) {
									text_color_class_price_changePercent =
										'text-[#1ABAFE]';
								} else {
									text_color_class_price_changePercent =
										'text-[#FE5353]';
								}
							} else {
								text_color_class_price_changePercent =
									'text-[#EB0]';
							}
						} else {
							text_color_class_price_changePercent =
								'text-[#EB0]';
						}
						if (
							wrapper_price.find('.bsc_need_crawl_price-closeVol')
								.length > 0
						) {
							wrapper_price
								.find('.bsc_need_crawl_price-closeVol')
								.addClass(text_color_class_price_changePercent);
						}
						if (
							wrapper_price.find(
								'.bsc_need_crawl_price-closePrice'
							).length > 0
						) {
							wrapper_price
								.find('.bsc_need_crawl_price-closePrice')
								.addClass(text_color_class_price_changePercent);
						}
						if (
							wrapper_price.find(
								'.bsc_need_crawl_price-text_color-closePrice'
							).length > 0
						) {
							const giakyvong = wrapper_price
								.find(
									'.bsc_need_crawl_price-text_color-closePrice'
								)
								.attr('data-giakyvong');
							// Kiểm tra và tính toán
							let text_color_class_price_closePrice = '';
							let before_text_closePrice = '';

							if (share.closePrice && giakyvong) {
								const expectedPrice = giakyvong * 1000; // Chuyển giakyvong về giá trị tính toán
								const difference =
									expectedPrice - share.closePrice;

								// Xác định class màu sắc
								if (difference > 0) {
									text_color_class_price_closePrice =
										'text-[#1CCD83]';
								} else if (difference < 0) {
									text_color_class_price_closePrice =
										'text-[#FE5353]';
								} else {
									text_color_class_price_closePrice =
										'text-[#EB0]';
								}

								// Tính toán before_text_closePrice nếu chênh lệch dương
								if (difference > 0) {
									before_text_closePrice =
										'+' +
										bsc_number_format(
											(difference / share.closePrice) *
												100,
											2
										) +
										'%';
								} else {
									before_text_closePrice = '';
								}
							} else {
								text_color_class_price_closePrice =
									'text-[#EB0]';
							}

							wrapper_price
								.find(
									'.bsc_need_crawl_price-text_color-closePrice'
								)
								.addClass(text_color_class_price_closePrice);
							wrapper_price
								.find(
									'.bsc_need_crawl_price-text_color-closePrice'
								)
								.html(before_text_closePrice);
						}
						if (
							wrapper_price.find('.bsc_need_crawl_date').length >
							0
						) {
							const now = new Date();

							// Lấy thời gian ở 'Asia/Ho_Chi_Minh' sử dụng Intl.DateTimeFormat
							const formatter = new Intl.DateTimeFormat('en-US', {
								timeZone: 'Asia/Ho_Chi_Minh',
								hour: '2-digit',
								minute: '2-digit',
								second: '2-digit',
								hour12: false,
							});
							wrapper_price
								.find('.bsc_need_crawl_date')
								.html(formatter.format(now));
						}
						if (
							wrapper_price.find(
								'.bsc_need_crawl_price-value_search'
							).length > 0
						) {
							let upside = share.changePercent; // Lấy giá trị changePercent từ share

							// Làm tròn giá trị upside
							if (upside >= 1) {
								upside = Math.round(upside); // Làm tròn đến số nguyên
							} else {
								upside = upside.toFixed(1); // Làm tròn đến 1 chữ số thập phân
							}

							// Xác định màu sắc và tiêu đề
							let bg_color_class = 'bg-[#1CCD83]';
							let title_symbol = '';

							if (share.changePercent > 0) {
								bg_color_class = 'bg-[#1CCD83]';
								title_symbol = `+${upside}%`;
							} else if (share.changePercent < 0) {
								bg_color_class = 'bg-[#FE5353]';
								title_symbol = `${upside}%`;
							} else if (share.changePercent === 0) {
								bg_color_class = 'bg-yellow-100';
								title_symbol = `+${upside}%`;
							}
							wrapper_price.addClass(bg_color_class);
							wrapper_price
								.find('.bsc_need_crawl_price-value_search')
								.html(title_symbol);
						}
					}
					if (check_socket === 'true') {
						onchangeInstrument(symbol, wrapper_price);
					}
				}
			});
		}
	};
	window.bsc_need_crawl_price = function () {
		if ('.bsc_need_crawl_price'.length) {
			running_api_price();
			sameHeight();
		}
	};
	window.running_api_price = function () {
		const sharesResult = $('.shares-result');
		const loader = sharesResult.find('.loader');
		loader.removeClass('hidden');

		if (isAjaxInProgress) {
			bsc_need_crawl_price();
		} else {
			isAjaxInProgress = true;
			$.ajax({
				url: slug_api_price + 'datafeed/instruments?stocktype=2',
				type: 'GET',
				contentType: 'application/json; charset=utf-8',
				dataType: 'JSON',
				success: function (data) {
					if (data && data.s === 'ok') {
						const noResults = sharesResult.find('.no-results');
						sharesResult.empty();
						sharesResult.append(noResults);

						let hasResults = false;
						const filteredShares = data.d.filter(
							(share) => share.StockType === '2'
						);
						filteredShares.forEach(function (share) {
							sharesResult.append(
								`<li><a href="${slug_co_phieu}${share.symbol}" target="_blank">${share.symbol}</a></li>`
							);
							hasResults = true;
						});
						globalShares = data.d;
						bsc_need_crawl_price_display();
						noResults.toggleClass('hidden', hasResults);
					}
					loader.addClass('hidden');
				},
			});
		}
	};
	window.handleSearch = function () {
		// Hàm kiểm tra nếu checkbox #cp được chọn
		function isCheckboxChecked() {
			return $('#cp').is(':checked');
		}
		// Khi focus vào #search-shares
		$('#search-shares').on('focus', function () {
			$('html').removeClass('scroll-pt-10');
			if (!isCheckboxChecked()) return;
			const sharesResult = $('.shares-result');

			sharesResult.addClass('active');
			running_api_price();
		});

		// Khi input thay đổi
		$('#search-shares').on('input', function () {
			if (!isCheckboxChecked()) return;

			if ($(this).val()) {
				$('html').removeClass('scroll-pt-10');
			}
		});

		// Khi keyup trên input
		$('#search-shares').on('keyup', function () {
			if (!isCheckboxChecked()) return;

			const searchValue = $(this).val().toLowerCase().trim();
			const sharesResult = $('.shares-result');
			const noResults = sharesResult.find('.no-results');
			const listItems = sharesResult.find('li').not('.no-results');
			let hasResults = false;

			// Tạo hai mảng: bắt đầu bằng searchValue và chứa searchValue
			const startsWith = [];
			const includes = [];

			listItems.each(function () {
				const shareName = $(this).text().toLowerCase().trim();

				// Phân loại kết quả
				if (shareName.startsWith(searchValue)) {
					startsWith.push($(this));
				} else if (shareName.includes(searchValue)) {
					includes.push($(this));
				}
			});

			// Gộp mảng và hiển thị kết quả theo đúng thứ tự
			const sortedResults = startsWith.concat(includes);
			listItems.hide(); // Ẩn toàn bộ kết quả trước
			sortedResults.forEach((item) => {
				item.show(); // Hiển thị các kết quả phù hợp
				hasResults = true;
			});

			// Hiển thị hoặc ẩn thông báo "không có kết quả"
			noResults.toggleClass('hidden', hasResults);
		});

		// Hover trên li của .shares-result
		$('.shares-result').on('mouseenter', 'li', function () {
			if (!isCheckboxChecked()) return;

			const value = $(this).find('a').text();
			$('#search-shares').val(value);
		});

		// Khi rời chuột khỏi .shares-result
		$('.shares-result').on('mouseleave', function () {
			if (!isCheckboxChecked()) return;

			$(this).removeClass('active');
			$('#search-shares').val('');
		});

		// Xử lý hover và focusin
		$(document).on('focus', '#search-shares', function () {
			if (!isCheckboxChecked()) return;

			$('.shares-result').addClass('active');
		});

		// Xử lý mouseleave và focusout
		$(document).on(
			'mouseleave focusout',
			'.shares-result, #search-shares',
			function (e) {
				if (!isCheckboxChecked()) return;

				if (
					!$(e.relatedTarget).closest(
						'.shares-result, #search-shares'
					).length
				) {
					$('.shares-result').removeClass('active');
				}
			}
		);

		$(document).on('click', '#lich-su_kien_submit', function (e) {
			e.preventDefault();
			load_lich_su_kien(1);
		});
		$(document).on(
			'change',
			'#lich-thi-truong_form input[name="sortfield"]',
			function () {
				load_lich_su_kien(1);
			}
		);
		$(document).on(
			'click',
			'#list-lich-su-kien_pagination button',
			function (e) {
				var page = $(this).attr('data-page');
				load_lich_su_kien(page);
			}
		);
		$(document).on('click', '#lich-su_kien_reset', function (e) {
			$('#lich-thi-truong_form')[0].reset();
			load_lich_su_kien(1);
		});

		function load_lich_su_kien(page = 1) {
			var eventcode = $('#lich-thi-truong_form .eventcode').val();
			var mck = $('#lich-thi-truong_form .mck').val();
			var fromdate = $('#lich-thi-truong_form .fromdate').val();
			var todate = $('#lich-thi-truong_form .todate').val();
			var sortfield = $(
				'#lich-thi-truong_form input[name="sortfield"]:checked'
			).val();
			$.ajax({
				url: ajaxurl.ajaxurl,
				type: 'POST',
				data: {
					action: 'filter_event_calendar',
					eventcode: eventcode,
					mck: mck,
					fromdate: fromdate,
					todate: todate,
					paged: page,
					sortfield: sortfield,
					security: ajaxurl.security,
				},
				beforeSend: function () {
					$('#list-lich-su-kien').html('');
					$('#list-lich-su-kien_pagination').html('');
					$('#lich-su-kien-loading').removeClass('hidden');
				},
				success: function (response) {
					$('#lich-su-kien-loading').addClass('hidden');
					$('#list-lich-su-kien_pagination').html(
						response.data.pagination
					);
					$('#list-lich-su-kien').html(response.data.html);
				},
			});
		}
		$(document).on('click', '#du-lieu-lich-su_submit', function (e) {
			e.preventDefault();
			load_du_lieu_lich_su();
		});
		$(document).ready(function () {
			var mck_dlls = $('#du-lieu-lich-su_form .mck').val();
			if (mck_dlls) {
				$('#du-lieu-lich-su_submit').trigger('click');
			}
		});

		$(document).on('click', '#du-lieu-lich-su_reset', function (e) {
			$('#du-lieu-lich-su_form')[0].reset();
			load_du_lieu_lich_su();
		});

		let currentPageDlls = 1;
		const itemsPerPage = 20;

		function load_du_lieu_lich_su(page = 1) {
			currentPageDlls = page;
			var mck = $('#du-lieu-lich-su_form .mck').val();
			var fromdate = $('#du-lieu-lich-su_form .fromdate').val();
			var todate = $('#du-lieu-lich-su_form .todate').val();
			var type_form = $('#du-lieu-lich-su_form').attr('data-form');
			$.ajax({
				url: ajaxurl.ajaxurl,
				type: 'POST',
				data: {
					action: 'filter_du_lieu_lich_su',
					mck: mck,
					fromdate: fromdate,
					todate: todate,
					type_form: type_form,
					security: ajaxurl.security,
					page: page,
					items_per_page: itemsPerPage,
				},
				beforeSend: function () {
					$('#list-du-lieu-lich-su').html('');
					$('#du-lieu-lich-su-loading').removeClass('hidden');
				},
				success: function (response) {
					$('#du-lieu-lich-su-loading').addClass('hidden');
					$('#list-du-lieu-lich-su').html(response.data.html);
					updatePagination(response.data.total_pages);
				},
			});
		}

		function updatePagination(totalPages) {
			const paginationContainer = $('.dlls-pagination ul');
			paginationContainer.html('');

			// Nút Prev
			if (currentPageDlls > 1) {
				paginationContainer.append(`
					<li>
						<a href="#" class="flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight border border-transparent bg-white text-black hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500" data-page="${currentPageDlls - 1}">
							<svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"></path>
								</svg>
						</a>
					</li>
				`);
			}

			// Các số trang
			for (let i = 1; i <= totalPages; i++) {
				const activeClass = i === currentPageDlls ? 'active' : '';
				paginationContainer.append(`
					<li>
						<a href="#" class="flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight  [&:not(.active)]:border border-transparent [&:not(.active)]:border-[#898A8D] [&:not(.active)]:bg-white bg-primary-300 [&:not(.active)]:text-black text-white hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500 ${activeClass}" data-page="${i}">
							${i}
						</a>
					</li>
				`);
			}

			// Nút Next
			if (currentPageDlls < totalPages) {
				paginationContainer.append(`
					<li>
						<a href="#" class="flex items-center justify-center px-2 min-w-9 h-9 rounded text-xs font-bold leading-tight border border-transparent bg-white text-black hover:!bg-primary-300 hover:!text-white hover:!border-transparent transition-all duration-500" data-page="${currentPageDlls + 1}">
							<svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
								</svg>
						</a>
					</li>
				`);
			}

			// Gắn sự kiện click
			paginationContainer.find('a').on('click', function (e) {
				e.preventDefault();
				const page = $(this).data('page');
				load_du_lieu_lich_su(page);
			});
		}
	};

	function sameHeight() {
		if ($('.block_sameheight').length) {
			$('.block_sameheight').each(function () {
				var h = 0;

				$(this)
					.find('.sameheight_item')
					.each(function () {
						if ($(this).outerHeight() > h) {
							h = $(this).outerHeight();
						}
					});

				$(this).find('.sameheight_item').css({
					height: h,
				});
			});
		}
	}
	$(document).ready(function () {
		$('.bsc_up-download').click(function () {
			var id_report = $(this).attr('data-id');
			if (id_report) {
				var count_download_display = $(this)
					.closest('.content-bao-cao-phan-tich')
					.find('.content-bao-cao-phan-tich_download_count');
				var number_count = parseInt(count_download_display.html()) || 0;
				number_count++;
				$.ajax({
					url: ajaxurl.ajaxurl,
					type: 'POST',
					data: {
						action: 'bsc_count_download',
						id_report: id_report,
						security: ajaxurl.security,
					},
					beforeSend: function () {},
					success: function (response) {
						count_download_display.html(number_count);
					},
				});
			}
		});
	});

	function resetForm() {
		$('#select_year').change(function () {
			$('#datepicker-range-start').val('');
			$('#datepicker-range-end').val('');
		});

		$('#datepicker-range-start, #datepicker-range-end').on(
			'changeDate',
			function () {
				$('#select_year').val('');
			}
		);
	}

	function centerActiveMenu() {
		if ($('.nav-scroll-mb').length) {
			var $activeItem = $('.nav-scroll-mb a.active');

			if ($activeItem.length) {
				// Tính toán khoảng cách cần scroll
				var $menuContainer = $('.nav-scroll-mb');
				var activeItemOffset = $activeItem.position().left; // Vị trí của thẻ a active
				var containerWidth = $menuContainer.width(); // Chiều rộng của menu container
				var activeItemWidth = $activeItem.outerWidth(); // Chiều rộng của phần tử active

				// Tính khoảng cách cần scroll để thẻ active ra giữa màn hình
				var scrollLeftPosition =
					activeItemOffset - containerWidth / 2 + activeItemWidth / 2;

				// Thực hiện scroll tới vị trí đó với hiệu ứng mượt
				$menuContainer.animate({ scrollLeft: scrollLeftPosition }, 500);
			}
		}
	}

	function handleLoading() {
		$('.block-loading').addClass('active');
	}
})(jQuery);
