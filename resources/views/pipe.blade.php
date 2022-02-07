<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="kor">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/table.css">
</head>
<body>
@include('Layout.Sidebar')
<div class="min-h-screen" style="margin-left: 5%; margin-right: 5%;width: 77%;float:right">
    <h1>
        파이프 라인
    </h1>
    <table>
        <thead>
        <td>번호</td>
        <td>명칭</td>
        <td></td>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>OTS사업본부_파이프라인</td>
            <td>
                <button class="edit-trigger">수정</button>
                <button>삭제</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>스마트플랫폼사업본부_파이프라인</td>
            <td>
                <button class="edit-trigger">수정</button>
                <button>삭제</button>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>중부지사_파이프라인</td>
            <td>
                <button class="edit-trigger">수정</button>
                <button>삭제</button>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td><a href="business">컨설팅사업본부_파이프라인</a></td>
            <td>
                <button class="edit-trigger">수정</button>
                <button>삭제</button>
            </td>
        </tr>
        </tbody>
    </table>

    <button style="width: auto; float: right; width: 5%; margin-top: 5px" id="register-trigger">등록</button>

    @foreach($td as $item)
        ID : {{ $item->id }} <br>
        VALUE : {{ $item->value }} <br>
    @endforeach

</div>
<div style="visibility: hidden">
    <div id="register-modal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h1 class="title">파이프 라인 등록</h1>
            <label>명칭</label>
            <input class="registerSearch" type="text" name="name">
            <input class="registerSearch" type="button" id="register" value="등록"
                   onclick="javascript:clickRegisterEvent(this)">
        </div>
    </div>

    <div id="edit-modal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h1 class="title">파이프 라인 수정</h1>
            <label>명칭</label>
            <input class="registerSearch" type="text" name="name">
            <input class="registerSearch" type="button" id="register" value="등록"
                   onclick="javascript:clickRegisterEvent(this)">
        </div>
    </div>
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

<script type="text/javascript">
    const registerModal = document.querySelector("#register-modal");
    const editModal = document.querySelector("#edit-modal");

    const registerTrigger = document.querySelector("#register-trigger");
    const editTriggerList = document.querySelectorAll(".edit-trigger")
    editTriggerList.forEach((trigger) => {
        trigger.addEventListener("click", showEditModal)
    })

    const closeButtonList = document.querySelectorAll(".close-button");
    closeButtonList.forEach((trigger) => {
        trigger.addEventListener("click", hideModal)
    })

    const registerButton = document.querySelector("#register");

    registerTrigger.addEventListener("click", showRegisterModal);
    registerButton.addEventListener("click", hideModal);

    window.addEventListener("click", windowOnClick);

    function showRegisterModal() {
        registerModal.classList.add("show-modal")
    }

    function showEditModal() {
        editModal.classList.add("show-modal")
    }

    function hideModal() {
        console.log("hide")
        registerModal.classList.contains("show-modal")
        registerModal.classList.remove("show-modal");
        editModal.classList.remove("show-modal");
    }

    function windowOnClick(event) {
        if (event.target === registerModal) {
            hideModal();
        }
        if (event.target === editModal) {
            hideModal();
        }
        if (event.target === closeButton) {
            hideModal();
        }
    }
</script>
