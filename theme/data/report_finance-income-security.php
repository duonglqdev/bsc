<?php
return [ 
	// I. DOANH THU HOẠT ĐỘNG
	[ 
		'title' => 'I. ' . __( 'Doanh thu hoạt động', 'bsc' ),
		'order' => 2,
		'children' => [ 

			[ 
				'title' => '1. ' . __( 'Lãi từ các tài sản tài chính ghi nhận thông qua lãi/lỗ (FVTPL)', 'bsc' ),
				'order' => 3,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Lãi bán các tài sản tài chính', 'bsc' ),
						'order' => 4,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Chênh lệch tăng đánh giá lại các tài sản tài chính FVTPL', 'bsc' ),
						'order' => 5,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Cổ tức, tiền lãi phát sinh từ tài sản tài chính FVTPL', 'bsc' ),
						'order' => 6,
						'children' => []
					],
				],
			],
			[ 
				'title' => '2. ' . __( 'Lãi từ các khoản đầu tư nắm giữ đến ngày đáo hạn (HTM)', 'bsc' ),
				'order' => 7,
				'children' => []
			],
			[ 
				'title' => '3. ' . __( 'Lãi từ các khoản cho vay và phải thu', 'bsc' ),
				'order' => 8,
				'children' => []
			],
			[ 
				'title' => '4. ' . __( 'Lãi từ tài sản tài chính sẵn sàng để bán (AFS)', 'bsc' ),
				'order' => 9,
				'children' => []
			],
			[ 
				'title' => '5. ' . __( 'Lãi từ các công cụ phái sinh phòng ngừa rủi ro', 'bsc' ),
				'order' => 10,
				'children' => []
			],
			[ 
				'title' => '6. ' . __( 'Doanh thu nghiệp vụ môi giới chứng khoán', 'bsc' ),
				'order' => 11,
				'children' => []
			],
			[ 
				'title' => '7. ' . __( 'Doanh thu bảo lãnh phát hành chứng khoán', 'bsc' ),
				'order' => 12,
				'children' => []
			],
			[ 
				'title' => '8. ' . __( 'Doanh thu đại lý phát hành chứng khoán', 'bsc' ),
				'order' => 13,
				'children' => []
			],
			[ 
				'title' => '9. ' . __( 'Doanh thu nghiệp vụ tư vấn đầu tư chứng khoán', 'bsc' ),
				'order' => 14,
				'children' => []
			],
			[ 
				'title' => '10. ' . __( 'Doanh thu nghiệp vụ lưu ký chứng khoán', 'bsc' ),
				'order' => 15,
				'children' => []
			],
			[ 
				'title' => '11. ' . __( 'Doanh thu hoạt động tư vấn tài chính', 'bsc' ),
				'order' => 16,
				'children' => []
			],
			[ 
				'title' => '12. ' . __( 'Thu nhập hoạt động khác', 'bsc' ),
				'order' => 17,
				'children' => []
			],
		],
	],

	// II. CHI PHÍ HOẠT ĐỘNG
	[ 
		'title' => 'II. ' . __( 'Chi phí hoạt động', 'bsc' ),
		'order' => 18,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Lỗ các tài sản tài chính ghi nhận thông qua lãi/lỗ (FVTPL)', 'bsc' ),
				'order' => 19,
				'children' => [ 
					[ 
						'title' => '- ' . __( 'Lỗ bán các tài sản tài chính', 'bsc' ),
						'order' => 20,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Chênh lệch giảm đánh giá lại các tài sản tài chính FVTPL', 'bsc' ),
						'order' => 21,
						'children' => []
					],
					[ 
						'title' => '- ' . __( 'Chi phí giao dịch mua các tài sản tài chính FVTPL', 'bsc' ),
						'order' => 22,
						'children' => []
					],
				],
			],
			[ 
				'title' => '2. ' . __( 'Lỗ các khoản đầu tư nắm giữ đến ngày đáo hạn (HTM)', 'bsc' ),
				'order' => 23,
				'children' => []
			],
			[ 
				'title' => '3. ' . __( 'Lỗ và ghi nhận chênh lệch đánh giá theo giá trị hợp lý tài sản tài chính sẵn sàng để bán (AFS) khi phân loại lại', 'bsc' ),
				'order' => 24,
				'children' => []
			],
			[ 
				'title' => '4. ' . __( 'Chi phí dự phòng tài sản tài chính, xử lý tồn thất các khoản phải thu khó đòi và lỗ suy giảm tài sản tài chính và chi phí dự phòng các khoản cho vay', 'bsc' ),
				'order' => 25,
				'children' => []
			],
			[ 
				'title' => '5. ' . __( 'Lỗ từ các tài sản tài chính phái sinh phòng ngừa rủi ro', 'bsc' ),
				'order' => 26,
				'children' => []
			],
			[ 
				'title' => '6. ' . __( 'Chi phí hoạt động tự doanh', 'bsc' ),
				'order' => 27,
				'children' => []
			],
			[ 
				'title' => '7. ' . __( 'Chi phí nghiệp vụ môi giới chứng khoán', 'bsc' ),
				'order' => 28,
				'children' => []
			],
			[ 
				'title' => '8. ' . __( 'Chi phí nghiệp vụ bảo lãnh, đại lý phát hành chứng khoán', 'bsc' ),
				'order' => 29,
				'children' => []
			],
			[ 
				'title' => '9. ' . __( 'Chi phí nghiệp vụ tư vấn đầu tư chứng khoán', 'bsc' ),
				'order' => 30,
				'children' => []
			],
			[ 
				'title' => '10. ' . __( 'Chi phí nghiệp vụ lưu ký chứng khoán', 'bsc' ),
				'order' => 31,
				'children' => []
			],
			[ 
				'title' => '11. ' . __( 'Chi phí hoạt động tư vấn tài chính', 'bsc' ),
				'order' => 32,
				'children' => []
			],
			[ 
				'title' => '12. ' . __( 'Chi phí các dịch vụ khác', 'bsc' ),
				'order' => 33,
				'children' => []
			],
		],
	],

	// III. DOANH THU HOẠT ĐỘNG TÀI CHÍNH
	[ 
		'title' => 'III. ' . __( 'Doanh thu hoạt động tài chính', 'bsc' ),
		'order' => 34,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Chênh lệch lãi tỷ giá hối đoái đã và chưa thực hiện', 'bsc' ),
				'order' => 35,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Doanh thu, dự thu cổ tức, lãi tiền gửi ngân hàng không kỳ hạn/cố định', 'bsc' ),
				'order' => 36,
				'children' => []
			],
			[ 
				'title' => '3. ' . __( 'Lãi bán, thanh lý các khoản đầu tư vào công ty con, liên kết, liên doanh', 'bsc' ),
				'order' => 37,
				'children' => []
			],
			[ 
				'title' => '4. ' . __( 'Doanh thu khác về đầu tư', 'bsc' ),
				'order' => 38,
				'children' => []
			],
		],
	],

	// IV. CHI PHÍ TÀI CHÍNH
	[ 
		'title' => 'IV. ' . __( 'Chi phí tài chính', 'bsc' ),
		'order' => 39,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Chênh lệch lỗ tỷ giá hối đoái đã và chưa thực hiện', 'bsc' ),
				'order' => 40,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Chi phí lãi vay', 'bsc' ),
				'order' => 41,
				'children' => []
			],
			[ 
				'title' => '3. ' . __( 'Lỗ bán, thanh lý các khoản đầu tư vào công ty con, liên kết, liên doanh', 'bsc' ),
				'order' => 42,
				'children' => []
			],
			[ 
				'title' => '4. ' . __( 'Chi phí dự phòng suy giảm giá trị các khoản đầu tư tài chính dài hạn', 'bsc' ),
				'order' => 43,
				'children' => []
			],
			[ 
				'title' => '5. ' . __( 'Chi phí tài chính khác', 'bsc' ),
				'order' => 44,
				'children' => []
			],
			[ 
				'title' => '6. ' . __( 'Phân lãi, lỗ trong công ty liên doanh, liên kết', 'bsc' ),
				'order' => 45,
				'children' => []
			],
		],
	],

	// V. CHI PHÍ BÁN HÀNG
	[ 
		'title' => 'V. ' . __( 'Chi phí bán hàng', 'bsc' ),
		'order' => 46,
		'children' => [],
	],

	// VI. CHI PHÍ QUẢN LÝ CÔNG TY CHỨNG KHOÁN
	[ 
		'title' => 'VI. ' . __( 'Chi phí quản lý công ty chứng khoán', 'bsc' ),
		'order' => 47,
		'children' => [],
	],

	// VII. KẾT QUẢ HOẠT ĐỘNG
	[ 
		'title' => 'VII. ' . __( 'Kết quả hoạt động', 'bsc' ),
		'order' => 48,
		'children' => [],
	],

	// VIII. KẾT QUẢ HOẠT ĐỘNG KHÁC
	[ 
		'title' => 'VIII. ' . __( 'Kết quả hoạt động khác', 'bsc' ),
		'order' => 49,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Thu nhập khác', 'bsc' ),
				'order' => 50,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Chi phí khác', 'bsc' ),
				'order' => 51,
				'children' => []
			],
		],
	],

	// IX. TỔNG LỢI NHUẬN KẾ TOÁN TRƯỚC THUẾ
	[ 
		'title' => 'IX. ' . __( 'Tổng lợi nhuận kế toán trước thuế', 'bsc' ),
		'order' => 52,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Lợi nhuận đã thực hiện', 'bsc' ),
				'order' => 53,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Lợi nhuận chưa thực hiện', 'bsc' ),
				'order' => 54,
				'children' => []
			],
		],
	],

	// X. CHI PHÍ THUẾ TNDN
	[ 
		'title' => 'X. ' . __( 'Chi phí thuế TNDN', 'bsc' ),
		'order' => 55,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Chi phí thuế TNDN hiện hành', 'bsc' ),
				'order' => 56,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Chi phí thuế TNDN hoãn lại', 'bsc' ),
				'order' => 57,
				'children' => []
			],
		],
	],

	// XI. LỢI NHUẬN KẾ TOÁN SAU THUẾ TNDN
	[ 
		'title' => 'XI. ' . __( 'Lợi nhuận kế toán sau thuế TNDN', 'bsc' ),
		'order' => 58,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Lợi nhuận sau thuế phân bổ cho chủ sở hữu', 'bsc' ),
				'order' => 59,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Lợi nhuận sau thuế trích các Quỹ', 'bsc' ),
				'order' => 60,
				'children' => []
			],
			[ 
				'title' => '3. ' . __( 'Lợi nhuận thuần phân bổ cho lợi ích của cổ đông không kiểm soát', 'bsc' ),
				'order' => 61,
				'children' => []
			],
		],
	],

	// XII. THU NHẬP (LỖ) TOÀN DIỆN KHÁC SAU THUẾ TNDN
	[ 
		'title' => 'XII. ' . __( 'Thu nhập (lỗ) toàn diện khác sau thuế TNDN', 'bsc' ),
		'order' => 62,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Lãi/(Lỗ) từ đánh giá lại các khoản đầu tư giữ đến ngày đáo hạn', 'bsc' ),
				'order' => 63,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Lãi/(Lỗ) từ đánh giá lại các tài sản tài chính sẵn sàng để bán', 'bsc' ),
				'order' => 64,
				'children' => []
			],
			[ 
				'title' => '3. ' . __( 'Lãi/(Lỗ) toàn diện khác được chia từ hoạt động đầu tư vào công ty con, đầu tư liên kết, liên doanh', 'bsc' ),
				'order' => 65,
				'children' => []
			],
			[ 
				'title' => '4. ' . __( 'Lãi/(Lỗ) từ đánh giá lại các công cụ tài chính phái sinh', 'bsc' ),
				'order' => 66,
				'children' => []
			],
			[ 
				'title' => '5. ' . __( 'Lãi/(Lỗ) chênh lệch tỷ giá hoạt động tại nước ngoài', 'bsc' ),
				'order' => 67,
				'children' => []
			],
			[ 
				'title' => '6. ' . __( 'Lãi, lỗ từ các khoản đầu tư vào công ty con, công ty liên kết, liên doanh chưa chia', 'bsc' ),
				'order' => 68,
				'children' => []
			],
			[ 
				'title' => '7. ' . __( 'Lãi, lỗ thanh giá công cụ phái sinh', 'bsc' ),
				'order' => 69,
				'children' => []
			],
			[ 
				'title' => '8. ' . __( 'Lãi/(Lỗ) điều chỉnh đánh giá lại tài sản cố định theo mô hình giá trị hợp lý', 'bsc' ),
				'order' => 70,
				'children' => []
			],
		],
	],

	// XIII. THU NHẬP THUẦN TRÊN CỔ PHIẾU PHỔ THÔNG
	[ 
		'title' => 'XIII. ' . __( 'Thu nhập thuần trên cổ phiếu phổ thông', 'bsc' ),
		'order' => 71,
		'children' => [ 
			[ 
				'title' => '1. ' . __( 'Lãi cơ bản trên cổ phiếu (Đồng/1 cổ phiếu)', 'bsc' ),
				'order' => 72,
				'children' => []
			],
			[ 
				'title' => '2. ' . __( 'Thu nhập pha loãng trên cổ phiếu (Đồng/1 cổ phiếu)', 'bsc' ),
				'order' => 73,
				'children' => []
			],
		],
	],
];
