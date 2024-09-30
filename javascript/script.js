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
			$('.main_menu > ul > li').each(function (index) {
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

			$('.main_menu > ul > li').mouseenter(function () {
				var dataMenuValue = $(this).attr('data-menu');

				$('.main_menu > ul > li').removeClass('active');

				$('.main_menu-navbar').addClass('active');
				console.log('add');

				$(
					'.submenu-wrapper > li[data-menu="' + dataMenuValue + '"]'
				).trigger('mouseenter');

				$(this).addClass('active');

				clearTimeout(timeout);
			});

			$('.main_menu > ul > li').mouseleave(function () {
				if (isMouseInNavbar) {
					timeout = setTimeout(() => {
						$('.main_menu-navbar').removeClass('active');
						$('.main_menu > ul > li').removeClass('active');
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
					$('.main_menu > ul > li').removeClass('active');
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
		// Dữ liệu biểu đồ
		var options = {
			chart: {
				type: 'line',
				height: 350,
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
				width: 3,
			},
			markers: {
				size: 5,
			},
			colors: ['#008FFB', '#FEB019', '#00E396'],
			legend: {
				show: true,
				position: 'top',
			},
			tooltip: {
				x: {
					format: 'dd/MM/yy HH:mm',
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#chart'), options);
		chart.render();
	}
})(jQuery);
