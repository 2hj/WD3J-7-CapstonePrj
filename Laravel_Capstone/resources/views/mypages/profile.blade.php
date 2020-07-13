<div class="container-fluid" style="padding:20px 30px; height:700px;">
  <div class="row" style="height:100%;">
    <div class="col-md-3" style="height:100%;">
      <div class="card" style="width: 18rem; height:100%; border:0; border-radius: 45px;box-shadow: 0px 0px 17px #d5dfe8;">
        <img src="/img/user.png" class="card-img-top" alt="..." style="height:auto; width:200px; margin:0 auto;">
        <div class="card-body" style="height:100px;">
          <h5 class="card-title" style="line-height:40px;">{{ Auth::user()->user_id }}님의 프로필</h5>
          <p>name : {{ Auth::user()->name }}</p>
          <p>email : {{ Auth::user()->email }}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">직업 > 대학생</li>
          <li class="list-group-item">키 > 173 cm</li>
          <li class="list-group-item">몸무게 > 68.5 kg</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>


    <div class="col-md-9" style="height:200px;">
      <div class="row" style="text-align:center;">
        <div class="col-xs-4" style="margin: 0 15px;">
          <div class="card border-light mb-3" style="width:273px; height:100%; border:0; box-shadow: 0px 0px 17px #d5dfe8;">
            <div class="card-header" style="background-color:#ff7878; color:white; font-weight:bold;">평소 자세습관</div>
            <div class="card-body">
              <p class="card-subtitle mb-2 text-muted">자주 취하는 자세</p>
              <h5 class="card-title" style="font-size: 30px; font-weight:bold;">왼쪽 다리 꼰 자세</h5>
            </div>
          </div>
        </div>

        <div class="col-xs-4" style="margin: 0 15px;">
          <div class="card border-light mb-3" style="width: 273px; height:100%; border:0; box-shadow: 0px 0px 17px #d5dfe8;">
            <div class="card-header" style="background-color:#5eb1ff; color:white; font-weight:bold;">평균 자세 점수</div>
            <div class="card-body">
              <p class="card-subtitle mb-2 text-muted">좋음: 바른자세 100-60% <br>보통: 바른자세 60-40% <br>나쁨: 바른자세 40-0%</p>
              <h5 class="card-text" style="font-size: 30px; font-weight:bold; color:#f27500;" >보통</h5>
            </div>
          </div>
        </div>

        <div class="col-xs-4" style="margin: 0 15px;">
          <div class="card border-light mb-3" style="width: 273px; height:100%; border:0; box-shadow: 0px 0px 17px #d5dfe8;">
            <div class="card-header" style="background-color:#57c272; color:white; font-weight:bold;">하루 평균 착석시간</div>
            <div class="card-body">
              <p class="card-subtitle mb-2 text-muted">{{ Auth::user()->user_id }}님의 하루 평균 착석시간</p>
              <h5 class="card-title" style="font-size: 30px; font-weight:bold;">6시간 20분</h5>
            </div>
          </div>
      </div>

      <div class="row" style="margin:20px 15px;">
        <div class="col-xs-6">
          <div class="card" style="border:0; box-shadow: 0px 0px 17px #d5dfe8;">
            <div class="card-body">
              <h5 style="font-weight:bold; text-align:left;">6월의 바른자세 이력</h5 style="font-weight:bold; text-align:left;">
              <canvas id="bar-chart-month" width="390" height="200"></canvas>
            </div>
          </div>
        </div>

        <div class="col-xs-6">
          <div class="card" style="border:0; box-shadow: 0px 0px 17px #d5dfe8; margin-left:20px;">
            <div class="card-body">
              <h5 style="font-weight:bold; text-align:left;">현재까지의 바른자세 이력</h5 style="font-weight:bold; text-align:left;">
              <canvas id="bar-chart-all" width="390" height="200"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4" style="padding:2px;">
          <div class="card mb-3" style="width: 300px; height: 140px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="/img/student.png" class="card-img" alt="..." style="width:100px; height: auto;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">대학생</h5>
                  <p class="card-text">오랫동안 바르지 않은 자세로 앉아있을 확률이 커요</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4" style="padding:2px;">
          <div class="card mb-3" style="width: 300px; height: 140px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="/img/stretch.png" class="card-img" alt="..." style="width:100px; height: auto;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">다리꼬는 자세 습관</h5>
                  <p class="card-text">골반이 틀어질 위험이 있어요</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4" style="padding:2px;">
          <div class="card mb-3" style="width: 300px; height: 140px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="/img/forward_head.png" class="card-img" alt="..." style="width:100px; height: auto;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">거북목이 되기쉬운 당신</h5>
                  <p class="card-text">부족한 스트레칭과 오래앉아있는 습관으로 거북목이 되기쉬워요</p>
                </div>
              </div>
            </div>
          </div> 
        </div>

      </div>
    </div>
  </div>
</div>

<script>
  var bar_month_data = {
    labels: ['첫째주', '둘째주', '셋째주', '넷째주'],
    datasets: [{
      label:'바른자세 비율',
      backgroundColor: '#048751',
      // barPercentage: 0.5,
      // barThickness: 6,
      // maxBarThickness: 8,
      // minBarLength: 2,
      data: [50, 25, 0, 0]
    }]
  };

  var bar_month_options = {
    scales: {
        xAxes: [{
            gridLines: {
                offsetGridLines: false,
                display:false,
            },
            barThickness: 15,
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 100, 
            stepSize: 25,
          }
        }]
    }
  };

  var bar_chart_month = document.getElementById("bar-chart-month").getContext("2d");
  var draw_bar_chart_month = new Chart(bar_chart_month, {
    type: 'bar',
    data: bar_month_data,
    options: bar_month_options
  });


  var bar_all_data = {
    labels: ['5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
    datasets: [{
      label:'바른자세 비율',
      backgroundColor: '#0c7df5',
      // barPercentage: 0.5,
      // barThickness: 6,
      // maxBarThickness: 8,
      // minBarLength: 2,
      data: [45, 18, 0, 0, 0, 0, 0, 0]
    }]
  };

  var bar_all_options = {
    scales: {
        xAxes: [{
            gridLines: {
                offsetGridLines: false,
                display:false,
            },
            barThickness: 15,
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 100, 
            stepSize: 25,
          }
        }]
    }
  };

  var bar_chart_all = document.getElementById("bar-chart-all").getContext("2d");
  var draw_bar_chart_all = new Chart(bar_chart_all, {
    type: 'bar',
    data: bar_all_data,
    options: bar_all_options
  });
</script>