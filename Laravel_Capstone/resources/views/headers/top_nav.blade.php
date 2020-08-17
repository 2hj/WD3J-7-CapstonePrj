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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Noto+Sans+KR:wght@900&display=swap');
 
  #header-container{
    position: relative;
    z-index: 1;
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

</style>  
<link rel="stylesheet" href="/css/mypage_top.css">
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<script src="{{ asset('js/app.js') }}"></script>
<title>WaiStand</title>
</head>
<body>

<div class="container" id="header-container">
    <div class="row" id="header-row">
      <div class="col-12" id="header-col">
        <a id="header-logo" href="/" style="float:left;">
          <img src="\img\ui\웨이스탠드 메인페이지\메인페이지\웨이스탠드 로고(색).png" height="20" alt="">
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