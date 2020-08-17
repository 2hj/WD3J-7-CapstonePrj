<link rel="stylesheet" href="/css/my_challenge.css">

<div>
    <input type="hidden" id="user_id" value="{{ $join->user_id }}">
    <input type="hidden" id="join_id" value="{{ $join->id }}">
    <input type="hidden" id="start_join" value="{{ $join->join_date }}">
    <input type="hidden" id="term" value="{{ $join->join_term }}">
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12 mypage-title">
          <h5 class="mypage-body-title">今参加している - 正しい姿勢チャレンジ</h5>
    </div>

    <div class="col-3 top-div-box-1">
        <div class="my-challenge-card">
            <div class="card-title">チャレンジ機関</div>
            <div class="card-body">
              <h4>{{ $join->join_date }} ~</h4>
              <h4 id="end_join" ></h4>
            </div>
        </div>
    </div>

    <div class="col-3 top-div-box-1">
        <div class="my-challenge-card">
            <div class="card-title">チャレンジ期間</div>
            <div class="card-body">
              <h4>{{ $join->join_term }}日</h4>
              <div class="progress" style="margin-bottom: 20px;">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
              </div>
              <h4 style="text-align: center;">現在　一日目</h4>
            </div>
        </div>
    </div>

    <div class="col-3 top-div-box-1">
        <div class="my-challenge-card">
            <div class="card-title">参加費</div>
            <div class="card-body">
              @if($join->entry_fee == 0)
              <h4>無料で参加中</h4>
              @else
              <h4>{{ $join->entry_fee }}円</h4>
              @endif
            </div>
        </div>
    </div>

    <div class="col-3 top-div-box-1">
        <div class="my-challenge-card">
            <div class="card-title">全体達成率</div>
            <div class="card-body">
              <h4 style="float:left;">20%</h4>
              <div style="width: 110px;height: 110px;display: inline-block; float: right;">
                <canvas id="doughnut-chart"></canvas>
              </div>
            </div>
        </div>
    </div>


    <div class="col-md-12 mypage-title">
      <h5 class="mypage-body-title" id="today-date" style="padding-top:50px;"></h5>
    </div>

      <div class="col-md-8" style="margin-top: 10px;">
        <div style="width: 650px;">
          <canvas id="bar-chart"></canvas>
        </div>
      </div>

      <div class="col-md-4">
        <div class="row" style="margin-top: 50px;">
          <div class="col-md-12">
            <div class="my-challenge-card" style="margin: 5px 0; height: 100px;">
              <div class="card-title-my-challenge-stat">昨日の着席時間</div>
              <div class="card-body-my-challenge-stat">
                <h4>5時間 50分</h4>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="my-challenge-card" style="margin: 5px 0; height: 100px;">
              <div class="card-title-my-challenge-stat">昨日：正しい姿勢の時間</div>
              <div class="card-body-my-challenge-stat">
                <h4>1時間 20分</h4>
              </div>
            </div>
          </div>
          
          <div class="col-md-12">
            <div class="my-challenge-card" style="margin: 5px 0; height: 100px;">
              <div class="card-title-my-challenge-stat">今までの達成率</div>
              <div class="card-body-my-challenge-stat">
                <h4>20%</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

  <div>
    @if(Auth::user()->id == Auth::user()->admin)
        <button id="edit_join">챌린지 수정</button>
        <button id="del_join">챌린지 삭제</button>
    @endif
    <button id="back_join">リストへ</button>
</div>

</div>

{{--    <table align="center" id="show_join">
    <th class="s_join_th" colspan="2">{{ $join->challenge->challenge_title }}</th>
    <tr>
        <td class="join_title">도전 번호</td>
        <td class="join_content text_1">{{ $join->id }}</td>
    </tr>
    <tr>
        <td class="join_title">챌린지 내용</td>
        <td class="join_content text_1" id="infor"><pre>{{ $join->challenge->challenge_information }}</pre></td>
    </tr>
    <tr>
        <td class="join_title">유저 이름</td>
        <td class="join_content text_1">{{ $join->user->user_id }}</td>
    </tr>
    <tr>
        <td class="join_title">시작 날짜</td>
        <td class="join_content text_1" id="start_join">{{ $join->join_date }}</td>
    </tr>
    <tr>
        <td class="join_title">참여 기간</td>
        <td class="join_content text_1" id="term">{{ $join->join_term }}일</td>
    </tr>
    <tr>
        <td class="join_title">종료 날짜</td>
        <td class="join_content text_1" id="end_join"></td>
    </tr>
    <tr>
        <td class="join_title">참가 비</td>
        <td class="join_content text_1">￦ {{ $join->entry_fee }}</td>
    </tr>
    <tr>
        <td class="join_title">달성율</td>
        <td class="join_content text_1">{{ $join->achivement }} %</td>
    </tr>
</table>

<div class="chall_list">
    <h2>{{ $join->challenge->challenge_title }} 달성률</h2>
    <canvas id="lineChart"></canvas>
</div>
--}}



<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="/js/joinChallenge.js"></script>
<script>
    $(document).ready(function() {    
      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth()+1; //January is 0!
      var yyyy = today.getFullYear();

      if(dd<10) {
          dd='0'+dd
      } 

      if(mm<10) {
          mm='0'+mm
      } 

    today = yyyy+'年 '+mm+'月 '+dd+'日';
    // document.write(today);

    $('#today-date').text(today);
        // var str = $('#infor').html();
        // str = str.split('&lt;br/&gt;').join("\n");
        // $('#infor').html(str);

        function calDate(date, day, sign) {
            var yy = parseInt(date.substr(0,4), 10);
            var mm = parseInt(date.substr(5, 2), 10);
            var dd = parseInt(date.substr(8), 10);
            var op = parseInt(day);

            if(sign == '+') {
                d = new Date(yy, mm-1, dd+op);
            } else if(sign == '-') {
                d = new Date(yy, mm-1, dd-op);
            }

            yy = d.getFullYear();
            mm = d.getMonth()+1;
            mm = (mm < 10) ? '0' + mm : mm;
            dd = d.getDate();
            dd = (dd < 10) ? '0' + dd : dd; 

            return '' + yy + '-' + mm + '-' + dd;
        }

        var start_date = $('#start_join').html();
        var day = $('#term').html();

        console.log(start_date, day, calDate(start_date, day, '+'));

        $('#end_join').html('2020-08-21');
        // $('#end_join').html(calDate(start_date, day, '+'));


        // ---- 달성율 도넛차트 -------------
        doughnut_data = {
            datasets: [{
                data: [20, 80],
                backgroundColor: [ '#0d8aff', '#c4c4c4']
            }],
        };

        var doughnut_chart = document.getElementById("doughnut-chart").getContext("2d");
        var draw_doughnut_chart = new Chart(doughnut_chart, {
            type: 'doughnut',
            data: doughnut_data,
            options: {
              legend: false,
              responsive: true,
              cutoutPercentage: 85,
              tooltips: {
                  enabled: false
              },
              aspectRatio: 1
            }
        });

        //---------------------------------------


        //-------------달성 진척 바 차트 --------------------------
        var bar_data = {
          labels: ['08-14', '08-15', '08-16', '08-17', '08-18', '08-19', '08-20', '08-21'],
          datasets: [{
              backgroundColor: '#46BFBD',
              // barPercentage: 0.5,
              // barThickness: 6,
              // maxBarThickness: 8,
              // minBarLength: 2,
              data: [30, 0, 0, 0, 0, 0, 0, 0]
          }]
        };

        var bar_options = {
          scales: {
              xAxes: [{
                  gridLines: {
                      offsetGridLines: false
                  }
              }],
              yAxes: [{
                ticks: {
                  min: 0,
                  max: 100, 
                  stepSize: 20,
                }
              }],
          }
        };

        var bar_chart = document.getElementById("bar-chart").getContext("2d");
        var draw_bar_chart = new Chart(bar_chart, {
          type: 'bar',
          data: bar_data,
          options: bar_options
        });


        var ctxL1 = document.getElementById("lineChart").getContext('2d');
        var myLineChart1 = new Chart(ctxL1, {
            type: 'line',
            data: {
            labels: ['1(日目)', 2, 3, 4, 5, 6, 7, 8],
            datasets: [
                {
                label: "日別正しい姿勢の比率",
                data: [34, 0, 0, 0, 0, 0, 0, 0],
                backgroundColor: [
                    'rgba(0, 227, 106, .2)',
                ],
                borderColor: [
                    'rgba(0, 227, 106, .7)',
                ],
                borderWidth: 2
                }
            ]
            },
            options: {
              responsive: true
            }
        });
    });
</script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<script src="{{ asset('js/app.js') }}"></script>