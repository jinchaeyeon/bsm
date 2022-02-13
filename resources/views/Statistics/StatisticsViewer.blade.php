<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>영업관리 시스템</title>
<link
	href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
	rel="stylesheet">
<script
	src="https://cdn.anychart.com/releases/8.10.0/js/anychart-base.min.js"></script>
<style type="text/css">
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
<script>
function checkRadio()

{
var test = document.getElementsByName('chk_info');
if (test[0].checked == true)
{
 document.getElementById('1').style.display="";
 document.getElementById('2').style.display="none";
 document.getElementById('3').style.display="none";
 document.getElementById('4').style.display="none";
 document.getElementById('5').style.display="none";
 document.getElementById('6').style.display="none";
}
else if (test[1].checked == true )
{
	 document.getElementById('1').style.display="none";
	 document.getElementById('2').style.display="";
	 document.getElementById('3').style.display="none";
	 document.getElementById('4').style.display="none";
	 document.getElementById('5').style.display="none";
	 document.getElementById('6').style.display="none";
}
else if (test[2].checked == true )
{
	 document.getElementById('1').style.display="none";
	 document.getElementById('2').style.display="none";
	 document.getElementById('3').style.display="";
	 document.getElementById('4').style.display="none";
	 document.getElementById('5').style.display="none";
	 document.getElementById('6').style.display="none";
}
else if (test[3].checked == true )
{
	 document.getElementById('1').style.display="none";
	 document.getElementById('2').style.display="none";
	 document.getElementById('3').style.display="none";
	 document.getElementById('4').style.display="";
	 document.getElementById('5').style.display="none";
	 document.getElementById('6').style.display="none";
}
else if (test[4].checked == true )
{
	 document.getElementById('1').style.display="none";
	 document.getElementById('2').style.display="none";
	 document.getElementById('3').style.display="none";
	 document.getElementById('4').style.display="none";
	 document.getElementById('5').style.display="";
	 document.getElementById('6').style.display="none";
}
else if (test[5].checked == true )
{
	 document.getElementById('1').style.display="none";
	 document.getElementById('2').style.display="none";
	 document.getElementById('3').style.display="none";
	 document.getElementById('4').style.display="none";
	 document.getElementById('5').style.display="none";
	 document.getElementById('6').style.display="";
}
	if (test[0].checked == true )
	{
	 document.getElementById('1').style.display="";
	 document.getElementById('2').style.display="none";
	 document.getElementById('3').style.display="none";
	 document.getElementById('4').style.display="none";
	 document.getElementById('5').style.display="none";
	 document.getElementById('6').style.display="none";
	}
	else if (test[1].checked == true )
	{
		 document.getElementById('1').style.display="none";
		 document.getElementById('2').style.display="";
		 document.getElementById('3').style.display="none";
		 document.getElementById('4').style.display="none";
		 document.getElementById('5').style.display="none";
		 document.getElementById('6').style.display="none";
	}
	else if (test[2].checked == true )
	{
		 document.getElementById('1').style.display="none";
		 document.getElementById('2').style.display="none";
		 document.getElementById('3').style.display="";
		 document.getElementById('4').style.display="none";
		 document.getElementById('5').style.display="none";
		 document.getElementById('6').style.display="none";
	}
	else if (test[3].checked == true )
	{
		 document.getElementById('1').style.display="none";
		 document.getElementById('2').style.display="none";
		 document.getElementById('3').style.display="none";
		 document.getElementById('4').style.display="";
		 document.getElementById('5').style.display="none";
		 document.getElementById('6').style.display="none";
	}
	else if (test[4].checked == true )
	{
		 document.getElementById('1').style.display="none";
		 document.getElementById('2').style.display="none";
		 document.getElementById('3').style.display="none";
		 document.getElementById('4').style.display="none";
		 document.getElementById('5').style.display="";
		 document.getElementById('6').style.display="none";
	}
	else if (test[5].checked == true )
	{
		 document.getElementById('1').style.display="none";
		 document.getElementById('2').style.display="none";
		 document.getElementById('3').style.display="none";
		 document.getElementById('4').style.display="none";
		 document.getElementById('5').style.display="none";
		 document.getElementById('6').style.display="";
	}
}
</script>
</head>
<body class="antialiased">
@include('Layout.Sidebar')
	<div class="min-h-screen" style="margin-left: 5%; margin-right: 5%; width: 77%; float: right;">
		<h2 style="text-align: center;">사업 분석(통계)</h2>
		<div style="margin-top: 10px;">
			<label><input type="radio" name="chk_info" value="영업담당자별"
				onclick="javascript:checkRadio()">영업담당자별</label><label><input
				type="radio" name="chk_info" value="본부별"
				onclick="javascript:checkRadio()">본부별</label> <label><input
				type="radio" name="chk_info" value="월별"
				onclick="javascript:checkRadio()">월별</label> <label><input
				type="radio" name="chk_info" value="분기별"
				onclick="javascript:checkRadio()">분기별</label><label><input
				type="radio" name="chk_info" value="연도별"
				onclick="javascript:checkRadio()">연도별</label><label><input
				type="radio" name="chk_info" value="사업별"
				onclick="javascript:checkRadio()">사업별</label>
		</div>
		<div id="1" style="display: none; height: 500px;"></div>
		<script>
    function getData() {
    	  return [
    	    ['1990',12],
    	    ['1991',14],
    	    ['1993',21]
    	  ];
    	}
    var dataSet = anychart.data.set(getData());
    var seriesData = dataSet.mapAs({ x: 0, value: 1 });
    var chart = anychart.line();
    chart.title('영업담당자별');
    var lineChart = chart.line(seriesData);
    chart.container('1');
    chart.draw();
    </script>
		<div id="2" style="display: none; height: 500px;"></div>
		<script>
    function getData() {
    	  return [
      	    ['1994',21],
    	    ['1996',26],
    	    ['1998',26],
    	  ];
    	}
    var dataSet = anychart.data.set(getData());
    var seriesData = dataSet.mapAs({ x: 0, value: 1 });
    var chart = anychart.line();
    chart.title('본부별');
    var lineChart = chart.line(seriesData);
    chart.container('2');
    chart.draw();
    </script>
		<div id="3" style="display: none; height: 500px;"></div>
		<script>
    function getData() {
    	  return [
    	  	    ['2000',27],
        	    ['2002',31],
        	    ['2004',29],
    	  ];
    	}
    var dataSet = anychart.data.set(getData());
    var seriesData = dataSet.mapAs({ x: 0, value: 1 });
    var chart = anychart.line();
    chart.title('월별');
    var lineChart = chart.line(seriesData);
    chart.container('3');
    chart.draw();
    </script>
		<div id="4" style="display: none; height: 500px;"></div>
		<script>
    function getData() {
    	  return [
    		  ['2006',31],
      	    ['2008',36],
      	    ['2010',41],
    	  ];
    	}
    var dataSet = anychart.data.set(getData());
    var seriesData = dataSet.mapAs({ x: 0, value: 1 });
    var chart = anychart.line();
    chart.title('분기별');
    var lineChart = chart.line(seriesData);
    chart.container('4');
    chart.draw();
    </script>
		<div id="5" style="display: none; height: 500px;"></div>
		<script>
    function getData() {
    	  return [
      	    ['2012',42],
    	    ['2014',48],
    	    ['2016',50],
    	  ];
    	}
    var dataSet = anychart.data.set(getData());
    var seriesData = dataSet.mapAs({ x: 0, value: 1 });
    var chart = anychart.line();
    chart.title('연도별');
    var lineChart = chart.line(seriesData);
    chart.container('5');
    chart.draw();
    </script>
		<div id="6" style="display: none; height: 500px;"></div>
		<script>
    function getData() {
    	  return [
    		    ['2014',48],
        	    ['2016',50],
        	    ['2018',57]
    	  ];
    	}
    var dataSet = anychart.data.set(getData());
    var seriesData = dataSet.mapAs({ x: 0, value: 1 });
    var chart = anychart.line();
    chart.title('사업별');
    var lineChart = chart.line(seriesData);
    chart.container('6');
    chart.draw();
    </script>

	</div>
</body>
</html>
