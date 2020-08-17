<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Noto+Sans+KR:wght@900&display=swap');
  body{
    background-image: url('/img/ui/웨이스탠드 메인페이지/메인페이지/배경 그래픽 수정2.png');
    background-repeat: no-repeat;
    background-size: 86%;
  }
  #header-row{
    height: 70px;
  }
  #header-col{
    line-height: 70px;
  }
  .header-menu{
    list-style-type:none;
    color: black;
  }
  .header-item{
    display: inline-block;
    padding: 0 15px;
    font-size: small;
    font-weight: 700;
    font-family: 'Noto Sans JP', sans-serif;
  }
  .header-item>a:hover{
    color: white;
  }
  .header-item>a{
    color:black;
  }

  #carousel-inner{
    width: 68%;
    margin: 0 auto;
  }
  .carousel-img{
    float: right;
  }
  #carousel-img-1{
    width:680px!important;
    margin-top:100px;
  }
  #carousel-img-2{
    width:500px!important;
    margin:80px 0 0 0;
  }
  #carousel-img-3{
    width:550px!important;
    margin:130px 0 0 0;
  }

  .carousel-caption{
    color: black;
    text-align: left;
    left: 3%;
    top: 20%;
  }
  .carousel-caption > h1{
    font-family: 'Noto Sans KR', sans-serif;
    font-weight: bolder;
    font-size: 50px;
    padding-bottom: 20px;
  }
  .carousel-caption > p{
    font-family: 'Noto Sans JP', sans-serif;
    font-size: 16px;
    line-height: 30px;
    padding-bottom: 20px;
  }
  .main-carousel-btn{
    color: #00ee99;
    font-family:'Noto Sans JP', sans-serif;
    font-size: 15px;
    background-color: white;
    border-radius: 7px 7px 7px;
    box-shadow: 0 0 100px white;
  }
  .main-carousel-btn:hover{
    color: #00a167;
    text-decoration: none;
  }

  #footer{
    background-image: url('/img/ui/웨이스탠드 메인페이지/메인페이지/Footer 배경.png');
    width:100%;
    height: 62px;
    position:fixed;
    bottom:0;
  }
  #footer-content{
    color: rgba(255,255,255, 0.8);
    width: 68%;
    margin:0 auto;
  }
  #footer-content>p{
    display: inline-block;
    line-height: 60px;
    margin:0;
  }
  #footer-content>img{
    float:right;
    padding:15px;
  }
</style>  
<title>WaiStand</title>
</head>
<body>

  <div class="container">
    <div class="row" id="header-row">
      <div class="col-12" id="header-col">
        <a id="header-logo" href="/" style="float:left;">
          <img src="/img/ui/웨이스탠드 메인페이지/메인페이지/로고.png" height="20" alt="">
        </a>

        <div id="header" style="float:right;">
          <ul class="header-menu">
            <li class="header-item">
              <a href="/" class="nav-link">ホーム</a>
            </li>
            <li class="header-item">
              <a href="/products" class="nav-link">製品</a>
            </li>
            <li class="header-item">
              <a href="#" class="nav-link">Q&A</a>
            </li>
            @if(Auth::user())
            <li class="header-item">
              <a href="/mypage" class="nav-link">MyPage</a>
            </li>
            <li class="header-item nav-item dropdown">
              <a href="/challenges" class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Challenge</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="transform:translate3d(15px, 70px, 0px);">
                <a class="dropdown-item" href="/challenges" style="font-size: 16px;">チャレンジリスト</a>
                <a class="dropdown-item" href="/join_challenges" style="font-size: 16px;">参加リスト</a>
              </div>
            </li>
            <li class="header-item">
              <a href="/auth/logout" class="nav-link">ログアウト</a>
            </li>
            @else
            <li class="header-item">
              <a href="/auth/login" class="nav-link">ログイン</a>
            </li>
            <li class="header-item">
              <a href="/auth/register" class="nav-link">新規登録</a>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </div>
  </div>

  @yield('content')


</body>
</html>