<?php
return [
	// I. Lưu chuyển tiền thuần từ hoạt động kinh doanh
	[
		'title' => 'I. ' . __('Lưu chuyển tiền thuần từ hoạt động kinh doanh', 'bsc'),
		'order' => 2,
		'children' => [
			// 1. Lợi nhuận trước thuế
			[
				'title' => '1. ' . __('Lợi nhuận trước thuế', 'bsc'),
				'order' => 3,
				'children' => [],
			],

			// 2. Các khoản điều chỉnh
			[
				'title' => '2. ' . __('Các khoản điều chỉnh', 'bsc'),
				'order' => 4,
				'children' => [
					[
						'title' => '- ' . __('Khấu hao TSCĐ và BĐSĐT', 'bsc'),
						'order' => 5,
						'children' => []
					],
					[
						'title' => '- ' . __('Các khoản dự phòng', 'bsc'),
						'order' => 6,
						'children' => []
					],
					[
						'title' => '- ' . __('Lãi, lỗ chênh lệch tỷ giá hối đoái do đánh giá lại các khoản mục tiền tệ có gốc ngoại tệ', 'bsc'),
						'order' => 7,
						'children' => []
					],
					[
						'title' => '- ' . __('Lãi, lỗ từ hoạt động đầu tư', 'bsc'),
						'order' => 8,
						'children' => []
					],
					[
						'title' => '- ' . __('Chi phí lãi vay', 'bsc'),
						'order' => 9,
						'children' => []
					],
					[
						'title' => '- ' . __('Các khoản điều chỉnh khác', 'bsc'),
						'order' => 10,
						'children' => []
					],
				],
			],

			// 3. Lợi nhuận từ hoạt động kinh doanh trước thay đổi vốn lưu động
			[
				'title' => '3. ' . __('Lợi nhuận từ hoạt động kinh doanh trước thay đổi vốn lưu động', 'bsc'),
				'order' => 11,
				'children' => [
					[
						'title' => '- ' . __('Tăng, giảm các khoản phải thu', 'bsc'),
						'order' => 12,
						'children' => []
					],
					[
						'title' => '- ' . __('Tăng, giảm hàng tồn kho', 'bsc'),
						'order' => 13,
						'children' => []
					],
					[
						'title' => '- ' . __('Tăng, giảm các khoản phải trả (Không kể lãi vay phải trả, thuế TNDN phải nộp)', 'bsc'),
						'order' => 14,
						'children' => []
					],
					[
						'title' => '- ' . __('Tăng, giảm chi phí trả trước', 'bsc'),
						'order' => 15,
						'children' => []
					],
					[
						'title' => '- ' . __('Tăng, giảm chứng khoán kinh doanh', 'bsc'),
						'order' => 16,
						'children' => []
					],
					[
						'title' => '- ' . __('Tiền lãi vay đã trả', 'bsc'),
						'order' => 17,
						'children' => []
					],
					[
						'title' => '- ' . __('Thuế thu nhập doanh nghiệp đã nộp', 'bsc'),
						'order' => 18,
						'children' => []
					],
					[
						'title' => '- ' . __('Tiền thu khác từ hoạt động kinh doanh', 'bsc'),
						'order' => 19,
						'children' => []
					],
					[
						'title' => '- ' . __('Tiền chi khác cho hoạt động kinh doanh', 'bsc'),
						'order' => 20,
						'children' => []
					],
				],
			],
		],
	],

	// II. Lưu chuyển tiền thuần từ hoạt động đầu tư
	[
		'title' => 'II. ' . __('Lưu chuyển tiền thuần từ hoạt động đầu tư', 'bsc'),
		'order' => 21,
		'children' => [
			[
				'title' => '1. ' . __('Tiền chi để mua sắm, xây dựng TSCĐ và các tài sản dài hạn khác', 'bsc'),
				'order' => 22,
				'children' => []
			],
			[
				'title' => '2. ' . __('Tiền thu từ thanh lý, nhượng bán TSCĐ và các tài sản dài hạn khác', 'bsc'),
				'order' => 23,
				'children' => []
			],
			[
				'title' => '3. ' . __('Tiền chi cho vay, mua các công cụ nợ của đơn vị khác', 'bsc'),
				'order' => 24,
				'children' => []
			],
			[
				'title' => '4. ' . __('Tiền thu hồi cho vay, bán lại các công cụ nợ của đơn vị khác', 'bsc'),
				'order' => 25,
				'children' => []
			],
			[
				'title' => '5. ' . __('Tiền chi đầu tư góp vốn vào đơn vị khác', 'bsc'),
				'order' => 26,
				'children' => []
			],
			[
				'title' => '6. ' . __('Tiền thu hồi đầu tư góp vốn vào đơn vị khác', 'bsc'),
				'order' => 27,
				'children' => []
			],
			[
				'title' => '7. ' . __('Tiền thu lãi cho vay, cổ tức và lợi nhuận được chia', 'bsc'),
				'order' => 28,
				'children' => []
			],
		],
	],

	// III. Lưu chuyển tiền thuần từ hoạt động tài chính
	[
		'title' => 'III. ' . __('Lưu chuyển tiền thuần từ hoạt động tài chính', 'bsc'),
		'order' => 29,
		'children' => [
			[
				'title' => '1. ' . __('Tiền thu từ phát hành cổ phiếu, nhận vốn góp của chủ sở hữu', 'bsc'),
				'order' => 30,
				'children' => []
			],
			[
				'title' => '2. ' . __('Tiền trả lại vốn góp cho các chủ sở hữu, mua lại cổ phiếu của doanh nghiệp đã phát hành', 'bsc'),
				'order' => 31,
				'children' => []
			],
			[
				'title' => '3. ' . __('Tiền thu từ đi vay', 'bsc'),
				'order' => 32,
				'children' => []
			],
			[
				'title' => '4. ' . __('Tiền trả nợ gốc vay', 'bsc'),
				'order' => 33,
				'children' => []
			],
			[
				'title' => '5. ' . __('Tiền trả nợ gốc thuê tài chính', 'bsc'),
				'order' => 34,
				'children' => []
			],
			[
				'title' => '6. ' . __('Cổ tức, lợi nhuận đã trả cho chủ sở hữu', 'bsc'),
				'order' => 35,
				'children' => []
			],
		],
	],

	// IV. Lưu chuyển tiền thuần trong kỳ
	[
		'title' => 'IV. ' . __('Lưu chuyển tiền thuần trong kỳ', 'bsc'),
		'order' => 36,
		'children' => [],
	],

	// V. Tiền và tương đương tiền đầu kỳ
	[
		'title' => 'V. ' . __('Tiền và tương đương tiền đầu kỳ', 'bsc'),
		'order' => 37,
		'children' => [],
	],

	// VI. Ảnh hưởng của thay đổi tỷ giá hối đoái
	[
		'title' => 'VI. ' . __('Ảnh hưởng của thay đổi tỷ giá hối đoái quy đổi ngoại tệ', 'bsc'),
		'order' => 38,
		'children' => [],
	],

	// VII. Tiền và tương đương tiền cuối kỳ
	[
		'title' => 'VII. ' . __('Tiền và tương đương tiền cuối kỳ', 'bsc'),
		'order' => 39,
		'children' => [],
	],

	// VIII. Lợi ích của cổ đông thiểu số
	[
		'title' => 'VIII. ' . __('Lợi ích của cổ đông thiểu số', 'bsc'),
		'order' => 40,
		'children' => [],
	],

	// IX. Lợi nhuận sau thuế của chủ sở hữu, tập đoàn
	[
		'title' => 'IX. ' . __('Lợi nhuận sau thuế của chủ sở hữu, tập đoàn', 'bsc'),
		'order' => 41,
		'children' => [],
	],

	// X. Lãi cơ bản trên mỗi cổ phiếu
	[
		'title' => 'X. ' . __('Lãi cơ bản trên mỗi cổ phiếu', 'bsc'),
		'order' => 42,
		'children' => [],
	],
];
