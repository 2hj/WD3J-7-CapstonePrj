@extends('top_nav')

@section('main')

    <div>
        <input type="hidden" id="user_id" value="{{ $join->user_id }}">
        <input type="hidden" id="join_id" value="{{ $join->id }}">
        <input type="hidden" id="start_join" value="{{ $join->join_date }}">
        <input type="hidden" id="term" value="{{ $join->join_term }}">
    </div>

    <div class="container">
      <div class="row">
          <div class="col-md-12">
            <h1 style="margin: 30px 0;">{{ $user->name }} 님의 바른자세 챌린지</h1><br>
          </div>
      </div>

      <div class="row" style="background-color: white;">
        <div class="col-md-3" style="display: inline-block;">
          <div class="card border-info mb-3" style="max-width: 16rem;height: 200px;border: 0;box-shadow: 0px 0px 17px #d5dfe8;margin:0 auto;box-shadow: 0px 0px 20px #d5dfe8;">
            <div class="card-header" style="text-align: center; font-weight: bold;">참여날짜</div>
            <div class="card-body text-info" style="text-align: center;">
              <h5 class="card-title" style="margin-top: 20px;">{{ $join->join_date }} ~</h5>
              <h5 class="card-title" id="end_join" ></h5>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="display: inline-block;">
          <div class="card border-info mb-3" style="max-width: 16rem;height: 200px;border: 0;box-shadow: 0px 0px 17px #d5dfe8;margin:0 auto;box-shadow: 0px 0px 20px #d5dfe8;">
            <div class="card-header" style="text-align: center; font-weight: bold;">참여기간</div>
            <div class="card-body text-info">
              <h5 class="card-title">{{ $join->join_term }}일</h5>
              <div class="progress" style="margin-bottom: 20px;">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
              </div>
              <h4 style="text-align: center;">현재 1일째</h3>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="display: inline-block;">
          <div class="card border-info mb-3" style="max-width: 16rem;height: 200px;border: 0;box-shadow: 0px 0px 17px #d5dfe8;margin:0 auto;box-shadow: 0px 0px 20px #d5dfe8;">
            <div class="card-header"  style="text-align: center; font-weight: bold;">참가비</div>
            <div class="card-body text-info">
              @if($join->entry_fee == 0)
              <h5 class="card-title" style="line-height: 110px;text-align: center;">무료로 참가 중</h5>
              @else
              <h5 class="card-title" style="line-height: 110px;text-align: center;">{{ $join->entry_fee }}원</h5>
              @endif
            </div>
          </div>
        </div>

        <div class="col-md-3" style="display: inline-block;">
          <div class="card border-info mb-3" style="max-width: 16rem;height: 200px;border: 0;box-shadow: 0px 0px 17px #d5dfe8;margin:0 auto;box-shadow: 0px 0px 20px #d5dfe8;">
            <div class="card-header" style="text-align: center; font-weight: bold;">전체 달성율</div>
            <div class="card-body text-info">
              <h3 style="display: inline-block;line-height: 110px;">20%</h3>
              <div style="width: 110px;height: 110px;display: inline-block; float: right;">
                <canvas id="doughnut-chart"></canvas>
              </div>
            </div>
          </div>
        </div>

          <div class="col-md-8" style="margin-top: 60px;">
            <div style="width: 650px;">
              <canvas id="bar-chart"></canvas>
            </div>
          </div>

          <div class="col-md-4">
            <div class="row" style="margin-top: 50px;">
              <div class="col-md-12">
                <div class="card border-primary mb-3" style="max-width: 18rem; height: 100px;">
                  <div class="card-header">어제 총 앉은 시간</div>
                  <div class="card-body text-primary">
                    <h5 class="card-title">5시간 50분</h5>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="card border-success mb-3" style="max-width: 18rem; height: 100px;">
                  <div class="card-header">어제 바른자세로 앉은 시간</div>
                  <div class="card-body text-success">
                    <h5 class="card-title">1시간 20분</h5>
                  </div>
                </div>
              </div>
              
              <div class="col-md-12">
                <div class="card border-danger mb-3" style="max-width: 18rem; height: 100px;">
                  <div class="card-header">현재까지 달성율</div>
                  <div class="card-body text-danger">
                    <h5 class="card-title">20%</h5>
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
        <button id="back_join">목록으로</button>
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



@include('partials.footer')

@stop

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="/js/joinChallenge.js"></script>
<script>
    $(document).ready(function() {    
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

        $('#end_join').html('2020-07-14');
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
          labels: ['07-06', '07-07', '07-09', '07-10', '07-11', '07-12', '07-13', '07-14'],
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
              }]
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
            labels: ['1(일차)', 2, 3, 4, 5, 6, 7, 8],
            datasets: [
                {
                label: "일별 바른자세 달성율",
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
<link rel="stylesheet" href="/css/joinChallenge.css">