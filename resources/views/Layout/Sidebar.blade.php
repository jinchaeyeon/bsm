<!DOCTYPE html>
<htmllang-"en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="id-edge" />
<title>영업관리 시스템</title>
<style>
html, body {
	margin: 0;
	padding: 0;
}

.blind {
	position: absolute;
	top: 0;
	left: 0;
	width: 1px;
	height: 1px;
	margin: -1px;
	overflow: hidden;
	clip: rect(0, 0, 0, 0);
}

header {
	border-bottom: 1px solid #000;
    float:left;
    width: 12%;
}

a {
	text-decoration: none;
}

.side_toggle_btn: :before {
	content: ">";
	display: inline-block;
	width: 50px;
	line-height: 50px;
	font-size: 24px;
	text-align: center;
	border-right: 1px solid black;
}

.side_input:checked+.side_toggle_btn::before {
	content: "<";
}

.side_input:checked ~ .sidelist {
	left: 0;
}

.side_list {
	position: absolute;
	left: -200px;
	top: 50px;
	bottom: 0;
	border-right: 1px solid black;
	width: 200px;
	font-size: 24px;
	transition: 0.3s ease-in;
}

.side_link {
	display: block;
	text-align: center;
	padding: 40px 0;
	border-bottom: 1px solid black;
}

</style>
</head>
<body>
	<header>
		<input type="checkbox" id="side_btn" class="side_input blind" />
		<lable for="side_btn" class="side_toggle_btn"></lable>
		<divclass_"side_list"> 
			<a href="/main" class="side_link">총괄</a>
			<a href="/customer_management" class="side_link">고객 관리</a> 
			<a href="/manager_management" class="side_link">담당자 관리</a>
			<a href="/pipeline" class="side_link">파이프라인</a> 
			<a href="/business" class="side_link">사업관리</a> 
			<a href="/Estimate" class="side_link">견적서 관리</a> 
			<a href="/Statistics" class="side_link">사업분석</a> 
			<a href="/OrderBook" class="side_link">수주품의서 관리</a> 
			<a href="/representative" class="side_link">영업담당자관리</a> 
			<a href="/item" class="side_link">품목 목록</a> 
			<a href="/authority" class="side_link">사용자 권한 부여</a> 
		</div>
	</header>
</body>
</html>