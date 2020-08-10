<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin:15px 0 ;">
          <h4 id="today-date" style="font-weight:bold;"></h4>
        </div>
        <div class="col-3 top-div-box-1">
            <div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-header">今日の着席時間</div>
                <div class="card-body text-success">
                    <h5 class="card-title">6時間 40分</h5>
                </div>
            </div>
        </div>

        <div class="col-3 top-div-box-2">
            <div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-header">正しい姿勢の時間</div>
                <div class="card-body text-success">
                    <h5 class="card-title">2時間 15分</h5>
                </div>
            </div>
        </div>

        <div class="col-3 top-div-box-3">
            <div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-header">今日の悪い姿勢</div>
                <div class="card-body text-success">
                    <h5 class="card-title">左足を組んだ姿勢</h5>
                </div>
            </div>
        </div>


        
        <div class="col-9 main-div-box">
            {{--{!! json_encode($data) !!}--}}
            <?php $msg = $data; ?>
            <h2>今日の姿勢変化</h2>
            <canvas id="lineChart"></canvas>
        </div>

        <div class="col-3 right-banner-box">
            <div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-header">一番長く座っていた時間</div>
                <div class="card-body text-success">
                    <h5 class="card-title">1時間 50分</h5>
                    <p class="card-text">立ち上がってストレッチをしてください!</p>
                </div>
            </div>
        </div>

        <div class="col-6 main-div-box" style="margin-top:30px;">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">今日はどんな姿勢で座ったか?</h5>
                    <canvas id="labelChart1"></canvas>
                </div>
            </div>   
        </div>

        <div class="col-6 main-div-box" style="margin-top:30px;">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">正しい姿勢 / 悪い姿勢 -　比率</h5>
                    <canvas id="labelChart2"></canvas>
                </div>
            </div> 
        </div>

        <div class="col-9 main-div-box" style="margin-top:30px;">
            <h2>時間による姿勢変化</h2>
            <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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
            label: "바른자세 추이",
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
            label: "나쁜자세 추이",
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
            "바른자세", 
            "왼쪽다리 꼰 자세", 
            "오른쪽다리 꼰 자세", 
            "뒤로 기댄 자세", 
            "앞으로 구부정한 자세", 
            "왼쪽으로 구부정한 자세", 
            "오른쪽으로 구부정한 자세"
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
          labels: ["바른자세", "나쁜자세"],
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
            label: "바른자세 추이",
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

    //자세별 추이 보기
    $('#good').click(function(e){
        console.log('cross left leg click');
        myChart_data.data.datasets[0].label = '바른 자세 추이';
        myChart_data.data.datasets[0].data = [65, 59, 80, 81, 56, 55, 40];
        myChart_data.data.datasets[0].backgroundColor = ['rgba(14, 237, 115, .2)'];
        myChart_data.data.datasets[0].borderColor = ['rgba(14, 237, 115, .7)'];
        myChart.update();
    });

    $('#cross-left-leg').click(function(e){
        console.log('cross left leg click');
        myChart_data.data.datasets[0].label = '왼쪽다리 꼰 자세 추이';
        myChart_data.data.datasets[0].data = [20, 10, 0, 40, 10, 50, 20];
        myChart_data.data.datasets[0].backgroundColor = ['rgba(255, 65, 51, .2)'];
        myChart_data.data.datasets[0].borderColor = ['rgba(255, 65, 51, .7)'];
        myChart.update();
    });
    
    $('#cross-right-leg').click(function(e){
        console.log('cross left leg click');
        myChart_data.data.datasets[0].data = [10, 40, 20, 60, 40, 25, 35];
        myChart_data.data.datasets[0].label = '오른쪽다리 꼰 자세 추이';
        myChart_data.data.datasets[0].backgroundColor = ['rgba(255, 168, 64, .2)'];
        myChart_data.data.datasets[0].borderColor = ['rgba(255, 168, 64, .7)'];
        myChart.update();
    });
    
    $('#edge-lean').click(function(e){
        console.log('cross left leg click');
        myChart_data.data.datasets[0].label = '뒤로 기댄 자세 추이';
        myChart_data.data.datasets[0].data = [10, 20, 45, 35, 25, 55, 40];
        myChart_data.data.datasets[0].backgroundColor = ['rgba(255, 128, 144, .2)'];
        myChart_data.data.datasets[0].borderColor = ['rgba(255, 128, 144, .7)'];
        myChart.update();
    });
   
    $('#lean-toward').click(function(e){
        console.log('cross left leg click');
        myChart_data.data.datasets[0].label = '앞으로 구부정한 자세 추이';
        myChart_data.data.datasets[0].data = [5, 25, 15, 45, 60, 25, 30];
        myChart_data.data.datasets[0].backgroundColor = ['rgba(139, 111, 237, .2)'];
        myChart_data.data.datasets[0].borderColor = ['rgba(139, 111, 237, .7)'];
        myChart.update();
    });
  
    $('#lean-left').click(function(e){
        console.log('cross left leg click');
        myChart_data.data.datasets[0].label = '왼쪽으로 구부정한 자세 추이';
        myChart_data.data.datasets[0].data = [5, 35, 60, 50, 20, 45, 65];
        myChart_data.data.datasets[0].backgroundColor = ['rgba(47, 108, 150, .2)'];
        myChart_data.data.datasets[0].borderColor = ['rgba(47, 108, 150, .7)'];
        myChart.update();
    });
   
    $('#lean-right').click(function(e){
        console.log('cross left leg click');
        myChart_data.data.datasets[0].label = '오른쪽으로 구부정한 자세 추이';
        myChart_data.data.datasets[0].data = [35, 20, 5, 50, 65, 35, 20];
        myChart_data.data.datasets[0].backgroundColor = ['rgba(122, 122, 122, .2)'];
        myChart_data.data.datasets[0].borderColor = ['rgba(122, 122, 122, .7)'];
        myChart.update();
    });
    
</script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<script src="{{ asset('js/app.js') }}"></script>