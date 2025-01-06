<?php
return [
	// I. Thu nhập lãi thuần
	[
		'title'    => 'I. ' . __('Thu nhập lãi thuần', 'bsc'),
		'order'    => 2,
		'children' => [
			[
				'title'    => '1. ' . __('Thu nhập lãi và các khoản thu nhập tương tự', 'bsc'),
				'order'    => 3,
				'children' => [],
			],
			[
				'title'    => '2. ' . __('Chi phí lãi và các chi phí tương tự', 'bsc'),
				'order'    => 4,
				'children' => [],
			],
		],
	],

	// II. Lãi/ lỗ thuần từ hoạt động dịch vụ
	[
		'title'    => 'II. ' . __('Lãi/ lỗ thuần từ hoạt động dịch vụ', 'bsc'),
		'order'    => 5,
		'children' => [
			[
				'title'    => '1. ' . __('Thu nhập từ hoạt động dịch vụ', 'bsc'),
				'order'    => 6,
				'children' => [],
			],
			[
				'title'    => '2. ' . __('Chi phí hoạt động dịch vụ', 'bsc'),
				'order'    => 7,
				'children' => [],
			],
		],
	],

	// III. Lãi/ lỗ thuần từ hoạt động kinh doanh ngoại hối
	[
		'title'    => 'III. ' . __('Lãi/ lỗ thuần từ hoạt động kinh doanh ngoại hối', 'bsc'),
		'order'    => 8,
		'children' => [],
	],

	// IV. Lãi/ lỗ thuần từ mua bán chứng khoán kinh doanh
	[
		'title'    => 'IV. ' . __('Lãi/ lỗ thuần từ mua bán chứng khoán kinh doanh', 'bsc'),
		'order'    => 9,
		'children' => [],
	],

	// V. Lãi/ lỗ thuần từ mua bán chứng khoán đầu tư
	[
		'title'    => 'V. ' . __('Lãi/ lỗ thuần từ mua bán chứng khoán đầu tư', 'bsc'),
		'order'    => 10,
		'children' => [
			[
				'title'    => '1. ' . __('Thu nhập từ hoạt động khác', 'bsc'),
				'order'    => 11,
				'children' => [],
			],
			[
				'title'    => '2. ' . __('Chi phí hoạt động khác', 'bsc'),
				'order'    => 12,
				'children' => [],
			],
		],
	],

	// VI. Lãi/ lỗ thuần từ hoạt động khác
	[
		'title'    => 'VI. ' . __('Lãi/ lỗ thuần từ hoạt động khác', 'bsc'),
		'order'    => 13,
		'children' => [],
	],

	// VII. Thu nhập từ góp vốn, mua cổ phần
	[
		'title'    => 'VII. ' . __('Thu nhập từ góp vốn, mua cổ phần', 'bsc'),
		'order'    => 14,
		'children' => [],
	],

	// VIII. Chi phí hoạt động
	[
		'title'    => 'VIII. ' . __('Chi phí hoạt động', 'bsc'),
		'order'    => 15,
		'children' => [],
	],

	// IX. Lợi nhuận thuần từ hoạt động kinh doanh trước chi phí dự phòng rủi ro tín dụng
	[
		'title'    => 'IX. ' . __('Lợi nhuận thuần từ hoạt động kinh doanh trước chi phí dự phòng rủi ro tín dụng', 'bsc'),
		'order'    => 16,
		'children' => [],
	],

	// X. Chi phí dự phòng rủi ro tín dụng
	[
		'title'    => 'X. ' . __('Chi phí dự phòng rủi ro tín dụng', 'bsc'),
		'order'    => 17,
		'children' => [],
	],

	// XI. Tổng lợi nhuận trước thuế
	[
		'title'    => 'XI. ' . __('Tổng lợi nhuận trước thuế', 'bsc'),
		'order'    => 18,
		'children' => [],
	],

	// XII. Chi phí thuế TNDN
	[
		'title'    => 'XII. ' . __('Chi phí thuế TNDN', 'bsc'),
		'order'    => 19,
		'children' => [
			[
				'title'    => '1. ' . __('Chi phí thuế TNDN hiện hành', 'bsc'),
				'order'    => 20,
				'children' => [],
			],
			[
				'title'    => '2. ' . __('Chi phí thuế TNDN hoãn lại', 'bsc'),
				'order'    => 21,
				'children' => [],
			],
		],
	],

	// XIII. Lợi nhuận sau thuế
	[
		'title'    => 'XIII. ' . __('Lợi nhuận sau thuế', 'bsc'),
		'order'    => 22,
		'children' => [],
	],

	// XIV. Lợi ích của cổ đông thiểu số
	[
		'title'    => 'XIV. ' . __('Lợi ích của cổ đông thiểu số', 'bsc'),
		'order'    => 23,
		'children' => [],
	],

	// XV. Lãi cơ bản trên cổ phiếu
	[
		'title'    => 'XV. ' . __('Lãi cơ bản trên cổ phiếu', 'bsc'),
		'order'    => 24,
		'children' => [],
	],
];
