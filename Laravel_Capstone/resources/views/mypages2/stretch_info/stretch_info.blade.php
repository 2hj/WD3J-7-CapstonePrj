<link rel="stylesheet" href="/css/stretch_info.css">

<div class="container">
    <div class="row">
        <div class="col-md-12 mypage-title">
          <h5 class="mypage-body-title">私の腰は今どんな状態？</h5>
        </div>
        <div class="col-4 top-div-box-3">
          <div class="keyword-card">
              <div class="card-body">
                  <img class="keyword-img" src="\img\ui\웨이스탠드\소스\마이페이지\스트레칭 정보\대학생 일러스트.png" alt="">
                  <h4>大学生</h4>
                  <p>長時間、悪い座り方をする確率が高い！</p>
              </div>
          </div>
        </div>

        <div class="col-4 top-div-box-3">
          <div class="keyword-card">
              <div class="card-body">
                  <img class="keyword-img" src="\img\ui\웨이스탠드\소스\마이페이지\스트레칭 정보\다리꼬는 자세 일러스트.png" alt="">
                  <h4>足を組む習慣</h4>
                  <p>骨盤が曲がる危険があります！</p>
              </div>
          </div>
        </div>

        <div class="col-4 top-div-box-3">
          <div class="keyword-card">
              <div class="card-body">
                  <img class="keyword-img" src="\img\ui\웨이스탠드\소스\마이페이지\스트레칭 정보\거북목 일러스트.png" alt="">
                  <h4>ストレートネックになりやすいあなた</h4>
                  <p>足りないストレッチと長時間座っている習慣で、ストレートネックになりやすいです。</p>
              </div>
          </div>
        </div>


        {{--<!-- 내 맞춤 스트레칭 보기 -->--}}
        <div class="col-md-12 mypage-title">
          <h5 class="mypage-body-title" style="padding-top:50px;">test 様におすすめのストレッチ</h5>
        </div>

        {{--<!-- 영상1 모달 -->--}}
        <div class="col-4 top-div-box-3 my-stretch-col">
          <div class="my-stretch-card" id="my-stretch-card1">
              <div class="card-body my-stretch-card-body">
                  <h5>学生のためのストレッチ</h5>
                  <button type="button" class="btn my-stretch-modal" data-toggle="modal" data-target="#video1">動画を見る></button>
              </div>
          </div>
        </div>

        <div class="modal fade" id="video1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">学生のためのストレッチ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <iframe width="360" height="225" src="https://www.youtube.com/embed/dMyR08A6rrc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>



        {{--<!-- 영상2 모달 -->--}}
        <div class="col-4 top-div-box-3 my-stretch-col">
          <div class="my-stretch-card" id="my-stretch-card2">
              <div class="card-body my-stretch-card-body">
                  <h5>ストレートネック矯正ストレッチ</h5>
                  <button type="button" class="btn my-stretch-modal" data-toggle="modal" data-target="#video2">動画を見る></button>
              </div>
          </div>
        </div>

        <div class="modal fade" id="video2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ストレートネック矯正ストレッチ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <iframe width="360" height="225" src="https://youtu.be/pWaJZOetkz8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        


        {{--<!-- 영상3 모달 -->--}}
        <div class="col-4 top-div-box-3 my-stretch-col">
          <div class="my-stretch-card" id="my-stretch-card3">
              <div class="card-body my-stretch-card-body">
                  <h5>姿勢矯正ストレッチ</h5>
                  <button type="button" class="btn my-stretch-modal" data-toggle="modal" data-target="#video3">動画を見る></button>
              </div>
          </div>
        </div>

        <div class="modal fade" id="video3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">姿勢矯正ストレッチ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <iframe width="360" height="225" src="https://www.youtube.com/embed/zwls1D_OU7M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>



        {{--<!-- 카테고리 영상 -->--}}
        <div class="col-md-12 mypage-title">
          <h5 class="mypage-body-title" style="margin-bottom:20px;">キーワードを選んでください。</h5>
        </div>

        {{-- <!-- 카테고리 버튼 --> --}}
        <div class="col-md-12 mypage-title" style="margin-bottom: 20px;">
          <button type="button" class="btn btn-link category-btn" id="category-btn1">会社員</button>
          <button type="button" class="btn btn-link category-btn" id="category-btn2">学生</button>
          <button type="button" class="btn btn-link category-btn" id="category-btn3">中年</button>
          <button type="button" class="btn btn-link category-btn" id="category-btn4">肥満</button>
          <button type="button" class="btn btn-link category-btn" id="category-btn5">子供</button>
          <button type="button" class="btn btn-link category-btn" id="category-btn6">ストレートネック</button>
          <button type="button" class="btn btn-link category-btn" id="category-btn7">姿勢矯正</button>
        </div>


        <div class="col-4 top-div-box-3 category-stretch-col">
          <div class="category-stretch-card" id="category-stretch-card1">
              <div class="card-body category-stretch-card-body">
                  <h5>会社員向けのストレッチ</h5>
                  <button type="button" class="btn my-stretch-modal" data-toggle="modal" data-target="#c-video1">動画を見る></button>
              </div>
          </div>
        </div>

        <div class="modal fade" id="c-video1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">姿勢矯正ストレッチ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <iframe width="360" height="225" src="https://www.youtube.com/embed/iyTd09JlB0k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


        <div class="col-4 top-div-box-3 category-stretch-col">
          <div class="category-stretch-card" id="category-stretch-card2">
              <div class="card-body category-stretch-card-body">
                  <h5>会社でストレッチ１</h5>
                  <button type="button" class="btn my-stretch-modal" data-toggle="modal" data-target="#video1">動画を見る></button>
              </div>
          </div>
        </div>

        <div class="col-4 top-div-box-3 category-stretch-col">
          <div class="category-stretch-card" id="category-stretch-card3">
              <div class="card-body category-stretch-card-body">
                  <h5>会社でストレッチ２</h5>
                  <button type="button" class="btn my-stretch-modal" data-toggle="modal" data-target="#video1">動画を見る></button>
              </div>
          </div>
        </div>

        <div class="col-4 top-div-box-3 category-stretch-col">
          <div class="category-stretch-card" id="category-stretch-card4">
              <div class="card-body category-stretch-card-body">
                  <h5>退社後ストレッチ１</h5>
                  <button type="button" class="btn my-stretch-modal" data-toggle="modal" data-target="#video1">動画を見る></button>
              </div>
          </div>
        </div>

        <div class="col-4 top-div-box-3 category-stretch-col">
          <div class="category-stretch-card" id="category-stretch-card5">
              <div class="card-body category-stretch-card-body">
                  <h5>退社後ストレッチ２</h5>
                  <button type="button" class="btn my-stretch-modal" data-toggle="modal" data-target="#video1">動画を見る></button>
              </div>
          </div>
        </div>

        <div class="col-4 top-div-box-3 category-stretch-col">
          <div class="category-stretch-card" id="category-stretch-card6">
              <div class="card-body category-stretch-card-body">
                  <h5>仕事中ストレッチ</h5>
                  <button type="button" class="btn my-stretch-modal" data-toggle="modal" data-target="#video1">動画を見る></button>
              </div>
          </div>
        </div>

        
    </div>
</div>

<script>

  var foot_first = document.getElementById('foot-first');
  var foot_second = document.getElementById('foot-second');
  var foot_third = document.getElementById('foot-third');

  // $('#salary').click(function(){
  //   foot_first.getAttribute('src') = 
  // });

</script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<script src="{{ asset('js/app.js') }}"></script>