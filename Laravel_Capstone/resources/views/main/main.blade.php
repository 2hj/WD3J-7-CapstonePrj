@extends('headers.header2')

@section('content')

<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" id="carousel-inner">
          <div class="carousel-item active">
            <img src="\img\ui\웨이스탠드 메인페이지\메인페이지\앉아있는 여성.png" class="d-block w-100 carousel-img" id="carousel-img-1" alt="...">
            <div class="carousel-caption d-none d-md-block" id="carousel-caption-1">
              <h1>Waist、 Stand。</h1>
              <p>IoT座布団を使って<br>正しい姿勢を作ってみてください。</p>
              <button type="button" class="btn btn-link main-carousel-btn">詳細を見る</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="\img\ui\웨이스탠드 메인페이지\메인페이지\자세 분석 사진 크롭.png" class="d-block w-100 carousel-img" id="carousel-img-2" alt="...">
            <div class="carousel-caption d-none d-md-block" id="carousel-caption-2">
              <h1>MLで着席姿勢を分析</h1>
              <p>KNN分類アルゴリズムを使って<br>皆さんの姿勢をより正確に分析します。</p>
              <button type="button" class="btn btn-link main-carousel-btn">私の姿勢を見る</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="\img\ui\웨이스탠드 메인페이지\메인페이지\바른자세 챌린지 사진.png" class="d-block w-100 carousel-img" id="carousel-img-3" alt="...">
            <div class="carousel-caption d-none d-md-block" id="carousel-caption-3">
              <h1>正しい姿勢チャレンジに<br>挑戦しましょう。</h1>
              <p>IoT座布団を使って<br>正しい姿勢を作ってみてください。</p>
              <button type="button" class="btn btn-link main-carousel-btn">チャレンジ参加</button>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  </div>

  <div id="footer">
    <div id="footer-content">
      <p>ⓒ Copyright Waistand. All Rights Reserved</p>
      <img src="\img\ui\웨이스탠드 메인페이지\메인페이지\sns logos.png" width="180px" alt="">
    </div>
  </div>

@stop
