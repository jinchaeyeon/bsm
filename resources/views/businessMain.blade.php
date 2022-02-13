<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="kor">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/table.css">
</head>
<body>
@include('Layout.Sidebar')
<div class="min-h-screen" style="zmargin-left: 5%; margin-right: 5%;width: 77%;float:right">
    <h1>
        진행사황 관리
    </h1>
    <table>
        <thead>
        <td>명칭</td>
        <td></td>
        </thead>
        <tbody>
        @foreach($td as $item)
            <tr>
                <td><a href="/business/{{$item->id}}">{{ $item->name }}</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

<style>
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
        transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    button {
        width: 50%;
        border: 0 solid #e2e8f0;
    }

    table {
        width: 100%;
        border: 1px solid black
    }

    thead {
        background-color: #eeeeee
    }

    .modal-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 1rem 1.5rem;
        width: 500px;
        height: 350px;
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
