<?php
return [ 
	// =========================
	// I. TÀI SẢN
	// =========================
	[ 
		'title' => 'I. ' . __( 'TÀI SẢN', 'bsc' ),
		'order' => 2,
		'children' => [ 

			// 1. TÀI SẢN NGẮN HẠN
			[ 
				'title' => '1. ' . __( 'Tài sản ngắn hạn', 'bsc' ),
				'order' => 3,
				'children' => [ 

					// (1) Tiền và các khoản tương đương tiền
					[ 
						'title' => __( 'Tiền và các khoản tương đương tiền', 'bsc' ),
						'order' => 4,
						'children' => [ 
							[ 
								'title' => __( 'Tiền', 'bsc' ),
								'order' => 5,
								'children' => []
							],
							[ 
								'title' => __( 'Các khoản tương đương tiền', 'bsc' ),
								'order' => 6,
								'children' => []
							],
						],
					],

					// (2) Đầu tư tài chính ngắn hạn
					[ 
						'title' => __( 'Đầu tư tài chính ngắn hạn', 'bsc' ),
						'order' => 7,
						'children' => [ 
							[ 
								'title' => __( 'Chứng khoán kinh doanh', 'bsc' ),
								'order' => 8,
								'children' => []
							],
							[ 
								'title' => __( 'Dự phòng giảm giá chứng khoán kinh doanh', 'bsc' ),
								'order' => 9,
								'children' => []
							],
							[ 
								'title' => __( 'Đầu tư nắm giữ đến ngày đáo hạn (ngắn hạn)', 'bsc' ),
								'order' => 10,
								'children' => []
							],
						],
					],

					// (3) Các khoản phải thu ngắn hạn
					[ 
						'title' => __( 'Các khoản phải thu ngắn hạn', 'bsc' ),
						'order' => 11,
						'children' => [ 
							[ 
								'title' => __( 'Phải thu ngắn hạn của khách hàng', 'bsc' ),
								'order' => 12,
								'children' => []
							],
							[ 
								'title' => __( 'Trả trước cho người bán ngắn hạn', 'bsc' ),
								'order' => 13,
								'children' => []
							],
							[ 
								'title' => __( 'Phải thu nội bộ ngắn hạn', 'bsc' ),
								'order' => 14,
								'children' => []
							],
							[ 
								'title' => __( 'Phải thu theo tiến độ kế hoạch hợp đồng xây dựng', 'bsc' ),
								'order' => 15,
								'children' => []
							],
							[ 
								'title' => __( 'Phải thu về cho vay ngắn hạn', 'bsc' ),
								'order' => 16,
								'children' => []
							],
							[ 
								'title' => __( 'Phải thu ngắn hạn khác', 'bsc' ),
								'order' => 17,
								'children' => []
							],
							[ 
								'title' => __( 'Dự phòng phải thu ngắn hạn khó đòi', 'bsc' ),
								'order' => 18,
								'children' => []
							],
							[ 
								'title' => __( 'Tài sản thiếu chờ xử lý', 'bsc' ),
								'order' => 19,
								'children' => []
							],
						],
					],

					// (4) Hàng tồn kho
					[ 
						'title' => __( 'Hàng tồn kho', 'bsc' ),
						'order' => 20,
						'children' => [ 
							[ 
								'title' => __( 'Hàng tồn kho', 'bsc' ),
								'order' => 21,
								'children' => []
							],
							[ 
								'title' => __( 'Dự phòng giảm giá hàng tồn kho', 'bsc' ),
								'order' => 22,
								'children' => []
							],
						],
					],

					// (5) Tài sản ngắn hạn khác
					[ 
						'title' => __( 'Tài sản ngắn hạn khác', 'bsc' ),
						'order' => 23,
						'children' => [ 
							[ 
								'title' => __( 'Chi phí trả trước ngắn hạn', 'bsc' ),
								'order' => 24,
								'children' => []
							],
							[ 
								'title' => __( 'Thuế GTGT được khấu trừ', 'bsc' ),
								'order' => 25,
								'children' => []
							],
							[ 
								'title' => __( 'Thuế và các khoản khác phải thu Nhà nước', 'bsc' ),
								'order' => 26,
								'children' => []
							],
							[ 
								'title' => __( 'Giao dịch mua bán lại trái phiếu Chính phủ (ngắn hạn)', 'bsc' ),
								'order' => 27,
								'children' => []
							],
							[ 
								'title' => __( 'Tài sản ngắn hạn khác', 'bsc' ),
								'order' => 28,
								'children' => []
							],
						],
					],
				],
			],

			// 2. TÀI SẢN DÀI HẠN
			[ 
				'title' => '2. ' . __( 'Tài sản dài hạn', 'bsc' ),
				'order' => 29,
				'children' => [ 

					// (1) Các khoản phải thu dài hạn
					[ 
						'title' => __( 'Các khoản phải thu dài hạn', 'bsc' ),
						'order' => 30,
						'children' => [ 
							[ 
								'title' => __( 'Phải thu dài hạn của khách hàng', 'bsc' ),
								'order' => 31,
								'children' => []
							],
							[ 
								'title' => __( 'Trả trước cho người bán dài hạn', 'bsc' ),
								'order' => 32,
								'children' => []
							],
							[ 
								'title' => __( 'Vốn kinh doanh ở đơn vị trực thuộc', 'bsc' ),
								'order' => 33,
								'children' => []
							],
							[ 
								'title' => __( 'Phải thu nội bộ dài hạn', 'bsc' ),
								'order' => 34,
								'children' => []
							],
							[ 
								'title' => __( 'Phải thu về cho vay dài hạn', 'bsc' ),
								'order' => 35,
								'children' => []
							],
							[ 
								'title' => __( 'Phải thu dài hạn khác', 'bsc' ),
								'order' => 36,
								'children' => []
							],
						],
					],

					// (2) Tài sản cố định
					[ 
						'title' => __( 'Tài sản cố định', 'bsc' ),
						'order' => 37,
						'children' => [ 
							// TSCĐ hữu hình
							[ 
								'title' => __( 'Tài sản cố định hữu hình', 'bsc' ),
								'order' => 38,
								'children' => [ 
									[ 
										'title' => __( 'Nguyên giá tài sản cố định hữu hình', 'bsc' ),
										'order' => 39,
										'children' => []
									],
									[ 
										'title' => __( 'Giá trị hao mòn lũy kế tài sản cố định hữu hình', 'bsc' ),
										'order' => 40,
										'children' => []
									],
								],
							],
							// TSCĐ thuê tài chính
							[ 
								'title' => __( 'Tài sản cố định thuê tài chính', 'bsc' ),
								'order' => 41,
								'children' => [ 
									[ 
										'title' => __( 'Nguyên giá tài sản cố định thuê tài chính', 'bsc' ),
										'order' => 42,
										'children' => []
									],
									[ 
										'title' => __( 'Giá trị hao mòn lũy kế tài sản cố định thuê tài chính', 'bsc' ),
										'order' => 43,
										'children' => []
									],
								],
							],
							// TSCĐ vô hình
							[ 
								'title' => __( 'Tài sản cố định vô hình', 'bsc' ),
								'order' => 44,
								'children' => [ 
									[ 
										'title' => __( 'Nguyên giá tài sản cố định vô hình', 'bsc' ),
										'order' => 45,
										'children' => []
									],
									[ 
										'title' => __( 'Giá trị hao mòn lũy kế tài sản cố định vô hình', 'bsc' ),
										'order' => 46,
										'children' => []
									],
								],
							],
						],
					],

					// (3) Bất động sản đầu tư
					[ 
						'title' => __( 'Bất động sản đầu tư', 'bsc' ),
						'order' => 47,
						'children' => [ 
							[ 
								'title' => __( 'Nguyên giá bất động sản đầu tư', 'bsc' ),
								'order' => 48,
								'children' => []
							],
							[ 
								'title' => __( 'Giá trị hao mòn lũy kế bất động sản đầu tư', 'bsc' ),
								'order' => 49,
								'children' => []
							],
						],
					],

					// (4) Tài sản dở dang dài hạn
					[ 
						'title' => __( 'Tài sản dở dang dài hạn', 'bsc' ),
						'order' => 50,
						'children' => [ 
							[ 
								'title' => __( 'Chi phí sản xuất, kinh doanh dở dang dài hạn', 'bsc' ),
								'order' => 51,
								'children' => []
							],
							[ 
								'title' => __( 'Chi phí xây dựng cơ bản dở dang', 'bsc' ),
								'order' => 52,
								'children' => []
							],
						],
					],

					// (5) Đầu tư tài chính dài hạn
					[ 
						'title' => __( 'Đầu tư tài chính dài hạn', 'bsc' ),
						'order' => 53,
						'children' => [ 
							[ 
								'title' => __( 'Đầu tư vào công ty con', 'bsc' ),
								'order' => 54,
								'children' => []
							],
							[ 
								'title' => __( 'Đầu tư vào công ty liên doanh, liên kết', 'bsc' ),
								'order' => 55,
								'children' => []
							],
							[ 
								'title' => __( 'Đầu tư góp vốn vào đơn vị khác', 'bsc' ),
								'order' => 56,
								'children' => []
							],
							[ 
								'title' => __( 'Dự phòng đầu tư tài chính dài hạn', 'bsc' ),
								'order' => 57,
								'children' => []
							],
							[ 
								'title' => __( 'Đầu tư nắm giữ đến ngày đáo hạn (dài hạn)', 'bsc' ),
								'order' => 58,
								'children' => []
							],
						],
					],

					// (6) Tài sản dài hạn khác
					[ 
						'title' => __( 'Tài sản dài hạn khác', 'bsc' ),
						'order' => 59,
						'children' => [ 
							[ 
								'title' => __( 'Chi phí trả trước dài hạn', 'bsc' ),
								'order' => 60,
								'children' => []
							],
							[ 
								'title' => __( 'Tài sản thuế thu nhập hoãn lại', 'bsc' ),
								'order' => 61,
								'children' => []
							],
							[ 
								'title' => __( 'Thiết bị, vật tư, phụ tùng thay thế dài hạn', 'bsc' ),
								'order' => 62,
								'children' => []
							],
							[ 
								'title' => __( 'Tài sản dài hạn khác', 'bsc' ),
								'order' => 63,
								'children' => []
							],
							[ 
								'title' => __( 'Lợi thế thương mại', 'bsc' ),
								'order' => 64,
								'children' => []
							],
						],
					],
				],
			],
		],
	],

	// =========================
	// II. NGUỒN VỐN
	// =========================
	[ 
		'title' => 'II. ' . __( 'NGUỒN VỐN', 'bsc' ),
		'order' => 65,
		'children' => [ 

			// 1. NỢ PHẢI TRẢ
			[ 
				'title' => '1. ' . __( 'Nợ phải trả', 'bsc' ),
				'order' => 66,
				'children' => [ 

					// (1) Nợ ngắn hạn
					[ 
						'title' => __( 'Nợ ngắn hạn', 'bsc' ),
						'order' => 67,
						'children' => [ 
							[ 
								'title' => __( 'Phải trả người bán ngắn hạn', 'bsc' ),
								'order' => 68,
								'children' => []
							],
							[ 
								'title' => __( 'Người mua trả tiền trước ngắn hạn', 'bsc' ),
								'order' => 69,
								'children' => []
							],
							[ 
								'title' => __( 'Thuế và các khoản phải nộp Nhà nước (ngắn hạn)', 'bsc' ),
								'order' => 70,
								'children' => []
							],
							[ 
								'title' => __( 'Phải trả người lao động', 'bsc' ),
								'order' => 71,
								'children' => []
							],
							[ 
								'title' => __( 'Chi phí phải trả ngắn hạn', 'bsc' ),
								'order' => 72,
								'children' => []
							],
							[ 
								'title' => __( 'Phải trả nội bộ ngắn hạn', 'bsc' ),
								'order' => 73,
								'children' => []
							],
							[ 
								'title' => __( 'Phải trả theo tiến độ kế hoạch hợp đồng xây dựng', 'bsc' ),
								'order' => 74,
								'children' => []
							],
							[ 
								'title' => __( 'Doanh thu chưa thực hiện ngắn hạn', 'bsc' ),
								'order' => 75,
								'children' => []
							],
							[ 
								'title' => __( 'Phải trả ngắn hạn khác', 'bsc' ),
								'order' => 76,
								'children' => []
							],
							[ 
								'title' => __( 'Vay và nợ thuê tài chính ngắn hạn', 'bsc' ),
								'order' => 77,
								'children' => []
							],
							[ 
								'title' => __( 'Dự phòng phải trả ngắn hạn', 'bsc' ),
								'order' => 78,
								'children' => []
							],
							[ 
								'title' => __( 'Quỹ khen thưởng, phúc lợi', 'bsc' ),
								'order' => 79,
								'children' => []
							],
							[ 
								'title' => __( 'Quỹ bình ổn giá', 'bsc' ),
								'order' => 80,
								'children' => []
							],
							[ 
								'title' => __( 'Giao dịch mua bán lại trái phiếu Chính phủ (ngắn hạn)', 'bsc' ),
								'order' => 81,
								'children' => []
							],
						],
					],

					// (2) Nợ dài hạn
					[ 
						'title' => __( 'Nợ dài hạn', 'bsc' ),
						'order' => 82,
						'children' => [ 
							[ 
								'title' => __( 'Phải trả người bán dài hạn', 'bsc' ),
								'order' => 83,
								'children' => []
							],
							[ 
								'title' => __( 'Người mua trả tiền trước dài hạn', 'bsc' ),
								'order' => 84,
								'children' => []
							],
							[ 
								'title' => __( 'Chi phí phải trả dài hạn', 'bsc' ),
								'order' => 85,
								'children' => []
							],
							[ 
								'title' => __( 'Phải trả nội bộ về vốn kinh doanh', 'bsc' ),
								'order' => 86,
								'children' => []
							],
							[ 
								'title' => __( 'Phải trả nội bộ dài hạn', 'bsc' ),
								'order' => 87,
								'children' => []
							],
							[ 
								'title' => __( 'Doanh thu chưa thực hiện dài hạn', 'bsc' ),
								'order' => 88,
								'children' => []
							],
							[ 
								'title' => __( 'Phải trả dài hạn khác', 'bsc' ),
								'order' => 89,
								'children' => []
							],
							[ 
								'title' => __( 'Vay và nợ thuê tài chính dài hạn', 'bsc' ),
								'order' => 90,
								'children' => []
							],
							[ 
								'title' => __( 'Trái phiếu chuyển đổi', 'bsc' ),
								'order' => 91,
								'children' => []
							],
							[ 
								'title' => __( 'Cổ phiếu ưu đãi', 'bsc' ),
								// (theo ảnh 3, mục "Nợ dài hạn" có liệt kê)
								'order' => 92,
								'children' => []
							],
							[ 
								'title' => __( 'Thuế thu nhập hoãn lại phải trả', 'bsc' ),
								'order' => 93,
								'children' => []
							],
							[ 
								'title' => __( 'Quỹ phát triển khoa học và công nghệ', 'bsc' ),
								'order' => 94,
								'children' => []
							],
							[ 
								'title' => __( 'Dự phòng phải trả dài hạn', 'bsc' ),
								'order' => 95,
								'children' => []
							],
						],
					],
				],
			],

			// 2. VỐN CHỦ SỞ HỮU
			[ 
				'title' => '2. ' . __( 'Vốn chủ sở hữu', 'bsc' ),
				'order' => 96,
				'children' => [ 

					// 2.1 Vốn chủ sở hữu
					[ 
						'title' => __( 'Vốn chủ sở hữu', 'bsc' ),
						'order' => 97,
						'children' => [ 
							[ 
								'title' => __( 'Vốn góp của chủ sở hữu', 'bsc' ),
								'order' => 98,
								'children' => [ 
									// Theo ảnh 4: liệt kê chi tiết
									[ 
										'title' => __( 'Cổ phiếu phổ thông có quyền biểu quyết', 'bsc' ),
										'order' => 99,
										'children' => []
									],
									[ 
										'title' => __( 'Cổ phiếu ưu đãi', 'bsc' ),
										'order' => 100,
										'children' => []
									],
								],
							],
							[ 
								'title' => __( 'Thặng dư vốn cổ phần', 'bsc' ),
								'order' => 101,
								'children' => []
							],
							[ 
								'title' => __( 'Quyền chọn chuyển đổi trái phiếu', 'bsc' ),
								'order' => 102,
								'children' => []
							],
							[ 
								'title' => __( 'Vốn khác của chủ sở hữu', 'bsc' ),
								'order' => 103,
								'children' => []
							],
							[ 
								'title' => __( 'Cổ phiếu quỹ', 'bsc' ),
								'order' => 104,
								'children' => []
							],
							[ 
								'title' => __( 'Chênh lệch đánh giá lại tài sản', 'bsc' ),
								'order' => 105,
								'children' => []
							],
							[ 
								'title' => __( 'Chênh lệch tỷ giá hối đoái', 'bsc' ),
								'order' => 106,
								'children' => []
							],
							[ 
								'title' => __( 'Quỹ đầu tư phát triển', 'bsc' ),
								'order' => 107,
								'children' => []
							],
							[ 
								'title' => __( 'Quỹ hỗ trợ sắp xếp doanh nghiệp', 'bsc' ),
								'order' => 108,
								'children' => []
							],
							[ 
								'title' => __( 'Quỹ dự phòng tài chính', 'bsc' ),
								'order' => 109,
								'children' => []
							],
							[ 
								'title' => __( 'Quỹ khác thuộc vốn chủ sở hữu', 'bsc' ),
								'order' => 110,
								'children' => []
							],
							[ 
								'title' => __( 'Lợi nhuận sau thuế chưa phân phối', 'bsc' ),
								'order' => 111,
								'children' => [ 
									[ 
										'title' => __( '- LNST chưa phân phối lũy kế đến cuối kỳ trước', 'bsc' ),
										'order' => 112,
										'children' => []
									],
									[ 
										'title' => __( '- LNST chưa phân phối kỳ này', 'bsc' ),
										'order' => 113,
										'children' => []
									],
								],
							],
							[ 
								'title' => __( 'Nguồn vốn đầu tư XDCB', 'bsc' ),
								'order' => 114,
								'children' => []
							],
							[ 
								'title' => __( 'Lợi ích của cổ đông không kiểm soát', 'bsc' ),
								'order' => 115,
								'children' => []
							],
						],
					],

					// 2.2 Nguồn kinh phí và quỹ khác
					[ 
						'title' => __( 'Nguồn kinh phí và quỹ khác', 'bsc' ),
						'order' => 116,
						'children' => [ 
							[ 
								'title' => __( 'Nguồn kinh phí', 'bsc' ),
								'order' => 117,
								'children' => []
							],
							[ 
								'title' => __( 'Nguồn kinh phí đã hình thành TSCĐ', 'bsc' ),
								'order' => 118,
								'children' => []
							],
						],
					],
				],
			],
		],
	],
];
