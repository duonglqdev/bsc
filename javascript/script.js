import { initFlowbite } from 'flowbite';
import ApexCharts from 'apexcharts';
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
			handleScrollNav();
			toggleContent();
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
		$backToTop.hide();

		$(window).on('scroll', function () {
			if ($(this).scrollTop() > 200) {
				$backToTop.fadeIn();
			} else {
				$backToTop.fadeOut();
			}
		});

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
				if (isMouseInNavbar) {
					timeout = setTimeout(() => {
						$('.main_menu-navbar').removeClass('active');
						$('.main_menu > ul > li:not(.menu-home)').removeClass(
							'active'
						);
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
			$(this).slick({
				customPaging: function (slider, i) {
					return '<span class="dot"></span>';
				},
			});
		});

		$('.community_content-bg').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.community_content-list',
			initialSlide: 1,
		});

		$('.community_content-list').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			arrows: false,
			fade: true,
			asNavFor: '.community_content-bg',
			initialSlide: 1,
			customPaging: function (slider, i) {
				return '<span class="dot"></span>';
			},
		});

		$('.community_nav-item[data-index="1"]').addClass('active');

		$('.community_nav-item').on('click', function () {
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
			$('.home__banner').css('height', bannerHeight + 'px');
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

			$('[data-download]').hide(200);

			$('[data-download="' + tabDownloadValue + '"]').show(200);

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
					height: 430,
					toolbar: {
						show: false,
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
				colors: ['#008FFB', '#FEB019', '#00E396'],
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
			fade: true,
			asNavFor: '.about_history-nav',
		});
		$('.about_history-nav').slick({
			slidesToShow: 5,
			slidesToScroll: 1,
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
		$('.about_award-content').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.about_award-nav',
		});
		$('.about_award-nav').slick({
			slidesToShow: 5,
			slidesToScroll: 1,
			asNavFor: '.about_award-content',
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
		$('.scroll_nav a').click(function (e) {
			e.preventDefault();

			$('.scroll_nav a').removeClass('active');

			$(this).addClass('active');

			var target = $(this).attr('href');
			$('html, body').animate(
				{
					scrollTop: $(target).offset().top - 100,
				},
				50
			);
		});

		function onScroll() {
			var scrollPosition = $(window).scrollTop();
			var windowHeight = $(window).height();

			$('.scroll_nav a').each(function () {
				var target = $(this).attr('href');
				var sectionOffset = $(target).offset().top - 110;

				var sectionHeight = $(target).outerHeight();

				if (
					scrollPosition >= sectionOffset &&
					scrollPosition < sectionOffset + sectionHeight
				) {
					$('.scroll_nav a').removeClass('active');
					$(this).addClass('active');
				}
			});
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

	function toggleContent() {
		$('.sidebar-report li').each(function () {
			if ($(this).find('ul.sub-menu').length) {
				$(this)
					.addClass('has-child')
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
	}
})(jQuery);
