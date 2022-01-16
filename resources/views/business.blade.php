<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="kor">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<h1>
    사업
</h1>
<h2>컨설팅사업본부_파이프라인</h2>
<h2>2022년 8월</h2>
<div style="margin-top: 10px;">
    <label><input type="radio" name="chk_info" value="부서별"
                  onclick="javascript:checkRadio()">부서별 검색</label><label><input
            type="radio" name="chk_info" value="기간별"
            onclick="javascript:checkRadio()">기간별 검색</label> <label><input
            type="radio" name="chk_info" value="담당자별"
            onclick="javascript:checkRadio()">담당자별 검색</label> <label><input
            type="radio" name="chk_info" value="거래처별"
            onclick="javascript:checkRadio()">거래처별 검색</label>
</div>

<div>
    <div id="1" style="display: none;">
        부서 이름 :&nbsp; <input class="registerSearch" type="string"
                             name="string">&nbsp;&nbsp;<span style="color: grey"><i
                class="fas fa-search" onclick="javascript:clickSearchEvent(this)"></i></span>
    </div>
    <div id="2" style="display: none;">
        기간 :&nbsp; <input class="registerSearch" type="date" name="string">~<input class="registerSearch" type="date" name="string">&nbsp;&nbsp;<span
            style="color: grey"><i class="fas fa-search"
                                   onclick="javascript:clickSearchEvent(this)"></i></span>
    </div>
    <div id="3" style="display: none;">
        담당자 이름 :&nbsp; <input class="registerSearch" type="string"
                              name="string">&nbsp;&nbsp;<span style="color: grey"><i
                class="fas fa-search" onclick="javascript:clickSearchEvent(this)"></i></span>
    </div>
    <div id="4" style="display: none;">
        거래처 이름 :&nbsp; <input class="registerSearch" type="string"
                              name="string">&nbsp;&nbsp;<span style="color: grey"><i
                class="fas fa-search" onclick="javascript:clickSearchEvent(this)"></i></span>
    </div>
</div>
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
        <th></th>
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
        <td class="buttonColumn">
            <button class="edit-trigger">수정</button>
            <button>삭제</button>
        </td>
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
        <td class="buttonColumn">
            <button class="edit-trigger">수정</button>
            <button>삭제</button>
        </td>
    </tr>
    <tr>
        <td>3</td>
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
        <td class="buttonColumn">
            <button class="edit-trigger">수정</button>
            <button>삭제</button>
        </td>
    </tr>
    <tr>
        <td>4</td>
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
        <td class="buttonColumn">
            <button class="edit-trigger">수정</button>
            <button>삭제</button>
        </td>
    </tr>
    <tr>
        <td>5</td>
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
        <td class="buttonColumn">
            <button class="edit-trigger">수정</button>
            <button>삭제</button>
        </td>
    </tr>
    <tr>
        <td>6</td>
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
        <td class="buttonColumn">
            <button class="edit-trigger">수정</button>
            <button>삭제</button>
        </td>
    </tr>
    <tr>
        <td>7</td>
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
        <td class="buttonColumn">
            <button class="edit-trigger">수정</button>
            <button>삭제</button>
        </td>
    </tr>
    <tr>
        <td>8</td>
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
        <td class="buttonColumn">
            <button class="edit-trigger">수정</button>
            <button>삭제</button>
        </td>
    </tr>
    </tbody>
</table>

<div>
    <button>이전달</button>
    <button>다음달</button>
</div>
<button id="register-trigger">등록</button>


<div id="register-modal" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <h1 class="title">사업 등록</h1>
        <label>거래처</label>
        <input type="text" name="name">
        <br>
        <label>고객사</label>
        <input type="text" name="name">
        <br>
        <label>건명</label>
        <input type="text" name="name">
        <br>
        <label>예상매출</label>
        <input type="text" name="name">
        <br>
        <label>예상매입</label>
        <input type="text" name="name">
        <br>
        <label>예상매출이익</label>
        <input type="text" name="name">
        <br>
        <label>발행시기</label>
        <input type="text" name="name">
        <br>
        <label>최종컨택일</label>
        <input type="text" name="name">
        <br>
        <label>진행률</label>
        <input type="text" name="name">
        <br>
        <label>담당자</label>
        <input type="text" name="name">
        <br>
        <label>진행사항</label>
        <input type="text" name="name">
        <br>
        <input type="button" id="register" value="등록"
               onclick="javascript:clickRegisterEvent(this)">
    </div>
</div>

<div id="edit-modal" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <h1 class="title">사업 수정</h1>
        <label>거래처</label>
        <input type="text" name="name">
        <br>
        <label>고객사</label>
        <input type="text" name="name">
        <br>
        <label>건명</label>
        <input type="text" name="name">
        <br>
        <label>예상매출</label>
        <input type="text" name="name">
        <br>
        <label>예상매입</label>
        <input type="text" name="name">
        <br>
        <label>예상매출이익</label>
        <input type="text" name="name">
        <br>
        <label>발행시기</label>
        <input type="text" name="name">
        <br>
        <label>최종컨택일</label>
        <input type="text" name="name">
        <br>
        <label>진행률</label>
        <input type="text" name="name">
        <br>
        <label>담당자</label>
        <input type="text" name="name">
        <br>
        <label>진행사항</label>
        <input type="text" name="name">
        <br>
        <input type="button" id="register" value="등록"
               onclick="javascript:clickRegisterEvent(this)">
    </div>
</div>
</body>
</html>

<style type="text/css">
    table {
        width: 100%;
        border: 1px solid black
    }

    thead {
        background-color: #eeeeee
    }

    .buttonColumn {
        display: flex;
        flex-direction: row;
    }

    table button {
        display: inline;
        width: 50%;
    }
</style>

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

    .registerSearch, .registerSearch textarea {
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

    .registerSearch:focus, .registerSearch textarea:focus {
        border: 1px solid #97d6eb;
    }

    #1, #2, #3, #4 {
        display: none;
        align-content: center;
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
        registerModal.classList.remove("show-modal");
        editModal.classList.remove("show-modal");
    }

    function windowOnClick(event) {
        console.log(event.target)
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

    function clickRegisterEvent(trObj) {
        var link = "http://127.0.0.1:8000/Estimate";

        location.href = link;
    };
</script>

