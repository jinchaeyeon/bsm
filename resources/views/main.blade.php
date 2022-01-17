<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="kor">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
@include('Layout.Sidebar')
<div class="min-h-screen" style="margin-left: 5%; margin-right: 5%;width: 77%;float:right">
    <h1>
        메인
    </h1>
    <h2>
        주간 변경사항
    </h2>
    <h3>
        견적리스트
    </h3>
    <table>
        <thead>
        <tr>
            <th>날짜</th>
            <th>견적번호</th>
            <th>장부/고객</th>
            <th>유형</th>
            <th>사업자(주민)등록번호</th>
            <th>견적금액</th>
            <th>활인율</th>
            <th>종류</th>
            <th>수주</th>
            <th>조회</th>
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
            <td>9</td>
            <td><button id="firstRow" type="button" style="width: 100%"
                        value="aa" onclick="javascript:clickTrEvent(this)">조회</button></td>
        </tr>
        <tr>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td><button id="SecondRow" type="button" style="width: 100%"
                        value="aa" onclick="javascript:clickTrEvent(this)">조회</button></td>
        </tr>
        </tbody>
    </table>
    <h3>
        사업관리 리스트
    </h3>
    <table>
        <thead>
        <tr>
            <th>번호</th>
            <th>거래처</th>
            <th>고객사</th>
            <th>건명</th>
            <th>예상 매출</th>
            <th>예상 매입</th>
            <th>예상 매출이익</th>
            <th>발행시기</th>
            <th>최종컨택일</th>
            <th>진행률</th>
            <th>담당자</th>
            <th>진행사항</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>LG</td>
            <td>AIC</td>
            <td>유지보수</td>
            <td>9000</td>
            <td>1700</td>
            <td>7260</td>
            <td>Q3</td>
            <td>5월 3일</td>
            <td>80%</td>
            <td>홍길동</td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td>LG</td>
            <td>AIC</td>
            <td>유지보수</td>
            <td>9000</td>
            <td>1700</td>
            <td>7260</td>
            <td>Q3</td>
            <td>5월 3일</td>
            <td>80%</td>
            <td>홍길동</td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <h3>
        수주 품의 리스트
    </h3>
    <table>
        <thead>
        <tr>
            <th>번호</th>
            <th>거래처</th>
            <th>사업장</th>
            <th>작성자</th>
            <th>수주번호</th>
            <th>계약 시작 날짜</th>
            <th>계약 종료 날짜</th>
            <th>WinRate</th>
            <th>진행상태</th>
            <th>조회</th>
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
            <td>9</td>
            <td><button id="firstRow" type="button" style="width: 100%"
                        value="aa" onclick="javascript:clickTrEvent(this)">조회</button></td>
        </tr>
        <tr>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td><button id="SecondRow" type="button" style="width: 100%"
                        value="aa" onclick="javascript:clickTrEvent(this)">조회</button></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>

<style type="text/css">
    a {
        color: inherit;
        text-decoration: inherit
    }

    table {
        width: 100%;
        border: 1px solid black
    }

    thead {
        background-color: #eeeeee
    }
</style>
