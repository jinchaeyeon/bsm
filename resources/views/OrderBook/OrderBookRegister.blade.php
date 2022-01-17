<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
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

.registerSearch, textarea {
	width: 439px;
	height: 20px;
	background-color: #efefef;
	border-radius: 6px;
	border: 1px solid #dedede;
	padding: 10px;
	margin-top: 3px;
	font-size: 0.9em;
	color: #3a3a3a;
}

.registerSearch:focus, textarea:focus {
	border: 1px solid #97d6eb;
}

.registerSearch1, textarea {
	width: 439px;
	height: 27px;
	background-color: #efefef;
	border-radius: 6px;
	border: 1px solid #dedede;
	padding: 10px;
	margin-top: 3px;
	font-size: 0.9em;
	color: #3a3a3a;
}

.registerSearch1:focus, textarea:focus {
	border: 1px solid #97d6eb;
}

#register {
	width: 127px;
	height: 48px;
	text-align: center;
	border: none;
	margin-top: 20px;
	cursor: pointer;
}

.modal {
	position: fixed;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	background-color: rgba(0, 0, 0, 0.5);
	opacity: 0;
	visibility: hidden;
	transform: scale(1.1);
	transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform
		0.25s;
}

.modal-content {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	background-color: white;
	padding: 1rem 1.5rem;
	width: 500px;
	height: 500px;
	border-radius: 0.5rem;
}

.close-button {
	float: right;
	width: 1.5rem;
	line-height: 1.5rem;
	text-align: center;
	cursor: pointer;
	border-radius: 0.25rem;
	background-color: lightgray;
}

.close-button:hover {
	background-color: darkgray;
}

.show-modal {
	opacity: 1;
	visibility: visible;
	transform: scale(1.0);
	transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
}
</style>
<script type="text/javascript">
			function clickTrEvent(trObj) {
				var link = "/OrderBook";

				location.href = link;
			};
</script>
</head>
<body class="antialiased">
@include('Layout.Sidebar')
	<div class="min-h-screen" style="margin-left: 5%; margin-right: 5%; width: 77%; float: right;">
		<caption>
			<h2 style="text-align: center">수주품의서 등록</h2>
		</caption>
		<table class="table_EstimateDetail_List1"
			style="border: 1px solid black; width: 50%; float: left;">
			<thead>
				<tr>
					<th><label for="type">사업유형</label></th>
					<th>고객사명</th>
					<th>부영업대표</th>
					<th>수주년월</th>
					<th>winRate</th>
					<th>Funnel금액</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><select name="type" id="type">
							<option value="1">1</option>
							<option value="2">2</option>
					</select></td>
					<td><input class="registerSearch" type="string" name="string"></td>
					<td><input class="registerSearch" type="string" name="string"></td>
					<td><input class="registerSearch" type="string" name="string"></td>
					<td><input class="registerSearch" type="date" name="date"></td>
					<td>0원</td>
				</tr>
			</tbody>
		</table>
		<table class="table_EstimateDetail_List2"
			style="border: 1px solid black; width: 50%;">
			<thead>
				<tr>
					<th>사업명</th>
					<th>매출처명</th>
					<th>계약기간</th>
					<th><label for="state">진행상태</label></th>
					<th>Forecast</th>
					<th>주요제품</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input class="registerSearch" type="string" name="string"></td>
					<td><input class="registerSearch" type="string" name="string"></td>
					<td><input class="registerSearch" type="date" name="date"></td>
					<td><select name="state" id="state">
							<option value="1">1</option>
							<option value="2">2</option>
					</select></td>
					<td>0원</td>
					<td><input class="registerSearch" type="string" name="string"></td>
				</tr>
			</tbody>
		</table>
		<table class="table_Estimate_List"
			style="text-align: centger; border: 1px solid black; width: 100%; margin-top: 10px;">
			<thead>
				<tr>
					<th>매출년</th>
					<th>매출월</th>
					<th>매출금액</th>
					<th>매입금액</th>
					<th>매입처</th>
					<th>수금년</th>
					<th>수금월</th>
					<th>수금상태</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
					<td>5</td>
					<td>6</td>
					<td>7</td>
					<td>8</td>
				</tr>
			</tbody>
		</table>
		<button class="trigger"
			style="width: 7%; float: right; margin-top: 10px;" value="aa">매출 등록</button>
		<div class="modal">
			<div class="modal-content">
				<span class="close-button">&times;</span>
				<h1 class="title">매출정보 등록</h1>
				<label>매출 일자 :</label> <input class="registerSearch1" type="date"
					name="date"> <label>매출금액 :</label><input class="registerSearch1"
					type="number" name="number"><label>매입금액 :</label><input
					class="registerSearch1" type="number" name="number"><label>매입처 :</label><input
					class="registerSearch1" type="string" name="string"><label>수금일자 :</label><input
					class="registerSearch1" type="date" name="date"> <input
					class="registerSearch1" type="button" id="register" value="등록"
					onclick="javascript:clickRegisterEvent(this)">
			</div>
		</div>
		<script type="text/javascript"> 
         var modal = document.querySelector(".modal"); 
         var trigger = document.querySelector(".trigger"); 
         var closeButton = document.querySelector(".close-button"); 
         var registerButton = document.querySelector("#register");

        //console.log(modal);

        function toggleModal() { 
             modal.classList.toggle("show-modal"); 
         }

        function windowOnClick(event) { 
             if (event.target === modal) { 
                 toggleModal(); 
             } 
         }

        trigger.addEventListener("click", toggleModal); 
         closeButton.addEventListener("click", toggleModal); 
         register.addEventListener("click", toggleModal); 
         window.addEventListener("click", windowOnClick); 
     </script>
		<div style="margin-top: 40px;">
			파일 정보 : <input type="file" name="file" accept="image/*">
			<button style="width: 5%;" value="aa">추가</button>
		</div>
		</form>
		<button class="trigger"
			style="width: 5%; float: right; margin-top: 10px;" value="aa"
			onclick="javascript:clickTrEvent(this)">등록</button>
		<div style="width: 5%; display: inline-block;"></div>
	</div>
</body>
</html>
