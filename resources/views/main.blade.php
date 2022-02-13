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
        @foreach($Estimates as $Estimate)
            <tr>
                <td>{{$Estimate->create_date}}</td>
                <td>{{$Estimate->id}}</td>
                <td>{{$Estimate->client}}</td>
                <td>{{$Estimate->type}}</td>
                <td>{{$Estimate->contact_id}}</td>
                <td>{{$Estimate->amount}}</td>
                <td>{{$Estimate->discount_rate}}</td>
                <td>{{$Estimate->general}}</td>
                <td>{{$Estimate->order_state}}</td>
                <td><button id="{{$Estimate->id}}" type="button" style="width: 100%"
                            value="{{$Estimate->id}}" onclick="javascript:clickTrEvent(this)">조회</button></td>
            </tr>
            @endforeach
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
        @foreach($business as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->contact->company_name }}</td>
                <td>{{ $item->client }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->expected_sales }}</td>
                <td>{{ $item->expected_purchase }}</td>
                <td>{{ $item->expected_sales_profit }}</td>
                <td>{{ $item->expected_issue_month }}</td>
                <td>{{ $item->progress_rate }}</td>
                <td>{{ $item->sales_person }}</td>
                <td>{{ $item->progress }}</td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <h3>
        수주 품의 리스트
    </h3>
    <table>
        <thead>
        <tr>
            <th>계약번호</th>
            <th>거래처</th>
            <th>담당자</th>
            <th>담당부서</th>
            <th>작성일자</th>
            <th>수정일자</th>
            <th>조회</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order as $item)
            <tr>
                <td>{{$item->contract_number}}</td>
                <td>{{$item->customer_name}}</td>
                <td>{{$item->manager}}</td>
                <td>{{$item->department}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                <td>
                    <a href="/OrderBook/{{$item->contract_number}}"><input id="firstRow" type="button" style="width: 100%" type="button" value="조회"></a>
                </td>
            </tr>
        @endforeach
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
