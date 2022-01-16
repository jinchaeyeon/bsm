

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <style>

        body{
          margin: 0;
        }

        .container{
          display: grid;
          min-width: 1100px;
          min-height: 1000px;
          height: 100vh; /*그리드 화면100% 채우기*/
          grid-template-columns: 100px 1fr; /*그리드의 너비 차지 비율  */
          grid-template-rows: 50px 1fr; /*그리드의 높이 차지비율*/
          margin: 0px;
          grid-template-areas:
          'user user user'
          'menu field1 field1';
        }

        .container>div{
          display: grid;
          margin:0px;
          border: 1px solid black;
          /*justify-content: center; /*아이템 너비 중앙정렬*/
          /*align-items: center; /*아아템 높이 중앙정렬*/
        }

        .user{
          grid-area: user;
        }

        .menu{
          grid-area: menu;
          font-size: 11px;
        }


        .field1{
          grid-area: field1;
          padding-top: 10px;
        }

    </style>
</head>

<body>
  
  <div class="container"> 

    <div class="user"> header</div>

    <div class="menu">
      @include('Layout.Sidebar')
    </div>

    <div class="field"> 

    </div>

  </div>
</body>
</html>

