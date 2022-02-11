<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>영업관리 시스템</title>
<!-- Fonts -->
<link
	href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
	rel="stylesheet">
<!-- Styles -->
<style>
/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
html {
	line-height: 1.15;
	-webkit-text-size-adjust: 100%
}
body {
	margin: 0
}
a {
	background-color: transparent
}
[hidden] {
	display: none
}
html {
	font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI,
		Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif,
		Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
	line-height: 1.5
}
*, :after, :before {
	box-sizing: border-box;
	border: 0 solid #e2e8f0
}
a {
	color: inherit;
	text-decoration: inherit
}
svg, video {
	display: block;
	vertical-align: middle
}
video {
	max-width: 100%;
	height: auto
}
.bg-white { -
	-bg-opacity: 1;
	background-color: #fff;
	background-color: rgba(255, 255, 255, var(- -bg-opacity))
}
.bg-gray-100 { -
	-bg-opacity: 1;
	background-color: #f7fafc;
	background-color: rgba(247, 250, 252, var(- -bg-opacity))
}
.border-gray-200 { -
	-border-opacity: 1;
	border-color: #edf2f7;
	border-color: rgba(237, 242, 247, var(- -border-opacity))
}
.border-t {
	border-top-width: 1px
}
.flex {
	display: flex
}
.grid {
	display: grid
}
.hidden {
	display: none
}
.items-center {
	align-items: center
}
.justify-center {
	justify-content: center
}
.font-semibold {
	font-weight: 600
}
.h-5 {
	height: 1.25rem
}
.h-8 {
	height: 2rem
}
.h-16 {
	height: 4rem
}
.text-sm {
	font-size: .875rem
}
.text-lg {
	font-size: 1.125rem
}
.leading-7 {
	line-height: 1.75rem
}
.mx-auto {
	margin-left: auto;
	margin-right: auto
}
.ml-1 {
	margin-left: .25rem
}
.mt-2 {
	margin-top: .5rem
}
.mr-2 {
	margin-right: .5rem
}
.ml-2 {
	margin-left: .5rem
}
.mt-4 {
	margin-top: 1rem
}
.ml-4 {
	margin-left: 1rem
}
.mt-8 {
	margin-top: 2rem
}
.ml-12 {
	margin-left: 3rem
}
.-mt-px {
	margin-top: -1px
}
.max-w-6xl {
	max-width: 72rem
}
.min-h-screen {
	min-height: 100vh
}
.overflow-hidden {
	overflow: hidden
}
.p-6 {
	padding: 1.5rem
}
.py-4 {
	padding-top: 1rem;
	padding-bottom: 1rem
}
.px-6 {
	padding-left: 1.5rem;
	padding-right: 1.5rem
}
.pt-8 {
	padding-top: 2rem
}
.fixed {
	position: fixed
}
.relative {
	position: relative
}
.top-0 {
	top: 0
}
.right-0 {
	right: 0
}
.shadow {
	box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0
		rgba(0, 0, 0, .06)
}
.text-center {
	text-align: center
}
.text-gray-200 { -
	-text-opacity: 1;
	color: #edf2f7;
	color: rgba(237, 242, 247, var(- -text-opacity))
}
.text-gray-300 { -
	-text-opacity: 1;
	color: #e2e8f0;
	color: rgba(226, 232, 240, var(- -text-opacity))
}
.text-gray-400 { -
	-text-opacity: 1;
	color: #cbd5e0;
	color: rgba(203, 213, 224, var(- -text-opacity))
}
.text-gray-500 { -
	-text-opacity: 1;
	color: #a0aec0;
	color: rgba(160, 174, 192, var(- -text-opacity))
}
.text-gray-600 { -
	-text-opacity: 1;
	color: #718096;
	color: rgba(113, 128, 150, var(- -text-opacity))
}
.text-gray-700 { -
	-text-opacity: 1;
	color: #4a5568;
	color: rgba(74, 85, 104, var(- -text-opacity))
}
.text-gray-900 { -
	-text-opacity: 1;
	color: #1a202c;
	color: rgba(26, 32, 44, var(- -text-opacity))
}
.underline {
	text-decoration: underline
}
.antialiased {
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale
}
.w-5 {
	width: 1.25rem
}
.w-8 {
	width: 2rem
}
.w-auto {
	width: auto
}
.grid-cols-1 {
	grid-template-columns: repeat(1, minmax(0, 1fr))
}
@media ( min-width :640px) {
	.sm\:rounded-lg {
		border-radius: .5rem
	}
	.sm\:block {
		display: block
	}
	.sm\:items-center {
		align-items: center
	}
	.sm\:justify-start {
		justify-content: flex-start
	}
	.sm\:justify-between {
		justify-content: space-between
	}
	.sm\:h-20 {
		height: 5rem
	}
	.sm\:ml-0 {
		margin-left: 0
	}
	.sm\:px-6 {
		padding-left: 1.5rem;
		padding-right: 1.5rem
	}
	.sm\:pt-0 {
		padding-top: 0
	}
	.sm\:text-left {
		text-align: left
	}
	.sm\:text-right {
		text-align: right
	}
}
@media ( min-width :768px) {
	.md\:border-t-0 {
		border-top-width: 0
	}
	.md\:border-l {
		border-left-width: 1px
	}
	.md\:grid-cols-2 {
		grid-template-columns: repeat(2, minmax(0, 1fr))
	}
}
@media ( min-width :1024px) {
	.lg\:px-8 {
		padding-left: 2rem;
		padding-right: 2rem
	}
}
@media ( prefers-color-scheme :dark) {
	.dark\:bg-gray-800 { -
		-bg-opacity: 1;
		background-color: #2d3748;
		background-color: rgba(45, 55, 72, var(- -bg-opacity))
	}
	.dark\:bg-gray-900 { -
		-bg-opacity: 1;
		background-color: #1a202c;
		background-color: rgba(26, 32, 44, var(- -bg-opacity))
	}
	.dark\:border-gray-700 { -
		-border-opacity: 1;
		border-color: #4a5568;
		border-color: rgba(74, 85, 104, var(- -border-opacity))
	}
	.dark\:text-white { -
		-text-opacity: 1;
		color: #fff;
		color: rgba(255, 255, 255, var(- -text-opacity))
	}
	.dark\:text-gray-400 { -
		-text-opacity: 1;
		color: #cbd5e0;
		color: rgba(203, 213, 224, var(- -text-opacity))
	}
}
</style>
<style>
body {
	font-family: 'Nunito', sans-serif;
}
.table_EstimateDetail_List1, .table_EstimateDetail_List2 {
	display: flex;
	display: -webkit-box;
	display: -ms-flexbox;
	overflow-x: auto;
	overflow-y: hidden;
}
.table_EstimateDetail_List1 td, .table_EstimateDetail_List2 td {
	padding: 5px;
}
.table_EstimateDetail_List1 tbody, .table_EstimateDetail_List2 tbody {
	display: flex
}
.table_EstimateDetail_List1 th, .table_EstimateDetail_List2 th,
	.table_EstimateDetail_List1 td, .table_EstimateDetail_List2 td {
	display: block;
}
th, th, td {
	text-align: center;
}
th {
	background-color: #eeeeee;
	padding: 5px;
}
.table_EstimateDetail_List3 th {
	border: 2px solid black;
}
.table_EstimateDetail_List3 td {
	border: 2px solid black;
}
</style>

<script type="text/javascript">
function clickTrEvent(trObj) {
	var link = "http://127.0.0.1:8000/OrderBook";
	var link = "/OrderBook";
	location.href = link;
};
function clickCorrectionEvent(trObj) {
	var link = "http://127.0.0.1:8000/OrderBookCorrection";
	var link = "/OrderBookCorrection";
	location.href = link;
};
		
</script>
</head>
<body class="antialiased">
@include('Layout.Sidebar')
	<div class="min-h-screen" style="margin-left: 5%; margin-right: 5%; width: 77%; float: right;">
		<h2 style="text-align: center;">수주 품의서</h2>
		<table class="table_EstimateDetail_List3"
			style="text-align: centger; border: 1px solid black; width: 21%; float: right; margin-left: 40px;">
			<thead>
				<tr>
					<th colspan="3">결제</th>
				</tr>
				<tr>
					<th style="width: 7%;">담당</th>
					<th style="width: 7%;">팀장</th>
					<th style="width: 7%;">부서장</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="height: 50px;"></td>
					<td style="height: 50px;"></td>
					<td style="height: 50px;"></td>
				</tr>
			</tbody>
		</table>
		<table class="table_EstimateDetail_List3"
			style="text-align: centger; border: 1px solid black; width: 8%; float: right;">
			<thead>
				<tr>
					<th>합의</th>
				</tr>
				<tr>
					<th>발주담당</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="height: 50px;"></td>
				</tr>
			</tbody>
		</table>
		<table class="table_EstimateDetail_List1"
			style="border: 1px solid black; width: 30%;">
			<thead>
				<tr>
					<th>작성일자</th>
					<th>계약번호</th>
					<th>영업담당</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>2</td>
					<td>3</td>
				</tr>
			</tbody>
		</table>
		<table class="table_EstimateDetail_List2"
			style="text-align: centger; border: 1px solid black; width: 30%; float: left; margin-top: 10px; margin-right: 30px;">
			<thead>
				<tr>
					<th>거래처명</th>
					<th>거래처분류</th>
					<th>세금계산서 발행예정일</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>4</td>
					<td>5</td>
					<td>6</td>
				</tr>
			</tbody>
		</table>
		<table class="table_EstimateDetail_List2"
			style="text-align: centger; border: 1px solid black; width: 33%; float: left; margin-top: 10px;">
			<thead>
				<tr>
					<th>담당자</th>
					<th>사입자번호</th>
					<th>사업자주소</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>7</td>
					<td>8</td>
					<td>9</td>
				</tr>
			</tbody>
		</table>
		</table>
		<table class="table_EstimateDetail_List2"
			style="text-align: centger; border: 1px solid black; width: 33%; float: right; margin-top: 10px; margin-bottom: 30px;">
			<thead>
				<tr>
					<th>연락처</th>
					<th>메일</th>
					<th>결제예정일</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>10</td>
					<td>11</td>
					<td>12</td>
				</tr>
			</tbody>
		</table>
		<table class="table_EstimateDetail_List3"
			style="text-align: centger; border: 1px solid black; width: 100%;">
			<thead>
				<tr>
					<th>No</th>
					<th>상품명</th>
					<th>수량</th>
					<th>매출단가</th>
					<th>매출금액</th>
					<th>매입단가</th>
					<th>매입금액</th>
					<th>매출이익</th>
					<th>매입처</th>
					<th>비고</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td >1</td>
					<td style="word-break: break-all; ">
						<input type="text" name='item1' id="item1" value="{{$temp['orderbook_sales'][0]->item}}">
					</td>
					<td><input type="textarea" name='count1' id="count1" value="{{$temp['orderbook_sales'][0]->count}}"></input></td>
					<td><input type="text" name='per_sales1' id="per_sales1" value="{{$temp['orderbook_sales'][0]->per_sales}}"></input></td>
					<td><input type="text" name='sales1' id="sales1" value="{{$temp['orderbook_sales'][0]->sales}}"></input></td>
					<td><input type="text" name='per_buy1' id="per_buy1" value="{{$temp['orderbook_sales'][0]->per_buy}}"></input></td>
					<td><input type="text" name='buy1' id="buy1" value="{{$temp['orderbook_sales'][0]->buy}}"></input></td>
					<td><input type="text" name='profit_sales1' id="profit_sales1" value="{{$temp['orderbook_sales'][0]->profit_sales}}"></input></td>
					<td><input type="text" name='shop1' id="shop1" value="{{$temp['orderbook_sales'][0]->shop}}"></input></td>
					<td><input type="text" name='note1' id="note1" value="{{$temp['orderbook_sales'][0]->note}}"></input></td>
				</tr>
				<tr>
					<td height="10">2</td>
					<td style="word-break: break-all; ">
						<input type="text" name='item2' id="item2" value="{{$temp['orderbook_sales'][1]->item}}">
					</td>
					<td><input type="text" name='count2' id="count2" value="{{$temp['orderbook_sales'][1]->count}}"></td>
					<td><input type="text" name='per_sales2' id="per_sales2" value="{{$temp['orderbook_sales'][1]->per_sales}}"></td>
					<td><input type="text" name='sales2' id="sales2" value="{{$temp['orderbook_sales'][1]->sales}}"></td>
					<td><input type="text" name='per_buy2' id="per_buy2" value="{{$temp['orderbook_sales'][1]->per_buy}}"></td>
					<td><input type="text" name='buy2' id="buy2" value="{{$temp['orderbook_sales'][1]->buy}}"></td>
					<td><input type="text" name='profit_sales2' id="profit_sales2" value="{{$temp['orderbook_sales'][1]->profit_sales}}"></td>
					<td><input type="text" name='shop2' id="shop2" value="{{$temp['orderbook_sales'][1]->shop}}"></td>
					<td><input type="text" name='note2' id="note2" value="{{$temp['orderbook_sales'][1]->note}}"></td>
				</tr>
				<tr>
					<td>1</td>
					<td style="word-break: break-all; width: 30%;">RED HAT
						~~~~~~TGGGGGGDFDFDFDFdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</td>
					<td>2</td>
					<td>6,170,000</td>
					<td>4,000,000</td>
					<td>10,170,000</td>
					<td>4,000,000</td>
					<td>4,000,000</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>2</td>
					<td style="word-break: break-all; width: 30%;">RED HAT
						~~~~~~TGGGGGGDFDFDFDFdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</td>
					<td>2</td>
					<td>6,170,000</td>
					<td>4,000,000</td>
					<td>10,170,000</td>
					<td>4,000,000</td>
					<td>4,000,000</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="2">합계 (VAT별도)</td>
					<td colspan="2">2</td>
					<td colspan="2">4,000,000</td>
					<td>10,170,000</td>
					<td>4,000,000</td>
					<td>이익률</td>
					<td>12%</td>
				</tr>
				<tr>
					<td height="10" colspan="3">담당엔지니어</td>
					<td >기술자원료</td>
					<td></td>
					<td colspan="2">실영업이익</td>
					<td colspan="3"><input type="text" name='real_time_profit' id="real_time_profit" value="{{$temp['orderbook_sales'][0]->real_time_profit}}"></td>
				</tr>
				<tr>
					<td colspan="2" height="30" >참고내용</td>
					<td style="word-break: break-all; width: 40%;" colspan="9">
						~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</td>
				</tr>
			</tbody>
		</table>
		<table class="table_EstimateDetail_List3"
			style="text-align: centger; border: 1px solid black; width: 100%; margin-top: 30px;">
			<thead>
				<tr>
					<th>구분</th>
					<th>한글</th>
					<th>English</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>프로젝트명</td>
					<td style="word-break: break-all; width: 40%;"></td>
					<td style="word-break: break-all; width: 40%;"></td>
				</tr>
				<tr>
					<td>회사명</td>
					<td style="word-break: break-all; width: 40%;"></td>
					<td style="word-break: break-all; width: 40%;"></td>
				</tr>
				<tr>
					<td>우편번호</td>
					<td style="word-break: break-all; width: 40%;"></td>
					<td style="word-break: break-all; width: 40%;"></td>
				</tr>
				<tr>
					<td>주소</td>
					<td style="word-break: break-all; width: 40%;"></td>
					<td style="word-break: break-all; width: 40%;"></td>
				</tr>
				<tr>
					<td>담당자</td>
					<td style="word-break: break-all; width: 40%;"></td>
					<td style="word-break: break-all; width: 40%;"></td>
				</tr>
				<tr>
					<td>전화번호</td>
					<td style="word-break: break-all; width: 40%;"></td>
					<td style="word-break: break-all; width: 40%;"></td>
				</tr>
				<tr>
					<td>이메일주소</td>
					<td style="word-break: break-all; width: 40%;"></td>
					<td style="word-break: break-all; width: 40%;"></td>
				</tr>
				<tr>
					<td>활성화날짜</td>
					<td style="word-break: break-all; width: 40%;"></td>
					<td style="word-break: break-all; width: 40%;"></td>
				</tr>
				<tr>
					<td>사업자번호</td>
					<td style="word-break: break-all; width: 40%;"></td>
					<td style="word-break: break-all; width: 40%;"></td>
				</tr>
				<tr>
					<td>계약기간</td>
					<td style="word-break: break-all; width: 40%;"></td>
					<td style="word-break: break-all; width: 40%;"></td>
				</tr>
		
		</table>
		<button class="trigger"
			style="width: 7%; float: right; margin-top: 10px;" value="aa"
			onclick="javascript:clickTrEvent(this)">돌아가기</button>
		<button class="trigger"
			style="width: 5%; float: right; margin-top: 10px; margin-right: 10px; margin-bottom: 30px;"
			value="aa" onclick="javascript:clickCorrectionEvent(this)">수정</button>
	</div>
</body>
</html>
