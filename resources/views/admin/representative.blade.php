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
        body {
            font-family: 'Nunito', sans-serif;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
        }

        th, th, td {
            text-align: center;
        }

        th {
            background-color: #eeeeee;
        }

        body {
            text-align: center;
            display: block;
            margin: 0 auto;
            font-size: 16px;
        }

        form {
            margin: 0 auto;
            width: 459px;
        }

        .registerSearch, textarea {
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

        .registerSearch:focus, textarea:focus {
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

        #register:hover {
            color: #fff;
            background-color: #216282;
            opacity: 0.9;
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
            height: 550px;
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

        #1, #2, #3, #4 {
            display: none;
        }
    </style>

    <script type="text/javascript">
        function clickTrEvent(trObj) {
            var link = "http://127.0.0.1:8000/representativeDetail";

            location.href = link;
        };

        function clickRegisterEvent(trObj) {
            var link = "http://127.0.0.1:8000/representative";

            location.href = link;
        };

        function clickSearchEvent(trObj) {
            var link = "http://127.0.0.1:8000/representative";

            location.href = link;
        };

        function checkRadio()

        {
            var test = document.getElementsByName('chk_info');
            if (test[0].checked == true )
            {
                document.getElementById('1').style.display="";
                document.getElementById('2').style.display="none";
                document.getElementById('3').style.display="none";
                document.getElementById('4').style.display="none";
            }
            else if (test[1].checked == true )
            {
                document.getElementById('1').style.display="none";
                document.getElementById('2').style.display="";
                document.getElementById('3').style.display="none";
                document.getElementById('4').style.display="none";
            }
            else if (test[2].checked == true )
            {
                document.getElementById('1').style.display="none";
                document.getElementById('2').style.display="none";
                document.getElementById('3').style.display="";
                document.getElementById('4').style.display="none";
            }
            else if (test[3].checked == true )
            {
                document.getElementById('1').style.display="none";
                document.getElementById('2').style.display="none";
                document.getElementById('3').style.display="none";
                document.getElementById('4').style.display="";
            }
        }
    </script>
</head>
<body class="antialiased">
@include('Layout.Sidebar')
@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif

<div class="min-h-screen" style="margin-left: 5%; margin-right: 5%; margin-top: 5%">
    <table class="table_Representative_List"
           style="text-align: center; border: 1px solid black; width: 100%;">
        <caption>
            <h2>영업 담당자 목록</h2>
        </caption>
        <thead>
        <tr>
            <th>담당자번호</th>
            <th>담당자명</th>
            <th>직급</th>
            <th>소속본부</th>
            <th>연락처</th>
            <th>이메일</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>0001</td>
            <td>진채연</td>
            <td>부장</td>
            <td>인공지능연구실</td>
            <td>010-1111-1111</td>
            <td>jincheyeon@kumoh.ac.kr</td>
        </tr>
        <tr>
            <td>0002</td>
            <td>이준재</td>
            <td>차장</td>
            <td>인공지능연구실</td>
            <td>010-2222-2222</td>
            <td>leejunjea@kumoh.ac.kr</td>
        </tr>
        <tr>
            <td>0003</td>
            <td>최기범</td>
            <td>과장</td>
            <td>인공지능연구실</td>
            <td>010-3333-3333</td>
            <td>choigibeom@kumoh.ac.kr</td>
        </tr>
        <tr>
            <td>0004</td>
            <td>김현준</td>
            <td>사원</td>
            <td>인공지능연구실</td>
            <td>010-4444-4444</td>
            <td>kimhyunjoon@kumoh.ac.kr</td>
        </tr>
        </tbody>
    </table>
    <div style="width: 5%; display: inline-block;"></div>
    <?php

    function pageing()
    {

        // 한번에 출력할 data수
        $view_article = 2;
        // page초기값 패이징여부
        if (isset($_GET['page']))
            $page = $_GET['page'];
        else
            $page = 1;
        // 데이터 시작 번호
        $start = ($page - 1) * $view_article;

        // 전체 칼럼 수
        $total = 2;

        // 전체 페이지
        $total_page = ceil($total / $view_article);
        // 시작페이지
        if ($page % 10) {
            $start_page = $page - $page % 10 + 1;
        } else {
            $start_page = $page - 9;
        }
        // 마지막 페이지
        $end_page = $start_page + 10;

        // 초기 페이지로이동
        if ($page != 1) {
            echo "<font><a href=\"Customer_List.php?page=1\"><<</a></font>&nbsp;&nbsp;";
        } else {
            echo "<font><<</font>&nbsp;&nbsp;";
        }

        // 중간페이지 출력
        for ($i = $start_page; $i < $end_page; $i ++) {
            if ($i > $total_page)
                break;
            if ($i == $page) {
                echo "(<font>$i</a></font>)&nbsp;&nbsp;";
            } else {
                echo "<font><a href=\"Customer_List.php?page=$i\">$i</a></font>&nbsp;&nbsp;";
            }
        }

        // 마지막 페이지로 이동
        if ($page != $total_page) {
            echo "<font><a href=\"Customer_List.php?page=$total_page\">>></a></font>&nbsp;&nbsp;";
        } else {
            echo "<font>>></a></font>&nbsp;&nbsp;";
        }
    }

    pageing()?>
    <button class="trigger"
            style="width: 5%; float: right; margin-top: 10px;" value="aa" onclick>등록</button>
    <div class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h1 class="title">영업 담당자 등록</h1>
            <label>담당자번호</label> <input class="registerSearch" type="number" name="number">
            <label>담당자명</label> <input class="registerSearch" type="number" name="number">
            <label>직급</label> <input class="registerSearch" type="number" name="number">
            <label>소속본부</label> <input class="registerSearch" type="number" name="number">
            <label>연락처</label> <input class="registerSearch" type="number" name="number">
            <label>이메일</label> <input class="registerSearch" type="number" name="number">
            <input class="registerSearch" type="button" id="register" value="등록" onclick="javascript:clickRegisterEvent(this)">
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
    <div style="margin-top: 10px;">
        <label><input type="radio" name="chk_info" value="담당자번호"
                      onclick="javascript:checkRadio()">담당자번호</label><label><input
                type="radio" name="chk_info" value="담당자명"
                onclick="javascript:checkRadio()">담당자명</label> <label><input
                type="radio" name="chk_info" value="직급"
                onclick="javascript:checkRadio()">직급</label> <label><input
                type="radio" name="chk_info" value="소속본부"
                onclick="javascript:checkRadio()">소속본부</label>
    </div>
    <div id="1" style="display: none;">
        담당자번호 :&nbsp; <input class="registerSearch" type="string"
                             name="string">&nbsp;&nbsp;<span style="color: grey"><i
                class="fas fa-search" onclick="javascript:clickSearchEvent(this)"></i></span>
    </div>
    <div id="2" style="display: none;">
        담당자명 :&nbsp; <input class="registerSearch" type="string"
                              name="string">&nbsp;&nbsp;<span style="color: grey"><i
                class="fas fa-search" onclick="javascript:clickSearchEvent(this)"></i></span>
    </div>
    <div id="3" style="display: none;">
        직급 :&nbsp; <input class="registerSearch" type="string"
                              name="string">&nbsp;&nbsp;<span style="color: grey"><i
                class="fas fa-search" onclick="javascript:clickSearchEvent(this)"></i></span>
    </div>
    <div id="4" style="display: none;">
        소속본부 :&nbsp; <input class="registerSearch" type="string"
                              name="string">&nbsp;&nbsp;<span style="color: grey"><i
                class="fas fa-search" onclick="javascript:clickSearchEvent(this)"></i></span>
    </div>
</div>
</body>
</html>
