<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>折れ線グラフ</h1>

    <button type="button" onclick="location.href='read.php'">戻る</button>
  <canvas id="myLineChart"></canvas>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
  
  <script>
  var ctx = document.getElementById("myLineChart");
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [ '2023/5/3', '2023/5/20','2023/6/3', '2023/7/29', '2023/9/9', '2023/11/10'],
      datasets: [
        {
          label: 'LB',
          data: [ 40, 48, 48, 50, 50, 50],
          borderColor: "rgba(255,0,0,1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: 'DT',
          data: [ 26, 30, 29, 30, 30, 31],
          borderColor: "rgba(0,0,255,1)",
          backgroundColor: "rgba(0,0,0,0)"
        }
      ],
    },
    options: {
      title: {
        display: true,
        text: '季節とテンション(LBとDT)の関係'
      },
      scales: {
        yAxes: [{
          ticks: {
            suggestedMax: 54,
            suggestedMin: 25,
            stepSize: 2,
            callback: function(value, index, values){
              return  value +  'LB(DT)'
            }
          }
        }]
      },
    }
  });
  </script>
</body>
</html>