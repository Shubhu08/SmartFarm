google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Time','LDR'],
          ['12:30pm',320],
          ['12:35pm',314],
          ['12:40pm',367],
          ['12:45pm',369],
          ['12:50pm',364],
          ['12:55pm',377],
          ['01:00pm',371],
          ]);

        var options = {
		  colors:['red'],
		  height: 300,
		  legend: {position: 'top', textStyle: {color: 'blue', fontSize: 16}},
          hAxis: {title: 'Time',  titleTextStyle: {color: '#333'}},
          isStacked: true
        };

        var chart = new google.visualization.SteppedAreaChart(document.getElementById('step-area-chart'));

        chart.draw(data, options);
      }