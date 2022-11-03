google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Temperature', 32],
          ['Humidity', 64],
          ['Soil Moisture', 77.42],
          ['LDR', 369]
        ]);

        var options = {
          height: 300,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('gauge-chart'));

        chart.draw(data, options);

        setInterval(function() {
          data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
          chart.draw(data, options);
        }, 5000);
        setInterval(function() {
          data.setValue(3, 1, 60 + Math.round(20 * Math.random()));
          chart.draw(data, options);
        }, 12000);
      }