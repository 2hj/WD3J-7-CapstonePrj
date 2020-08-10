<div class="container">
    <div class="row">
      {{--  <div class="col-sm-6">
          <button type="button" class="btn btn-success" style="margin: 20px 0;">허리건강 정보</button>
        </div>
        <div class="col-sm-6">
          <button type="button" class="btn btn-warning" style="margin: 20px 0;">스트레칭 정보</button>
        </div>
        --}}

        <div class="col-sm-3" style="margin-top: 20px;">
          <div class="card border-success mb-3" style="max-width: 18rem;">
            <div class="card-header bg-transparent border-success">{{Auth::user()->user_id}} の腰の状態</div>
            <div class="card-body text-success">
              <h5 class="card-title"></h5>
              <img src="/img/user.png" class="card-img-top" alt="..." style="width: 130px; height: auto; margin: 0 auto;">
            </div>
            <div class="card-footer bg-transparent border-success">
              <button type="button" class="btn btn-primary" id="redirect-stats" onclick="location.href='/mypage' ">姿勢履歴を見る</button>
            </div>
          </div>
        </div>

        <div class="col-sm-3" style="margin: auto;">
          <div class="card h-80">
            <img src="/img/student.png" class="card-img-top" alt="..." style="width: 100px; height: auto; margin: 0 auto;">
            <div class="card-body">
              <h5 class="card-title">大学生</h5>
              <p class="card-text">{{--오랫동안 바르지 않은 자세로 앉아있을 확률이 커요--}}長時間悪い座り方をする確率が高い！</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3" style="margin: auto;">
          <div class="card h-80">
            <img src="/img/stretch.png" class="card-img-top" alt="..." style="width: 100px; height: auto; margin: 0 auto;">
            <div class="card-body">
              <h5 class="card-title">足を組む習慣</h5>
              <p class="card-text">골반이 틀어질 위험이 있어요</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3" style="margin: auto;">
          <div class="card h-80">
            <img src="/img/forward_head.png" class="card-img-top" alt="..." style="width: 100px; height: auto; margin: 0 auto;">
            <div class="card-body">
              <h5 class="card-title">거북목이 되기쉬운 당신</h5>
              <p class="card-text">부족한 스트레칭과 오래앉아있는 습관으로 거북목이 되기쉬워요</p>
            </div>
          </div>
        </div>


        <div class="col-sm-12">
          <h2 style="margin: 20px 0 10px 0;">test 様におすすめのストレッチ</h2>
        </div>


        <div class="col-sm-12 col-md-4" style="margin-top: 30px;">
          <h3>#학생을 위한 스트레칭</h3>
          <iframe width="360" height="225" src="https://www.youtube.com/embed/zRaPfQUaSUY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
        </div>
        
        <div class="col-md-4" style="margin-top: 30px;">
        <h3>#거북목 교정 스트레칭</h3>
          <iframe width="360" height="225" src="https://www.youtube.com/embed/Io5NYpzfsEU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
        </div>
        
        <div class="col-md-4" style="margin-top: 30px;">
          <h3>#자세 교정 스트레칭</h3>
          <iframe width="360" height="225" src="https://www.youtube.com/embed/zwls1D_OU7M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
        </div>


        <div class="col-md-12" style="margin-top: 30px;">
          <div class="card text-center">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#" id="salary">직장인을 위한</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#" id="student">학생을 위한</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#" id="middle">중년을 위한</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#" id="fat">비만을 위한</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#" id="kid">아이를 위한</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#" id="forward-head">거북목을 위한</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#" id="posture">자세교정을 위한</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div style="display: inline-block; margin: 0 20px;">
                <iframe id="foot-first" width="230" height="120" src="https://www.youtube.com/embed/zRaPfQUaSUY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
             
              <div style="display: inline-block; margin: 0 20px;">
                <iframe id="foot-second" width="230" height="120" src="https://www.youtube.com/embed/iyTd09JlB0k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
             
              <div style="display: inline-block; margin: 0 20px;">
                <iframe id="foot-third" width="230" height="120" src="https://www.youtube.com/embed/CbUciuVHmHc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            {{--  <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a> --}}
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