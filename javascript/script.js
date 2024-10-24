import { initFlowbite } from 'flowbite';
import ApexCharts from 'apexcharts';
import WOW from 'wowjs';
new WOW.WOW().init();
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
			handleChart();
			aboutUsSlider();
			aboutDynamicPopup();
			toggleContent();
			handlePhoneCf7();
			dynamicPopupDocument();
			stickyHeader();
			hoverSvg();
			livechat();
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
					$('.submenu-content').html('');
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

			$('.submenu-wrapper > li').mouseleave(function () {
				timeout = setTimeout(() => {
					$(this).removeClass('active');
					$('.submenu-content').html('');
					$('.submenu-content').css('max-height', '0');
				}, 100);
			});

			$('.submenu-content').mouseenter(function () {
				clearTimeout(timeout);
			});

			$('.submenu-content').mouseleave(function () {
				timeout = setTimeout(function () {
					$('.submenu-wrapper > li').removeClass('active');
					$('.submenu-content').html('');
					$('.submenu-content').css('max-height', '0');
				}, 100);
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

			if (blockSliderCount > 1) {
				var hasNoDotsClass = $(this).hasClass('no-dots');
				$(this).flickity({
					pageDots: !hasNoDotsClass,
					prevNextButtons: false,
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
	}

	function moveLine($button) {
		var buttonPosition = $button.position().left;
		var buttonWidth = $button.outerWidth();

		$('.line').css({
			left: buttonPosition + 'px',
			width: buttonWidth + 'px',
		});
	}
	function handleChart() {
		if ($('#chart').length) {
			var options = {
				chart: {
					type: 'line',
					height: 475,
					toolbar: {
						show: true,
						tools: {
							zoom: true, // Kích hoạt công cụ zoom mặc định
							zoomin: true, // Nút zoom in
							zoomout: true, // Nút zoom out
							pan: true, // Kích hoạt kéo (pan)
							reset: true, // Nút để đặt lại zoom
						},
						autoSelected: 'zoom',
					},
					zoom: {
						enabled: true, // Kích hoạt zoom
					},
				},
				series: [
					{
						name: 'BSC10',
						data: [30, 40, 35, 50, 49, 60, 70, 91],
					},
					{
						name: 'VNINDEX',
						data: [20, 30, 40, 45, 50, 49, 60, 80],
					},
					{
						name: 'VNDIAMOND',
						data: [10, 20, 15, 25, 30, 35, 45, 55],
					},
				],
				xaxis: {
					categories: [
						'19 Sep',
						'20 Sep',
						'21 Sep',
						'22 Sep',
						'23 Sep',
						'24 Sep',
						'25 Sep',
					],
				},
				yaxis: {
					min: 0,
					max: 180,
				},
				stroke: {
					curve: 'smooth',
					width: 2,
				},
				markers: {
					size: 5,
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
						format: 'dd/MM/yy HH:mm',
					},
				},
			};

			var chart = new ApexCharts($('#chart')[0], options);
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
		var totalItemsAward = $('.about_award-nav').slick('getSlick').slideCount;
		$('.about_award-nav').slick('slickGoTo', totalItemsAward - 1);

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

	function dynamicPopupDocument() {
		$('.document_item-popup').on('click', function () {
			var documentLink = $(this).data('doccument');

			var title = $(this)
				.closest('.document_item-popup')
				.find('.main_title')
				.html();

			var content = $(this)
				.closest('.document_item-popup')
				.find('.main_content')
				.html();

			$('#document-modal .document-modal-link').attr(
				'href',
				documentLink
			);
			$('#document-modal .document-modal-title').html(title);
			$('#document-modal .document-modal-content').html(content);
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
})(jQuery);
