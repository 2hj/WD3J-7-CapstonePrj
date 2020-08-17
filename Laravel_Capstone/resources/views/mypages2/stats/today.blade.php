
<div class="container">
    <div class="row">
        <div class="col-md-12 mypage-title">
          <h4 class="mypage-body-title" id="today-date"></h4>
        </div>
        <div class="col-3 top-div-box-1">
            <div class="stat-card">
                <div class="card-title">今日の着席時間</div>
                <div class="card-body">
                    <img src="\img\ui\웨이스탠드\소스\마이페이지\자세이력\착석시간 아이콘.png" alt="">
                    <h3>6時間 40分</h3>
                </div>
            </div>
        </div>

        <div class="col-3 top-div-box-2">
            <div class="stat-card">
                <div class="card-title">正しい姿勢の時間</div>
                <div class="card-body">
                    <img src="\img\ui\웨이스탠드\소스\마이페이지\자세이력\바른자세 아이콘.png" alt="">
                    <h3>2時間 15分</h3>
                </div>
            </div>
        </div>

        <div class="col-3 top-div-box-3">
            <div class="stat-card">
                <div class="card-title">今日の悪い姿勢</div>
                <div class="card-body">
                    <img src="\img\ui\웨이스탠드\소스\마이페이지\자세이력\자세 아이콘.png" alt="">
                    <h3>左足を組んだ姿勢</h3>
                </div>
            </div>
        </div>

        <div class="col-3 top-div-box-3">
            <div class="stat-card">
                <div class="card-title">一番長く座っていた時間</div>
                <div class="card-body">
                    <img src="\img\ui\웨이스탠드\소스\마이페이지\자세이력\착석시간 아이콘.png" alt="">
                    <h3>1時間 50分</h3>
                    <p>立ち上がってストレッチをしてください!</p>
                </div>
            </div>
        </div>


        
        <div class="col-12 main-div-box stat-main-linechart">
            {{--{!! json_encode($data) !!}--}}
            <?php $msg = $data; ?>
            <h4 class="mypage-body-title" >今日の姿勢変化</h4>
            <canvas id="lineChart"></canvas>
        </div>

        <div class="col-6 main-div-box" style="margin-top:30px;">
            <div class="card label-chart">
                <div class="card-body">
                    <h5 class="card-title">今日はどんな姿勢で座ったか?</h5>
                    <canvas id="labelChart1"></canvas>
                </div>
            </div>   
        </div>

        <div class="col-6 main-div-box" style="margin-top:30px;">
            <div class="card label-chart">
                <div class="card-body">
                    <h5 class="card-title">正しい姿勢 / 悪い姿勢 -　比率</h5>
                    <canvas id="labelChart2"></canvas>
                </div>
            </div> 
        </div>

        <div class="col-12 main-div-box stat-main-linechart">
            <h4 class="mypage-body-title" >時間による姿勢変化</h4>
            <div class="dropdown show">
                <a style="background-color: #58f1b0;" class="btn btn-secondary dropdown-toggle select-btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    姿勢を選択
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" id="good">正しい姿勢</a>
                    <a class="dropdown-item" id="cross-left-leg">左足を組んだ姿勢</a>
                    <a class="dropdown-item" id="cross-right-leg">右足を組んだ姿勢</a>
                    <a class="dropdown-item" id="edge-lean">背もたれに寄りかかった姿勢</a>
                    <a class="dropdown-item" id="lean-toward">前に曲がった姿勢</a>
                    <a class="dropdown-item" id="lean-left">左に曲がった姿勢</a>
                    <a class="dropdown-item" id="lean-right">右に曲がった姿勢</a>
                </div>
            </div>
            <div id="myChart-div">
            <canvas class="myChart"></canvas>
            </div>
        </div>

    </div>
</div>


<script type="text/javascript">
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

// Date.getDay() -> 일요일(0) ~ 토요일(6)

    today = yyyy+'年 '+mm+'月 '+dd+'日';
    // document.write(today);

    $('#today-date').text(today);

    var msg = <?php echo $msg ?>;
    console.log(msg);

    var colors = {
        'green': '#00e36a',
        'red': '#F7464A',
        'yellow': '#FDB45C',
        'pink': '#ffacb7',
        'blue': '#0d8aff',
        'purple': '#a6b1e1',// #9399ff
        'negativeBlue': '#4f98ca',
        'grey': '#c4c4c4',
        'blueGreen': '#46BFBD',
        'hoverBlue': '#309bff',
        'hoverBlueGreen': '#5AD3D1',
        'hoverRed': '#FF5A5E',
    };

    //line
    var ctxL1 = document.getElementById("lineChart").getContext('2d');

    var myLineChart1 = new Chart(ctxL1, {
        type: 'line',
        data: {
        labels: ["1", "2", "3", "4", "5", "6", "7"],
        datasets: [
            {
            label: "正しい姿勢の変化",
            data: [65, 59, 70, 81, 56, 55, 40],
            backgroundColor: [
                'rgba(0, 227, 106, .2)',
            ],
            borderColor: [
                'rgba(0, 227, 106, .7)',
            ],
            borderWidth: 2
            },
            {
            label: "悪い姿勢の変化",
            data: [35, 41, 30, 19, 44, 45, 60],
            backgroundColor: [
                'rgba(255, 59, 59, .2)',
            ],
            borderColor: [
                'rgba(255, 59, 59, .7)',
            ],
            borderWidth: 2
            }
        ]
        },
        options: {
        responsive: true
        }
    });

    var ctxP1 = document.getElementById("labelChart1").getContext('2d');

    var allPosPieChart = new Chart(ctxP1, {
        plugins: [ChartDataLabels],
        type: 'pie',
        data: {
        labels: [
            "正しい姿勢", 
            "左足を組んだ姿勢", 
            "右足を組んだ姿勢", 
            "背もたれに寄りかかった姿勢", 
            "前に曲がった姿勢", 
            "左に曲がった姿勢", 
            "右に曲がった姿勢"
        ],
        datasets: [{
            data: [210, 130, 120, 160, 120, 30, 30],
            backgroundColor: [
            colors.green,
            colors.red,
            colors.yellow,
            colors.pink,
            colors.purple,
            colors.negativeBlue,
            colors.grey,
            ],
            hoverBackgroundColor: [
            colors.green,
            colors.red,
            colors.yellow,
            colors.pink,
            colors.purple,
            colors.negativeBlue,
            colors.grey
            ]
        }]
        },
        options: {
          responsive: true,
          legend: {
            position: 'right',
            labels: {
            padding: 20,
            boxWidth: 10
            }
          },
        plugins: {
            datalabels: {
            formatter: (value, ctx) => {
                let sum = 0;
                let dataArr = ctx.chart.data.datasets[0].data;
                dataArr.map(data => {
                sum += data;
                });
                let percentage = (value * 100 / sum).toFixed(2) + "%";
                return percentage;
            },
            color: 'white',
            labels: {
                title: {
                font: {
                    size: '16'
                }
                }
            }
            }
        }
        }
    });

    var ctxP2 = document.getElementById("labelChart2").getContext('2d');
    
    var twoPosPieChart = new Chart(ctxP2, {
        plugins: [ChartDataLabels],
        type: 'pie',
        data: {
          labels: ["正しい姿勢", "悪し姿勢"],
          datasets: [{
            data: [34, 66],
            backgroundColor: [colors.blue, colors.red],
            hoverBackgroundColor: [colors.hoverBlue, colors.hoverRed]
          }]
        },
        options: {
          responsive: true,
          legend: {
            position: 'right',
            labels: {
            padding: 20,
            boxWidth: 10
          }
        },
        plugins: {
            datalabels: {
            formatter: (value, ctx) => {
                let sum = 0;
                let dataArr = ctx.chart.data.datasets[0].data;
                dataArr.map(data => {
                sum += data;
                });
                let percentage = (value * 100 / sum).toFixed(2) + "%";
                return percentage;
            },
            color: 'white',
            labels: {
                title: {
                font: {
                    size: '16'
                }
                }
            }
            }
        }
        }
    });
    
    // 자세별 추이 그래프 <canvas> 태그 가져오기
    var ctxL_myChart = document.getElementsByClassName("myChart");
    
    var myChart_data = {
        type: 'line',
        data: {
        labels: ["1", "2", "3", "4", "5", "6", "7"],
        datasets: [
            {
            label: "正しい姿勢の変化",
            data: [65, 59, 80, 81, 56, 55, 40],
            backgroundColor: [
                'rgba(14, 237, 115, .2)',
            ],
            borderColor: [
                'rgba(14, 237, 115, .7)',
            ],
            borderWidth: 2
            },
        ]
        },
        options: {
        responsive: true
        }
    };
    
    //자세별 추이 그래프 그리기
    // 정자세 추이
    var myChart = new Chart(ctxL_myChart, myChart_data);

    $('.select-btn').on('click', function(){
      console.log('자세 선택 버튼');
    });

    //자세별 추이 보기
    $('#good').click(function(e){
        console.log('cross left leg click');
        myChart_data.data.datasets[0].label = '正しい姿勢の変化';
        myChart_data.data.datasets[0].data = [65, 59, 80, 81, 56, 55, 40];
        myChart_data.data.datasets[0].backgroundColor = ['rgba(14, 237, 115, .2)'];
        myChart_data.data.datasets[0].borderColor = ['rgba(14, 237, 115, .7)'];
        myChart.update();
    });

    $('#cross-left-leg').click(function(e){
        console.log('cross left leg click');
        myChart_data.data.datasets[0].label = '左足を組んだ姿勢の変化';
        myChart_data.data.datasets[0].data = [20, 10, 0, 40, 10, 50, 20];
        myChart_data.data.datasets[0].backgroundColor = ['rgba(255, 65, 51, .2)'];
        myChart_data.data.datasets[0].borderColor = ['rgba(255, 65, 51, .7)'];
        myChart.update();
    });
    
    $('#cross-right-leg').click(function(e){
        console.log('cross left leg click');
        myChart_data.data.datasets[0].data = [10, 40, 20, 60, 40, 25, 35];
        myChart_data.data.datasets[0].label = '右足を組んだ姿勢の変化';
        myChart_data.data.datasets[0].backgroundColor = ['rgba(255, 168, 64, .2)'];
        myChart_data.data.datasets[0].borderColor = ['rgba(255, 168, 64, .7)'];
        myChart.update();
    });
    
    $('#edge-lean').click(function(e){
        console.log('cross left leg click');
        myChart_data.data.datasets[0].label = '背もたれに寄りかかった姿勢の変化';
        myChart_data.data.datasets[0].data = [10, 20, 45, 35, 25, 55, 40];
        myChart_data.data.datasets[0].backgroundColor = ['rgba(255, 128, 144, .2)'];
        myChart_data.data.datasets[0].borderColor = ['rgba(255, 128, 144, .7)'];
        myChart.update();
    });
   
    $('#lean-toward').click(function(e){
        console.log('cross left leg click');
        myChart_data.data.datasets[0].label = '前に曲がった姿勢の変化';
        myChart_data.data.datasets[0].data = [5, 25, 15, 45, 60, 25, 30];
        myChart_data.data.datasets[0].backgroundColor = ['rgba(139, 111, 237, .2)'];
        myChart_data.data.datasets[0].borderColor = ['rgba(139, 111, 237, .7)'];
        myChart.update();
    });
  
    $('#lean-left').click(function(e){
        console.log('cross left leg click');
        myChart_data.data.datasets[0].label = '左に曲がった姿勢の変化';
        myChart_data.data.datasets[0].data = [5, 35, 60, 50, 20, 45, 65];
        myChart_data.data.datasets[0].backgroundColor = ['rgba(47, 108, 150, .2)'];
        myChart_data.data.datasets[0].borderColor = ['rgba(47, 108, 150, .7)'];
        myChart.update();
    });
   
    $('#lean-right').click(function(e){
        console.log('cross left leg click');
        myChart_data.data.datasets[0].label = '右に曲がった姿勢の変化';
        myChart_data.data.datasets[0].data = [35, 20, 5, 50, 65, 35, 20];
        myChart_data.data.datasets[0].backgroundColor = ['rgba(122, 122, 122, .2)'];
        myChart_data.data.datasets[0].borderColor = ['rgba(122, 122, 122, .7)'];
        myChart.update();
    });
    
</script>
